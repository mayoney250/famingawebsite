<?php
/**
 * Template Name: Job Application Form
 *
 * @package Faminga_Theme_V1
 */

declare(strict_types=1);
get_header();

// Check if we have a job ID
$job_id = isset($_GET['job_id']) ? intval($_GET['job_id']) : 0;

if ($job_id <= 0) {
    wp_redirect(home_url('/career/'));
    exit;
}

// Check if the job exists and is open
$job = get_post($job_id);
if (!$job || $job->post_type !== 'faminga_job') {
    wp_redirect(home_url('/career/'));
    exit;
}

$job_status = get_post_meta($job_id, '_job_status', true);
if ($job_status !== 'open') {
    wp_redirect(get_permalink($job_id));
    exit;
}

// Get job metadata
$job_type = get_post_meta($job_id, '_job_type', true) ?: 'full_time';
$job_type_labels = [
    'full_time' => __('Full Time', 'faminga-theme-v1'),
    'part_time' => __('Part Time', 'faminga-theme-v1'),
    'contract' => __('Contract', 'faminga-theme-v1'),
    'internship' => __('Internship', 'faminga-theme-v1'),
    'volunteer' => __('Volunteer', 'faminga-theme-v1')
];
$job_type_display = isset($job_type_labels[$job_type]) ? $job_type_labels[$job_type] : $job_type;

// Get job location
$location_terms = get_the_terms($job_id, 'job_location');
$location_list = [];
if (!empty($location_terms) && !is_wp_error($location_terms)) {
    foreach ($location_terms as $term) {
        $location_list[] = $term->name;
    }
}
$location_display = implode(', ', $location_list);
?>

