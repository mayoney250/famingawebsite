<?php
declare(strict_types=1);

/**
 * Job Applications Admin Management
 *
 * @package Faminga_Theme_V1
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add the job applications admin menu item
 */
function faminga_theme_v1_add_job_applications_menu() {
    add_submenu_page(
        'edit.php?post_type=faminga_job',
        __('Job Applications', 'faminga-theme-v1'),
        __('Applications', 'faminga-theme-v1'),
        'manage_options',
        'faminga-job-applications',
        'faminga_theme_v1_job_applications_page'
    );
}
add_action('admin_menu', 'faminga_theme_v1_add_job_applications_menu');

/**
 * Create a database table for job applications if it doesn't exist
 */
function faminga_theme_v1_create_job_applications_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';
    $charset_collate = $wpdb->get_charset_collate();

    // Check if the table already exists
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;

    if (!$table_exists) {
        // Create the table
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            job_id mediumint(9) NOT NULL,
            job_title varchar(255) NOT NULL,
            applicant_name varchar(255) NOT NULL,
            applicant_email varchar(255) NOT NULL,
            applicant_phone varchar(50) DEFAULT '' NOT NULL,
            applicant_location varchar(100) DEFAULT '' NOT NULL,
            cover_letter text NOT NULL,
            resume_url varchar(255) DEFAULT '' NOT NULL,
            status varchar(50) DEFAULT 'new' NOT NULL,
            admin_notes text DEFAULT '' NOT NULL,
            PRIMARY KEY  (id),
            KEY job_id (job_id),
            KEY status (status)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
// Run on theme activation and immediately
add_action('after_switch_theme', 'faminga_theme_v1_create_job_applications_table');
// Run this function now to create the table if it doesn't exist
faminga_theme_v1_create_job_applications_table();

/**
 * Add a custom REST endpoint for job applications
 */
function faminga_theme_v1_register_job_application_endpoint() {
    register_rest_route('faminga/v1', '/job-application', [
        'methods' => 'POST',
        'callback' => 'faminga_theme_v1_submit_job_application',
        'permission_callback' => '__return_true',
    ]);
}
add_action('rest_api_init', 'faminga_theme_v1_register_job_application_endpoint');

/**
 * Handle job application submission via REST API
 */
function faminga_theme_v1_submit_job_application($request) {
    // Validate the request
    if (!isset($request['job_id']) || !isset($request['applicant_name']) || !isset($request['applicant_email'])) {
        return new WP_Error('missing_fields', __('Required fields are missing', 'faminga-theme-v1'), ['status' => 400]);
    }

    // Check if job exists and is open
    $job_id = intval($request['job_id']);
    $job = get_post($job_id);
    
    if (!$job || $job->post_type !== 'faminga_job') {
        return new WP_Error('invalid_job', __('Invalid job ID', 'faminga-theme-v1'), ['status' => 400]);
    }
    
    $job_status = get_post_meta($job_id, '_job_status', true);
    if ($job_status !== 'open') {
        return new WP_Error('job_closed', __('This job is not accepting applications', 'faminga-theme-v1'), ['status' => 400]);
    }

    // Validate email
    $applicant_email = sanitize_email($request['applicant_email']);
    if (!is_email($applicant_email)) {
        return new WP_Error('invalid_email', __('Invalid email address', 'faminga-theme-v1'), ['status' => 400]);
    }

    // Handle file upload if present
    $resume_url = '';
    if (isset($_FILES['resume'])) {
        $upload = wp_handle_upload($_FILES['resume'], ['test_form' => false]);
        if (isset($upload['error'])) {
            return new WP_Error('upload_error', $upload['error'], ['status' => 400]);
        }
        $resume_url = $upload['url'];
    }

    // Save to database
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';
    
    $result = $wpdb->insert(
        $table_name,
        [
            'job_id' => $job_id,
            'job_title' => $job->post_title,
            'applicant_name' => sanitize_text_field($request['applicant_name']),
            'applicant_email' => $applicant_email,
            'applicant_phone' => isset($request['applicant_phone']) ? sanitize_text_field($request['applicant_phone']) : '',
            'applicant_location' => isset($request['applicant_location']) ? sanitize_text_field($request['applicant_location']) : '',
            'cover_letter' => isset($request['cover_letter']) ? wp_kses_post($request['cover_letter']) : '',
            'resume_url' => $resume_url,
            'status' => 'new',
            'admin_notes' => '',
        ]
    );

    if (!$result) {
        return new WP_Error('db_error', __('Failed to save application', 'faminga-theme-v1'), ['status' => 500]);
    }

    // Send email notification to admin
    $admin_email = get_option('admin_email');
    $subject = sprintf(__('[Faminga] New Job Application: %s', 'faminga-theme-v1'), $job->post_title);
    
    $message = sprintf(
        __("A new job application has been submitted:\n\nJob: %s\nApplicant: %s\nEmail: %s\n\nLog in to review this application.", 'faminga-theme-v1'),
        $job->post_title,
        $request['applicant_name'],
        $applicant_email
    );
    
    wp_mail($admin_email, $subject, $message);

    // Return success
    return [
        'success' => true,
        'message' => __('Your application has been submitted successfully', 'faminga-theme-v1')
    ];
}

/**
 * Render the job applications admin page
 */
function faminga_theme_v1_job_applications_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';
    
    // Process status updates
    if (isset($_POST['update_status']) && isset($_POST['application_id']) && isset($_POST['status']) && check_admin_referer('update_application_status')) {
        $application_id = intval($_POST['application_id']);
        $new_status = sanitize_text_field($_POST['status']);
        $admin_notes = isset($_POST['admin_notes']) ? sanitize_textarea_field($_POST['admin_notes']) : '';
        
        $wpdb->update(
            $table_name,
            [
                'status' => $new_status,
                'admin_notes' => $admin_notes
            ],
            ['id' => $application_id]
        );
        
        echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__('Application status updated successfully.', 'faminga-theme-v1') . '</p></div>';
    }
    
    // Handle filtering
    $job_filter = isset($_GET['job_filter']) ? intval($_GET['job_filter']) : 0;
    $status_filter = isset($_GET['status_filter']) ? sanitize_text_field($_GET['status_filter']) : '';
    
    $where_clauses = [];
    $where_values = [];
    
    if ($job_filter > 0) {
        $where_clauses[] = 'job_id = %d';
        $where_values[] = $job_filter;
    }
    
    if (!empty($status_filter)) {
        $where_clauses[] = 'status = %s';
        $where_values[] = $status_filter;
    }
    
    $where_sql = '';
    if (!empty($where_clauses)) {
        $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
    }
    
    // Get the applications with pagination
    $current_page = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $per_page = 20;
    $offset = ($current_page - 1) * $per_page;
    
    // Count total applications with filters
    $count_query = "SELECT COUNT(*) FROM $table_name $where_sql";
    $total_count = $wpdb->get_var($wpdb->prepare($count_query, $where_values));
    $total_pages = ceil($total_count / $per_page);
    
    // Get applications for current page
    $applications_query = "SELECT * FROM $table_name $where_sql ORDER BY created_at DESC LIMIT %d OFFSET %d";
    $query_args = array_merge($where_values, [$per_page, $offset]);
    $applications = $wpdb->get_results($wpdb->prepare($applications_query, $query_args));
    
    // Get all jobs for the filter dropdown
    $jobs = get_posts([
        'post_type' => 'faminga_job',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ]);
    
    // Application status options
    $status_options = [
        'new' => __('New', 'faminga-theme-v1'),
        'reviewing' => __('Reviewing', 'faminga-theme-v1'),
        'interview' => __('Interview', 'faminga-theme-v1'),
        'accepted' => __('Accepted', 'faminga-theme-v1'),
        'rejected' => __('Rejected', 'faminga-theme-v1'),
        'withdrawn' => __('Withdrawn', 'faminga-theme-v1'),
    ];
    
    // Status colors for badges
    $status_colors = [
        'new' => '#2271b1',
        'reviewing' => '#f0c33c',
        'interview' => '#3582c4',
        'accepted' => '#46b450',
        'rejected' => '#dc3232',
        'withdrawn' => '#777',
    ];
    ?>
    <div class="wrap">
        <h1><?php _e('Job Applications', 'faminga-theme-v1'); ?></h1>
        
        <div class="tablenav top">
            <div class="alignleft actions">
                <form method="get">
                    <input type="hidden" name="page" value="faminga-job-applications">
                    
                    <select name="job_filter">
                        <option value="0"><?php _e('All Jobs', 'faminga-theme-v1'); ?></option>
                        <?php foreach ($jobs as $job): ?>
                            <option value="<?php echo esc_attr($job->ID); ?>" <?php selected($job_filter, $job->ID); ?>>
                                <?php echo esc_html($job->post_title); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    
                    <select name="status_filter">
                        <option value=""><?php _e('All Statuses', 'faminga-theme-v1'); ?></option>
                        <?php foreach ($status_options as $value => $label): ?>
                            <option value="<?php echo esc_attr($value); ?>" <?php selected($status_filter, $value); ?>>
                                <?php echo esc_html($label); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    
                    <input type="submit" class="button" value="<?php esc_attr_e('Filter', 'faminga-theme-v1'); ?>">
                </form>
            </div>
            
            <div class="tablenav-pages">
                <?php if ($total_pages > 1): ?>
                    <span class="displaying-num">
                        <?php printf(
                            _n('%s item', '%s items', $total_count, 'faminga-theme-v1'),
                            number_format_i18n($total_count)
                        ); ?>
                    </span>
                    
                    <span class="pagination-links">
                        <?php
                        $page_links = paginate_links([
                            'base' => add_query_arg('paged', '%#%'),
                            'format' => '',
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                            'total' => $total_pages,
                            'current' => $current_page,
                        ]);
                        
                        echo $page_links;
                        ?>
                    </span>
                <?php endif; ?>
            </div>
            
            <br class="clear">
        </div>
        
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th><?php _e('ID', 'faminga-theme-v1'); ?></th>
                    <th><?php _e('Date', 'faminga-theme-v1'); ?></th>
                    <th><?php _e('Applicant', 'faminga-theme-v1'); ?></th>
                    <th><?php _e('Job', 'faminga-theme-v1'); ?></th>
                    <th><?php _e('Status', 'faminga-theme-v1'); ?></th>
                    <th><?php _e('Actions', 'faminga-theme-v1'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($applications)): ?>
                    <tr>
                        <td colspan="6"><?php _e('No applications found.', 'faminga-theme-v1'); ?></td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($applications as $application): ?>
                        <tr>
                            <td><?php echo esc_html($application->id); ?></td>
                            <td>
                                <?php echo esc_html(date_i18n(get_option('date_format') . ' ' . get_option('time_format'), strtotime($application->created_at))); ?>
                            </td>
                            <td>
                                <strong><?php echo esc_html($application->applicant_name); ?></strong><br>
                                <a href="mailto:<?php echo esc_attr($application->applicant_email); ?>"><?php echo esc_html($application->applicant_email); ?></a>
                                <?php if (!empty($application->applicant_phone)): ?>
                                    <br><?php echo esc_html($application->applicant_phone); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo esc_url(get_edit_post_link($application->job_id)); ?>">
                                    <?php echo esc_html($application->job_title); ?>
                                </a>
                            </td>
                            <td>
                                <span style="background-color: <?php echo esc_attr($status_colors[$application->status] ?? '#777'); ?>; color: white; padding: 3px 8px; border-radius: 4px; display: inline-block;">
                                    <?php echo esc_html($status_options[$application->status] ?? $application->status); ?>
                                </span>
                            </td>
                            <td>
                                <button type="button" class="button view-application" data-id="<?php echo esc_attr($application->id); ?>">
                                    <?php _e('View Details', 'faminga-theme-v1'); ?>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        
        <div class="tablenav bottom">
            <div class="tablenav-pages">
                <?php if ($total_pages > 1): ?>
                    <span class="displaying-num">
                        <?php printf(
                            _n('%s item', '%s items', $total_count, 'faminga-theme-v1'),
                            number_format_i18n($total_count)
                        ); ?>
                    </span>
                    
                    <span class="pagination-links">
                        <?php echo $page_links; ?>
                    </span>
                <?php endif; ?>
            </div>
            <br class="clear">
        </div>
    </div>

    <!-- Application Details Modal -->
    <div id="application-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:9999;">
        <div style="position:relative; width:80%; max-width:800px; margin:50px auto; background:white; padding:20px; border-radius:5px; max-height:80vh; overflow-y:auto;">
            <span id="close-modal" style="position:absolute; top:10px; right:15px; font-size:24px; cursor:pointer;">&times;</span>
            
            <h2><?php _e('Application Details', 'faminga-theme-v1'); ?></h2>
            <div id="application-content">
                <!-- Content will be loaded here via AJAX -->
                <div class="spinner" style="float:none; visibility:visible; margin:0 auto; display:block;"></div>
            </div>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // View application details
        $('.view-application').on('click', function() {
            var applicationId = $(this).data('id');
            $('#application-modal').show();
            
            // Load application details via AJAX
            $.ajax({
                url: ajaxurl,
                data: {
                    action: 'get_application_details',
                    application_id: applicationId,
                    security: '<?php echo wp_create_nonce('get_application_details_nonce'); ?>'
                },
                success: function(response) {
                    $('#application-content').html(response);
                }
            });
        });
        
        // Close modal
        $('#close-modal').on('click', function() {
            $('#application-modal').hide();
        });
        
        // Close modal when clicking outside
        $(document).on('click', function(e) {
            if ($(e.target).is('#application-modal')) {
                $('#application-modal').hide();
            }
        });
    });
    </script>
    <?php
}

