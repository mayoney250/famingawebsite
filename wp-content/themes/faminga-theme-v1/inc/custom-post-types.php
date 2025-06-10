<?php
declare(strict_types=1);

/**
 * Register custom post types for Faminga Theme
 */
function faminga_theme_v1_register_post_types() {
    // Job Listings Post Type
    register_post_type('faminga_job', [
        'labels' => [
            'name'               => __('Jobs', 'faminga-theme-v1'),
            'singular_name'      => __('Job', 'faminga-theme-v1'),
            'add_new'            => __('Add New Job', 'faminga-theme-v1'),
            'add_new_item'       => __('Add New Job', 'faminga-theme-v1'),
            'edit_item'          => __('Edit Job', 'faminga-theme-v1'),
            'new_item'           => __('New Job', 'faminga-theme-v1'),
            'view_item'          => __('View Job', 'faminga-theme-v1'),
            'search_items'       => __('Search Jobs', 'faminga-theme-v1'),
            'not_found'          => __('No jobs found', 'faminga-theme-v1'),
            'not_found_in_trash' => __('No jobs found in Trash', 'faminga-theme-v1'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'careers/jobs'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true,
    ]);

    // Career Opportunity Type Taxonomy
    register_taxonomy('opportunity_type', ['faminga_job'], [
        'labels' => [
            'name'              => __('Opportunity Types', 'faminga-theme-v1'),
            'singular_name'     => __('Opportunity Type', 'faminga-theme-v1'),
            'search_items'      => __('Search Opportunity Types', 'faminga-theme-v1'),
            'all_items'         => __('All Opportunity Types', 'faminga-theme-v1'),
            'parent_item'       => __('Parent Opportunity Type', 'faminga-theme-v1'),
            'parent_item_colon' => __('Parent Opportunity Type:', 'faminga-theme-v1'),
            'edit_item'         => __('Edit Opportunity Type', 'faminga-theme-v1'),
            'update_item'       => __('Update Opportunity Type', 'faminga-theme-v1'),
            'add_new_item'      => __('Add New Opportunity Type', 'faminga-theme-v1'),
            'new_item_name'     => __('New Opportunity Type Name', 'faminga-theme-v1'),
            'menu_name'         => __('Opportunity Types', 'faminga-theme-v1'),
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'opportunity-type'],
        'show_in_rest'      => true,
    ]);

    // Job Location Taxonomy
    register_taxonomy('job_location', ['faminga_job'], [
        'labels' => [
            'name'              => __('Locations', 'faminga-theme-v1'),
            'singular_name'     => __('Location', 'faminga-theme-v1'),
            'search_items'      => __('Search Locations', 'faminga-theme-v1'),
            'all_items'         => __('All Locations', 'faminga-theme-v1'),
            'parent_item'       => __('Parent Location', 'faminga-theme-v1'),
            'parent_item_colon' => __('Parent Location:', 'faminga-theme-v1'),
            'edit_item'         => __('Edit Location', 'faminga-theme-v1'),
            'update_item'       => __('Update Location', 'faminga-theme-v1'),
            'add_new_item'      => __('Add New Location', 'faminga-theme-v1'),
            'new_item_name'     => __('New Location Name', 'faminga-theme-v1'),
            'menu_name'         => __('Locations', 'faminga-theme-v1'),
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'job-location'],
        'show_in_rest'      => true,
    ]);

    // Job Skill Taxonomy
    register_taxonomy('job_skill', ['faminga_job'], [
        'labels' => [
            'name'              => __('Skills', 'faminga-theme-v1'),
            'singular_name'     => __('Skill', 'faminga-theme-v1'),
            'search_items'      => __('Search Skills', 'faminga-theme-v1'),
            'all_items'         => __('All Skills', 'faminga-theme-v1'),
            'parent_item'       => __('Parent Skill', 'faminga-theme-v1'),
            'parent_item_colon' => __('Parent Skill:', 'faminga-theme-v1'),
            'edit_item'         => __('Edit Skill', 'faminga-theme-v1'),
            'update_item'       => __('Update Skill', 'faminga-theme-v1'),
            'add_new_item'      => __('Add New Skill', 'faminga-theme-v1'),
            'new_item_name'     => __('New Skill Name', 'faminga-theme-v1'),
            'menu_name'         => __('Skills', 'faminga-theme-v1'),
        ],
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'job-skill'],
        'show_in_rest'      => true,
    ]);
}
add_action('init', 'faminga_theme_v1_register_post_types');

/**
 * Add custom meta boxes for job listings
 */
function faminga_theme_v1_add_meta_boxes() {
    add_meta_box(
        'faminga_job_details',
        __('Job Details', 'faminga-theme-v1'),
        'faminga_theme_v1_job_details_callback',
        'faminga_job',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'faminga_theme_v1_add_meta_boxes');

/**
 * Job details meta box callback
 */
function faminga_theme_v1_job_details_callback($post) {
    wp_nonce_field('faminga_job_details_nonce', 'faminga_job_details_nonce');
    
    $job_status = get_post_meta($post->ID, '_job_status', true) ?: 'open';
    $job_type = get_post_meta($post->ID, '_job_type', true) ?: 'full_time';
    $application_url = get_post_meta($post->ID, '_application_url', true);
    $application_deadline = get_post_meta($post->ID, '_application_deadline', true);
    
    ?>
    <div class="faminga-meta-box-row">
        <div class="faminga-meta-box-label">
            <label for="job_status"><?php _e('Job Status', 'faminga-theme-v1'); ?></label>
        </div>
        <div class="faminga-meta-box-field">
            <select name="job_status" id="job_status">
                <option value="open" <?php selected($job_status, 'open'); ?>><?php _e('Open', 'faminga-theme-v1'); ?></option>
                <option value="closed" <?php selected($job_status, 'closed'); ?>><?php _e('Closed', 'faminga-theme-v1'); ?></option>
                <option value="coming_soon" <?php selected($job_status, 'coming_soon'); ?>><?php _e('Coming Soon', 'faminga-theme-v1'); ?></option>
            </select>
        </div>
    </div>

    <div class="faminga-meta-box-row">
        <div class="faminga-meta-box-label">
            <label for="job_type"><?php _e('Job Type', 'faminga-theme-v1'); ?></label>
        </div>
        <div class="faminga-meta-box-field">
            <select name="job_type" id="job_type">
                <option value="full_time" <?php selected($job_type, 'full_time'); ?>><?php _e('Full Time', 'faminga-theme-v1'); ?></option>
                <option value="part_time" <?php selected($job_type, 'part_time'); ?>><?php _e('Part Time', 'faminga-theme-v1'); ?></option>
                <option value="contract" <?php selected($job_type, 'contract'); ?>><?php _e('Contract', 'faminga-theme-v1'); ?></option>
                <option value="internship" <?php selected($job_type, 'internship'); ?>><?php _e('Internship', 'faminga-theme-v1'); ?></option>
                <option value="volunteer" <?php selected($job_type, 'volunteer'); ?>><?php _e('Volunteer', 'faminga-theme-v1'); ?></option>
            </select>
        </div>
    </div>

    <div class="faminga-meta-box-row">
        <div class="faminga-meta-box-label">
            <label for="application_url"><?php _e('Application URL', 'faminga-theme-v1'); ?></label>
        </div>
        <div class="faminga-meta-box-field">
            <input type="url" name="application_url" id="application_url" value="<?php echo esc_attr($application_url); ?>" class="widefat">
            <p class="description"><?php _e('Enter the URL where candidates should apply', 'faminga-theme-v1'); ?></p>
        </div>
    </div>

    <div class="faminga-meta-box-row">
        <div class="faminga-meta-box-label">
            <label for="application_deadline"><?php _e('Application Deadline', 'faminga-theme-v1'); ?></label>
        </div>
        <div class="faminga-meta-box-field">
            <input type="date" name="application_deadline" id="application_deadline" value="<?php echo esc_attr($application_deadline); ?>" class="widefat">
        </div>
    </div>
    
    <style>
        .faminga-meta-box-row {
            margin-bottom: 15px;
        }
        .faminga-meta-box-label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .faminga-meta-box-field input[type="text"],
        .faminga-meta-box-field input[type="url"],
        .faminga-meta-box-field input[type="date"],
        .faminga-meta-box-field select {
            width: 100%;
        }
    </style>
    <?php
}

/**
 * Save job details meta box data
 */
function faminga_theme_v1_save_job_details($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['faminga_job_details_nonce']) || !wp_verify_nonce($_POST['faminga_job_details_nonce'], 'faminga_job_details_nonce')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Update the meta fields
    if (isset($_POST['job_status'])) {
        update_post_meta($post_id, '_job_status', sanitize_text_field($_POST['job_status']));
    }

    if (isset($_POST['job_type'])) {
        update_post_meta($post_id, '_job_type', sanitize_text_field($_POST['job_type']));
    }

    if (isset($_POST['application_url'])) {
        update_post_meta($post_id, '_application_url', esc_url_raw($_POST['application_url']));
    }

    if (isset($_POST['application_deadline'])) {
        update_post_meta($post_id, '_application_deadline', sanitize_text_field($_POST['application_deadline']));
    }
}
add_action('save_post_faminga_job', 'faminga_theme_v1_save_job_details');

/**
 * Create default opportunity types when theme is activated
 */
function faminga_theme_v1_create_default_opportunity_types() {
    $default_types = [
        'open-position' => 'Open Position',
        'internship' => 'Internship',
        'volunteer' => 'Volunteer'
    ];
    
    foreach ($default_types as $slug => $name) {
        if (!term_exists($slug, 'opportunity_type')) {
            wp_insert_term($name, 'opportunity_type', ['slug' => $slug]);
        }
    }
}
add_action('after_switch_theme', 'faminga_theme_v1_create_default_opportunity_types');

/**
 * Create default job locations when theme is activated
 */
function faminga_theme_v1_create_default_job_locations() {
    $default_locations = [
        'kigali' => 'Kigali, Rwanda',
        'remote' => 'Remote',
        'hybrid' => 'Hybrid'
    ];
    
    foreach ($default_locations as $slug => $name) {
        if (!term_exists($slug, 'job_location')) {
            wp_insert_term($name, 'job_location', ['slug' => $slug]);
        }
    }
}
add_action('after_switch_theme', 'faminga_theme_v1_create_default_job_locations');

/**
 * Create default job skills when theme is activated
 */
function faminga_theme_v1_create_default_job_skills() {
    $default_skills = [
        'react' => 'React',
        'javascript' => 'JavaScript',
        'python' => 'Python',
        'machine-learning' => 'Machine Learning',
        'iot' => 'IoT',
        'agronomy' => 'Agronomy',
        'data-analysis' => 'Data Analysis',
        'ui-design' => 'UI Design'
    ];
    
    foreach ($default_skills as $slug => $name) {
        if (!term_exists($slug, 'job_skill')) {
            wp_insert_term($name, 'job_skill', ['slug' => $slug]);
        }
    }
}
add_action('after_switch_theme', 'faminga_theme_v1_create_default_job_skills');

/**
 * Add custom columns to the job listings admin screen
 */
function faminga_theme_v1_job_columns($columns) {
    $new_columns = [];
    
    foreach ($columns as $key => $value) {
        if ($key === 'title') {
            $new_columns[$key] = $value;
            $new_columns['job_status'] = __('Status', 'faminga-theme-v1');
            $new_columns['job_type'] = __('Type', 'faminga-theme-v1');
            $new_columns['job_location'] = __('Location', 'faminga-theme-v1');
            $new_columns['application_deadline'] = __('Deadline', 'faminga-theme-v1');
        } else {
            $new_columns[$key] = $value;
        }
    }
    
    return $new_columns;
}
add_filter('manage_faminga_job_posts_columns', 'faminga_theme_v1_job_columns');

/**
 * Populate custom columns in the job listings admin screen
 */
function faminga_theme_v1_job_column_content($column, $post_id) {
    switch ($column) {
        case 'job_status':
            $status = get_post_meta($post_id, '_job_status', true) ?: 'open';
            $status_labels = [
                'open' => __('Open', 'faminga-theme-v1'),
                'closed' => __('Closed', 'faminga-theme-v1'),
                'coming_soon' => __('Coming Soon', 'faminga-theme-v1')
            ];
            $status_colors = [
                'open' => 'green',
                'closed' => 'gray',
                'coming_soon' => 'blue'
            ];
            echo '<span style="color: ' . esc_attr($status_colors[$status]) . '; font-weight: bold;">' . esc_html($status_labels[$status]) . '</span>';
            break;
            
        case 'job_type':
            $type = get_post_meta($post_id, '_job_type', true) ?: 'full_time';
            $type_labels = [
                'full_time' => __('Full Time', 'faminga-theme-v1'),
                'part_time' => __('Part Time', 'faminga-theme-v1'),
                'contract' => __('Contract', 'faminga-theme-v1'),
                'internship' => __('Internship', 'faminga-theme-v1'),
                'volunteer' => __('Volunteer', 'faminga-theme-v1')
            ];
            echo esc_html($type_labels[$type]);
            break;
            
        case 'job_location':
            $location_terms = get_the_terms($post_id, 'job_location');
            if (!empty($location_terms) && !is_wp_error($location_terms)) {
                $locations = [];
                foreach ($location_terms as $term) {
                    $locations[] = $term->name;
                }
                echo esc_html(implode(', ', $locations));
            } else {
                echo '—';
            }
            break;
            
        case 'application_deadline':
            $deadline = get_post_meta($post_id, '_application_deadline', true);
            if (!empty($deadline)) {
                $deadline_date = new DateTime($deadline);
                echo esc_html($deadline_date->format('Y-m-d'));
                
                // Check if deadline is approaching (within 7 days)
                $now = new DateTime();
                $diff = $now->diff($deadline_date);
                $days_remaining = $diff->days;
                
                if ($now < $deadline_date && $days_remaining <= 7) {
                    echo ' <span style="color: orange; font-weight: bold;">(' . esc_html(sprintf(_n('%d day left', '%d days left', $days_remaining, 'faminga-theme-v1'), $days_remaining)) . ')</span>';
                } elseif ($now > $deadline_date) {
                    echo ' <span style="color: red; font-weight: bold;">(' . esc_html__('Expired', 'faminga-theme-v1') . ')</span>';
                }
            } else {
                echo '—';
            }
            break;
    }
}
add_action('manage_faminga_job_posts_custom_column', 'faminga_theme_v1_job_column_content', 10, 2);

/**
 * Make custom columns sortable in the admin
 */
function faminga_theme_v1_job_sortable_columns($columns) {
    $columns['job_status'] = 'job_status';
    $columns['job_type'] = 'job_type';
    $columns['application_deadline'] = 'application_deadline';
    return $columns;
}
add_filter('manage_edit-faminga_job_sortable_columns', 'faminga_theme_v1_job_sortable_columns');

/**
 * Add filter dropdowns to the job listings admin screen
 */
function faminga_theme_v1_job_filters() {
    global $typenow;
    
    if ($typenow !== 'faminga_job') {
        return;
    }
    
    // Job Status Filter
    $current_status = isset($_GET['job_status']) ? sanitize_text_field($_GET['job_status']) : '';
    $statuses = [
        'open' => __('Open', 'faminga-theme-v1'),
        'closed' => __('Closed', 'faminga-theme-v1'),
        'coming_soon' => __('Coming Soon', 'faminga-theme-v1')
    ];
    
    echo '<select name="job_status">';
    echo '<option value="">' . esc_html__('All Statuses', 'faminga-theme-v1') . '</option>';
    
    foreach ($statuses as $value => $label) {
        echo '<option value="' . esc_attr($value) . '" ' . selected($current_status, $value, false) . '>' . esc_html($label) . '</option>';
    }
    
    echo '</select>';
    
    // Job Type Filter
    $current_type = isset($_GET['job_type']) ? sanitize_text_field($_GET['job_type']) : '';
    $types = [
        'full_time' => __('Full Time', 'faminga-theme-v1'),
        'part_time' => __('Part Time', 'faminga-theme-v1'),
        'contract' => __('Contract', 'faminga-theme-v1'),
        'internship' => __('Internship', 'faminga-theme-v1'),
        'volunteer' => __('Volunteer', 'faminga-theme-v1')
    ];
    
    echo '<select name="job_type">';
    echo '<option value="">' . esc_html__('All Types', 'faminga-theme-v1') . '</option>';
    
    foreach ($types as $value => $label) {
        echo '<option value="' . esc_attr($value) . '" ' . selected($current_type, $value, false) . '>' . esc_html($label) . '</option>';
    }
    
    echo '</select>';
}
add_action('restrict_manage_posts', 'faminga_theme_v1_job_filters');

/**
 * Modify the main query for custom admin filters
 */
function faminga_theme_v1_job_filter_query($query) {
    global $typenow, $pagenow;
    
    if ($pagenow === 'edit.php' && $typenow === 'faminga_job') {
        $meta_query = [];
        
        // Job Status Filter
        if (isset($_GET['job_status']) && $_GET['job_status'] !== '') {
            $meta_query[] = [
                'key' => '_job_status',
                'value' => sanitize_text_field($_GET['job_status']),
                'compare' => '='
            ];
        }
        
        // Job Type Filter
        if (isset($_GET['job_type']) && $_GET['job_type'] !== '') {
            $meta_query[] = [
                'key' => '_job_type',
                'value' => sanitize_text_field($_GET['job_type']),
                'compare' => '='
            ];
        }
        
        if (!empty($meta_query)) {
            $query->set('meta_query', $meta_query);
        }
    }
}
add_action('pre_get_posts', 'faminga_theme_v1_job_filter_query'); 