<main id="primary" class="site-main bg-[#0A1A0F] text-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        
        <?php if (function_exists('yoast_breadcrumb')): ?>
            <div class="breadcrumbs mb-8 text-gray-400 text-sm">
                <?php yoast_breadcrumb(); ?>
            </div>
        <?php endif; ?>
        
        <div class="bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
            <h1 class="text-3xl font-bold mb-2"><?php _e('Apply for:', 'faminga-theme-v1'); ?> <?php echo esc_html($job->post_title); ?></h1>
            <div class="flex flex-wrap gap-3 text-gray-300 text-sm mb-4">
                <?php if (!empty($job_type_display)): ?>
                    <div>
                        <i class="fas fa-briefcase text-primary mr-1"></i>
                        <?php echo esc_html($job_type_display); ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($location_display)): ?>
                    <div>
                        <i class="fas fa-map-marker-alt text-primary mr-1"></i>
                        <?php echo esc_html($location_display); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <a href="<?php echo esc_url(get_permalink($job_id)); ?>" class="text-primary hover:text-primary-light">
                <i class="fas fa-arrow-left mr-2"></i>
                <?php _e('Back to job details', 'faminga-theme-v1'); ?>
            </a>
        </div>
        
        <div class="application-form bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C]">
            <form id="job-application-form" class="space-y-6" enctype="multipart/form-data">
                <?php wp_nonce_field('submit_job_application', 'job_application_nonce'); ?>
                <input type="hidden" name="job_id" value="<?php echo esc_attr($job_id); ?>">
                
                <div class="form-section mb-8">
                    <h2 class="text-xl font-bold mb-4 border-b border-[#1B2B1C] pb-2">
                        <?php _e('Personal Information', 'faminga-theme-v1'); ?>
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="applicant_name" class="block mb-2 font-medium">
                                <?php _e('Full Name', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="applicant_name" name="applicant_name" required
                                   class="w-full px-4 py-2 rounded-lg bg-[#0A1A0F] border border-[#1B2B1C] focus:border-primary focus:outline-none">
                        </div>
                        
                        <div class="form-group">
                            <label for="applicant_email" class="block mb-2 font-medium">
                                <?php _e('Email Address', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="applicant_email" name="applicant_email" required
                                   class="w-full px-4 py-2 rounded-lg bg-[#0A1A0F] border border-[#1B2B1C] focus:border-primary focus:outline-none">
                        </div>
                        
                        <div class="form-group">
                            <label for="applicant_phone" class="block mb-2 font-medium">
                                <?php _e('Phone Number', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="applicant_phone" name="applicant_phone" required
                                   class="w-full px-4 py-2 rounded-lg bg-[#0A1A0F] border border-[#1B2B1C] focus:border-primary focus:outline-none">
                        </div>
                        
                        <div class="form-group">
                            <label for="applicant_location" class="block mb-2 font-medium">
                                <?php _e('Current Location', 'faminga-theme-v1'); ?>
                            </label>
                            <input type="text" id="applicant_location" name="applicant_location"
                                   placeholder="<?php esc_attr_e('City, Country', 'faminga-theme-v1'); ?>"
                                   class="w-full px-4 py-2 rounded-lg bg-[#0A1A0F] border border-[#1B2B1C] focus:border-primary focus:outline-none">
                        </div>
                    </div>
                </div>
                
                <div class="form-section mb-8">
                    <h2 class="text-xl font-bold mb-4 border-b border-[#1B2B1C] pb-2">
                        <?php _e('Application Details', 'faminga-theme-v1'); ?>
                    </h2>
                    
                    <div class="form-group mb-6">
                        <label for="cover_letter" class="block mb-2 font-medium">
                            <?php _e('Cover Letter / Introduction', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span>
                        </label>
                        <textarea id="cover_letter" name="cover_letter" rows="6" required
                                  placeholder="<?php esc_attr_e('Tell us why you\'re interested in this position and what makes you a good fit...', 'faminga-theme-v1'); ?>"
                                  class="w-full px-4 py-2 rounded-lg bg-[#0A1A0F] border border-[#1B2B1C] focus:border-primary focus:outline-none"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="resume" class="block mb-2 font-medium">
                            <?php _e('Resume / CV', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span>
                        </label>
                        <div class="flex items-center">
                            <label class="w-full flex items-center px-4 py-2 rounded-lg bg-[#0A1A0F] border border-dashed border-[#1B2B1C] cursor-pointer hover:border-primary transition">
                                <i class="fas fa-upload mr-2 text-primary"></i>
                                <span id="file-name"><?php _e('Upload your resume (PDF, DOC, DOCX)', 'faminga-theme-v1'); ?></span>
                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required class="hidden">
                            </label>
                        </div>
                        <p class="text-sm text-gray-400 mt-2">
                            <?php _e('Maximum file size: 5MB', 'faminga-theme-v1'); ?>
                        </p>
                    </div>
                </div>
                
                <div class="form-actions">
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="privacy_policy" name="privacy_policy" required class="mr-2">
                        <label for="privacy_policy">
                            <?php _e('I agree to the', 'faminga-theme-v1'); ?> 
                            <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="text-primary hover:text-primary-light" target="_blank">
                                <?php _e('privacy policy', 'faminga-theme-v1'); ?>
                            </a>
                        </label>
                    </div>
                    
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-lg transition w-full md:w-auto">
                        <?php _e('Submit Application', 'faminga-theme-v1'); ?>
                    </button>
                    
                    <div id="form-messages" class="mt-4"></div>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
jQuery(document).ready(function($) {
    // Show selected file name
    $('#resume').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        if (fileName) {
            $('#file-name').text(fileName);
        } else {
            $('#file-name').text('<?php _e('Upload your resume (PDF, DOC, DOCX)', 'faminga-theme-v1'); ?>');
        }
    });
    
    // Form submission
    $('#job-application-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        formData.append('action', 'submit_job_application');
        
        $('#form-messages').html('<div class="bg-blue-700 text-white p-4 rounded-lg"><?php _e('Submitting your application...', 'faminga-theme-v1'); ?></div>');
        
        $.ajax({
            url: '<?php echo esc_url(rest_url('faminga/v1/job-application')); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    $('#form-messages').html('<div class="bg-green-700 text-white p-4 rounded-lg">' + response.message + '</div>');
                    $('#job-application-form').hide();
                    $('html, body').animate({
                        scrollTop: $('#form-messages').offset().top - 100
                    }, 500);
                } else {
                    $('#form-messages').html('<div class="bg-red-700 text-white p-4 rounded-lg">' + response.message + '</div>');
                }
            },
            error: function(xhr) {
                var errorMessage = xhr.responseJSON && xhr.responseJSON.message 
                    ? xhr.responseJSON.message 
                    : '<?php _e('An error occurred while submitting your application. Please try again.', 'faminga-theme-v1'); ?>';
                
                $('#form-messages').html('<div class="bg-red-700 text-white p-4 rounded-lg">' + errorMessage + '</div>');
            }
        });
    });
});
</script>

<?php get_footer(); ?> 