/**
 * AJAX handler for getting application details
 */
function faminga_theme_v1_get_application_details() {
    check_ajax_referer('get_application_details_nonce', 'security');
    
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have permission to access this page.', 'faminga-theme-v1'));
    }
    
    $application_id = isset($_GET['application_id']) ? intval($_GET['application_id']) : 0;
    
    if ($application_id <= 0) {
        wp_die(__('Invalid application ID.', 'faminga-theme-v1'));
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';
    $application = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $application_id));
    
    if (!$application) {
        wp_die(__('Application not found.', 'faminga-theme-v1'));
    }
    
    // Application status options
    $status_options = [
        'new' => __('New', 'faminga-theme-v1'),
        'reviewing' => __('Reviewing', 'faminga-theme-v1'),
        'interview' => __('Interview', 'faminga-theme-v1'),
        'accepted' => __('Accepted', 'faminga-theme-v1'),
        'rejected' => __('Rejected', 'faminga-theme-v1'),
        'withdrawn' => __('Withdrawn', 'faminga-theme-v1'),
    ];
    ?>
    <div class="application-details">
        <div class="application-meta">
            <p>
                <strong><?php _e('Applied For:', 'faminga-theme-v1'); ?></strong>
                <a href="<?php echo esc_url(get_edit_post_link($application->job_id)); ?>">
                    <?php echo esc_html($application->job_title); ?>
                </a>
            </p>
            <p>
                <strong><?php _e('Date Applied:', 'faminga-theme-v1'); ?></strong>
                <?php echo esc_html(date_i18n(get_option('date_format') . ' ' . get_option('time_format'), strtotime($application->created_at))); ?>
            </p>
        </div>
        
        <hr>
        
        <div class="applicant-info">
            <h3><?php _e('Applicant Information', 'faminga-theme-v1'); ?></h3>
            <p>
                <strong><?php _e('Name:', 'faminga-theme-v1'); ?></strong>
                <?php echo esc_html($application->applicant_name); ?>
            </p>
            <p>
                <strong><?php _e('Email:', 'faminga-theme-v1'); ?></strong>
                <a href="mailto:<?php echo esc_attr($application->applicant_email); ?>"><?php echo esc_html($application->applicant_email); ?></a>
            </p>
            
            <?php if (!empty($application->applicant_phone)): ?>
                <p>
                    <strong><?php _e('Phone:', 'faminga-theme-v1'); ?></strong>
                    <?php echo esc_html($application->applicant_phone); ?>
                </p>
            <?php endif; ?>
            
            <?php if (!empty($application->applicant_location)): ?>
                <p>
                    <strong><?php _e('Location:', 'faminga-theme-v1'); ?></strong>
                    <?php echo esc_html($application->applicant_location); ?>
                </p>
            <?php endif; ?>
            
            <?php if (!empty($application->resume_url)): ?>
                <p>
                    <strong><?php _e('Resume:', 'faminga-theme-v1'); ?></strong>
                    <a href="<?php echo esc_url($application->resume_url); ?>" target="_blank" class="button">
                        <?php _e('Download Resume', 'faminga-theme-v1'); ?>
                    </a>
                </p>
            <?php endif; ?>
        </div>
        
        <?php if (!empty($application->cover_letter)): ?>
            <hr>
            <div class="cover-letter">
                <h3><?php _e('Cover Letter', 'faminga-theme-v1'); ?></h3>
                <div class="cover-letter-content" style="background: #f9f9f9; padding: 15px; border-radius: 4px;">
                    <?php echo wpautop(wp_kses_post($application->cover_letter)); ?>
                </div>
            </div>
        <?php endif; ?>
        
        <hr>
        
        <div class="application-status">
            <h3><?php _e('Application Status', 'faminga-theme-v1'); ?></h3>
            <form method="post" action="<?php echo esc_url(admin_url('edit.php?post_type=faminga_job&page=faminga-job-applications')); ?>">
                <?php wp_nonce_field('update_application_status'); ?>
                <input type="hidden" name="application_id" value="<?php echo esc_attr($application->id); ?>">
                
                <p>
                    <label for="status"><?php _e('Status:', 'faminga-theme-v1'); ?></label>
                    <select name="status" id="status" class="widefat">
                        <?php foreach ($status_options as $value => $label): ?>
                            <option value="<?php echo esc_attr($value); ?>" <?php selected($application->status, $value); ?>>
                                <?php echo esc_html($label); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </p>
                
                <p>
                    <label for="admin_notes"><?php _e('Admin Notes:', 'faminga-theme-v1'); ?></label>
                    <textarea name="admin_notes" id="admin_notes" class="widefat" rows="5"><?php echo esc_textarea($application->admin_notes); ?></textarea>
                </p>
                
                <p>
                    <input type="submit" name="update_status" class="button button-primary" value="<?php esc_attr_e('Update Status', 'faminga-theme-v1'); ?>">
                </p>
            </form>
        </div>
        
        <hr>
        
        <div class="application-actions">
            <a href="mailto:<?php echo esc_attr($application->applicant_email); ?>?subject=<?php echo esc_attr(sprintf(__('Your application for %s', 'faminga-theme-v1'), $application->job_title)); ?>" class="button">
                <?php _e('Email Applicant', 'faminga-theme-v1'); ?>
            </a>
            
            <a href="#" class="button delete-application" data-id="<?php echo esc_attr($application->id); ?>" style="color: #a00;">
                <?php _e('Delete Application', 'faminga-theme-v1'); ?>
            </a>
        </div>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        $('.delete-application').on('click', function(e) {
            e.preventDefault();
            
            if (confirm('<?php _e('Are you sure you want to delete this application? This action cannot be undone.', 'faminga-theme-v1'); ?>')) {
                $.ajax({
                    url: ajaxurl,
                    method: 'POST',
                    data: {
                        action: 'delete_job_application',
                        application_id: $(this).data('id'),
                        security: '<?php echo wp_create_nonce('delete_job_application_nonce'); ?>'
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            alert(response.data);
                        }
                    }
                });
            }
        });
    });
    </script>
    <?php
    wp_die();
}
add_action('wp_ajax_get_application_details', 'faminga_theme_v1_get_application_details');

/**
 * AJAX handler for deleting job applications
 */
function faminga_theme_v1_delete_job_application() {
    check_ajax_referer('delete_job_application_nonce', 'security');
    
    if (!current_user_can('manage_options')) {
        wp_send_json_error(__('You do not have permission to delete applications.', 'faminga-theme-v1'));
    }
    
    $application_id = isset($_POST['application_id']) ? intval($_POST['application_id']) : 0;
    
    if ($application_id <= 0) {
        wp_send_json_error(__('Invalid application ID.', 'faminga-theme-v1'));
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';
    $result = $wpdb->delete($table_name, ['id' => $application_id]);
    
    if ($result === false) {
        wp_send_json_error(__('Failed to delete application.', 'faminga-theme-v1'));
    }
    
    wp_send_json_success();
}
add_action('wp_ajax_delete_job_application', 'faminga_theme_v1_delete_job_application'); 