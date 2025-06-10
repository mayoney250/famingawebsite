<?php
/**
 * Template Name: Demo Request Page
 *
 * @package Faminga_Theme_V1
 */

// Handle form submission
$form_submitted = false;
$form_success = false;

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_demo_request']) ) {
    $form_submitted = true;
    global $wpdb;
    $table_name = $wpdb->prefix . 'demo_requests';

    // Sanitize and prepare data
    $org_name         = sanitize_text_field($_POST['orgName']);
    $org_type         = sanitize_text_field($_POST['orgType']);
    $employee_count   = sanitize_text_field($_POST['employeeCount']);
    $contact_name     = sanitize_text_field($_POST['contactName']);
    $contact_email    = sanitize_email($_POST['contactEmail']);
    $contact_phone    = sanitize_text_field($_POST['contactPhone']);
    $country          = sanitize_text_field($_POST['country']);
    $primary_interest = sanitize_text_field($_POST['primaryInterest']);
    $usage_scale      = isset($_POST['usageScale']) ? sanitize_text_field($_POST['usageScale']) : '';
    $message          = sanitize_textarea_field($_POST['message']);
    $newsletter       = isset($_POST['newsletter']) ? 1 : 0;

    // Basic validation
    if ( !empty($org_name) && !empty($org_type) && !empty($contact_name) && is_email($contact_email) && !empty($country) && !empty($primary_interest) && !empty($contact_phone) && !empty($message) ) {
        $result = $wpdb->insert(
            $table_name,
            [
                'created_at'       => current_time('mysql'),
                'org_name'         => $org_name,
                'org_type'         => $org_type,
                'employee_count'   => $employee_count,
                'contact_name'     => $contact_name,
                'contact_email'    => $contact_email,
                'contact_phone'    => $contact_phone,
                'country'          => $country,
                'primary_interest' => $primary_interest,
                'usage_scale'      => $usage_scale,
                'message'          => $message,
                'newsletter'       => $newsletter,
            ]
        );
        if ($result) {
            $form_success = true;
        }
    }
}


get_header(); ?>

<main class="py-8 px-6">
    <div class="container mx-auto max-w-4xl">
        <?php if ( $form_submitted && $form_success ) : ?>
            <div class="text-center py-16">
                <div class="w-24 h-24 mx-auto bg-primary bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                    <i class="ri-check-line text-primary text-5xl"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4"><?php _e( 'Request Submitted Successfully!', 'faminga-theme-v1' ); ?></h2>
                <p class="text-gray-300 mb-8 max-w-md mx-auto"><?php _e( 'Thank you for your interest in Faminga. Our team will contact you within 24 hours to discuss your needs.', 'faminga-theme-v1' ); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-8 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                    <?php _e( 'Return to Homepage', 'faminga-theme-v1' ); ?>
                </a>
            </div>
        <?php else : ?>
            <!-- Form Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php _e( 'Request Early Access to Faminga', 'faminga-theme-v1' ); ?></h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto"><?php _e( 'Get exclusive access to our advanced farm management features and be among the first to transform your agricultural operations', 'faminga-theme-v1' ); ?></p>
            </div>
            <!-- Progress Indicator -->
            <div class="flex justify-between items-center max-w-md mx-auto mb-12 relative">
                <div class="absolute left-0 right-0 top-1/2 h-1 bg-gray-700 -z-10"></div>
                <div class="flex flex-col items-center"><div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center mb-2"><div class="w-5 h-5 flex items-center justify-center"><i class="ri-user-line text-white"></i></div></div><span class="text-xs text-white"><?php _e( 'Organization', 'faminga-theme-v1' ); ?></span></div>
                <div class="flex flex-col items-center"><div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center mb-2"><div class="w-5 h-5 flex items-center justify-center"><i class="ri-contacts-line text-white"></i></div></div><span class="text-xs text-gray-400"><?php _e( 'Contact you', 'faminga-theme-v1' ); ?></span></div>
                <div class="flex flex-col items-center"><div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center mb-2"><div class="w-5 h-5 flex items-center justify-center"><i class="ri-check-line text-white"></i></div></div><span class="text-xs text-gray-400"><?php _e( 'Confirmation', 'faminga-theme-v1' ); ?></span></div>
            </div>
            <!-- Form Container -->
            <div class="bg-[#0a2c0a] rounded-lg p-8 shadow-lg border border-[#526700] border-opacity-30">
                <form id="demoRequestForm" method="POST">
                    <!-- Organization Information Section -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-6 flex items-center"><div class="w-6 h-6 flex items-center justify-center mr-2 bg-primary bg-opacity-20 rounded-full"><i class="ri-building-line text-primary text-sm"></i></div> <?php _e( 'Organization Information', 'faminga-theme-v1' ); ?></h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2"><label for="orgName" class="block text-sm font-medium text-gray-300 mb-2"><?php _e( 'Organization/Individual Name', 'faminga-theme-v1' ); ?> <span class="text-red-500">*</span></label><input type="text" id="orgName" name="orgName" required class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php echo esc_attr__( 'Enter your organization, cooperative, company or individual name', 'faminga-theme-v1' ); ?>"></div>
                            <div><label for="orgType" class="block text-sm font-medium text-gray-300 mb-2"><?php _e( 'Organization Type', 'faminga-theme-v1' ); ?> <span class="text-red-500">*</span></label><div class="relative"><select id="orgType" name="orgType" required class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8"><option value="" disabled selected><?php esc_html_e( 'Select organization type', 'faminga-theme-v1' ); ?></option><option value="farm"><?php _e( 'Farm', 'faminga-theme-v1' ); ?></option><option value="cooperative"><?php _e( 'Cooperative', 'faminga-theme-v1' ); ?></option><option value="company"><?php _e( 'Company', 'faminga-theme-v1' ); ?></option><option value="ngo"><?php _e( 'NGO', 'faminga-theme-v1' ); ?></option><option value="government"><?php _e( 'Government', 'faminga-theme-v1' ); ?></option><option value="other"><?php _e( 'Other', 'faminga-theme-v1' ); ?></option></select><div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center"><i class="ri-arrow-down-s-line text-gray-400"></i></div></div></div>
                            <div><label for="employeeCount" class="block text-sm font-medium text-gray-300 mb-2"><?php _e( 'Number of Employees/Members', 'faminga-theme-v1' ); ?></label><div class="relative"><select id="employeeCount" name="employeeCount" class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8"><option value="" disabled selected><?php esc_html_e( 'Select size', 'faminga-theme-v1' ); ?></option><option value="1-10">1-10</option><option value="11-50">11-50</option><option value="51-200">51-200</option><option value="201-500">201-500</option><option value="501+">501+</option></select><div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center"><i class="ri-arrow-down-s-line text-gray-400"></i></div></div></div>
                        </div>
                    </div>
                    <!-- Contact Information Section -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-6 flex items-center"><div class="w-6 h-6 flex items-center justify-center mr-2 bg-primary bg-opacity-20 rounded-full"><i class="ri-contacts-line text-primary text-sm"></i></div> <?php _e('Contact Information', 'faminga-theme-v1'); ?></h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div><label for="contactName" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Contact Person\'s Name', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><input type="text" id="contactName" name="contactName" required class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php echo esc_attr__('Enter full name', 'faminga-theme-v1'); ?>"></div>
                            <div><label for="contactEmail" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Business Email', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><input type="email" id="contactEmail" name="contactEmail" required class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php echo esc_attr__('Enter your business email', 'faminga-theme-v1'); ?>"></div>
                            <div><label for="contactPhone" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Phone Number', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><input type="tel" id="contactPhone" name="contactPhone" required class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php echo esc_attr__('Enter your phone number', 'faminga-theme-v1'); ?>"></div>
                            <div><label for="country" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Country/Region', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><div class="relative"><select id="country" name="country" required class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8"><option value="" disabled selected><?php esc_html_e('Select your country', 'faminga-theme-v1'); ?></option><option value="rwanda"><?php _e('Rwanda', 'faminga-theme-v1'); ?></option><option value="kenya"><?php _e('Kenya', 'faminga-theme-v1'); ?></option><option value="uganda"><?php _e('Uganda', 'faminga-theme-v1'); ?></option><option value="tanzania"><?php _e('Tanzania', 'faminga-theme-v1'); ?></option><option value="nigeria"><?php _e('Nigeria', 'faminga-theme-v1'); ?></option><option value="ghana"><?php _e('Ghana', 'faminga-theme-v1'); ?></option><option value="southafrica"><?php _e('South Africa', 'faminga-theme-v1'); ?></option><option value="other"><?php _e('Other', 'faminga-theme-v1'); ?></option></select><div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center"><i class="ri-arrow-down-s-line text-gray-400"></i></div></div></div>
                        </div>
                    </div>
                    <!-- Interest Details Section -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-6 flex items-center"><div class="w-6 h-6 flex items-center justify-center mr-2 bg-primary bg-opacity-20 rounded-full"><i class="ri-focus-line text-primary text-sm"></i></div> <?php _e('Interest Details', 'faminga-theme-v1'); ?></h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div><label for="primaryInterest" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Primary Interest', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><div class="relative"><select id="primaryInterest" name="primaryInterest" required class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8"><option value="" disabled selected><?php esc_html_e('Select your primary interest', 'faminga-theme-v1'); ?></option><option value="farm-management"><?php _e('Farm Management', 'faminga-theme-v1'); ?></option><option value="iot-monitoring"><?php _e('IoT Monitoring', 'faminga-theme-v1'); ?></option><option value="disease-detection"><?php _e('Plant Disease Detection', 'faminga-theme-v1'); ?></option><option value="weather-services"><?php _e('Weather & Geospatial', 'faminga-theme-v1'); ?></option><option value="marketplace"><?php _e('Virtual Marketplace', 'faminga-theme-v1'); ?></option><option value="ai-advice"><?php _e('AI Agricultural Advice', 'faminga-theme-v1'); ?></option></select><div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center"><i class="ri-arrow-down-s-line text-gray-400"></i></div></div></div>
                            <div><label for="usageScale" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Expected Usage Scale', 'faminga-theme-v1'); ?></label><div class="relative"><select id="usageScale" name="usageScale" class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8"><option value="" disabled selected><?php esc_html_e('Select expected scale', 'faminga-theme-v1'); ?></option><option value="small"><?php _e('Small (1-5 hectares)', 'faminga-theme-v1'); ?></option><option value="medium"><?php _e('Medium (6-50 hectares)', 'faminga-theme-v1'); ?></option><option value="large"><?php _e('Large (51-200 hectares)', 'faminga-theme-v1'); ?></option><option value="enterprise"><?php _e('Enterprise (200+ hectares)', 'faminga-theme-v1'); ?></option></select><div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center"><i class="ri-arrow-down-s-line text-gray-400"></i></div></div></div>
                        </div>
                        <div><label for="message" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Specific Requirements or Questions', 'faminga-theme-v1'); ?> <span class="text-red-500">*</span></label><textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm resize-none" placeholder="<?php echo esc_attr__('Tell us about your specific needs or questions...', 'faminga-theme-v1'); ?>"></textarea></div>
                    </div>
                    <!-- Terms and Conditions -->
                    <div class="mb-8">
                        <div class="flex items-start mb-6"><div class="flex items-center h-5 mt-1"><input id="newsletter" name="newsletter" type="checkbox" class="appearance-none w-4 h-4 border border-gray-500 rounded bg-[#001a00] checked:bg-primary checked:border-primary focus:outline-none transition duration-200"><div class="absolute w-4 h-4 flex items-center justify-center text-white pointer-events-none opacity-0 check-mark"><i class="ri-check-line text-xs"></i></div></div><label for="newsletter" class="ml-3 text-sm text-gray-300"><?php _e('I\'d like to receive updates about new features, agricultural tips, and special offers', 'faminga-theme-v1'); ?></label></div>
                        <div class="flex items-start"><div class="flex items-center h-5 mt-1"><input id="terms" name="terms" type="checkbox" required class="appearance-none w-4 h-4 border border-gray-500 rounded bg-[#001a00] checked:bg-primary checked:border-primary focus:outline-none transition duration-200"><div class="absolute w-4 h-4 flex items-center justify-center text-white pointer-events-none opacity-0 check-mark"><i class="ri-check-line text-xs"></i></div></div><label for="terms" class="ml-3 text-sm text-gray-300"><?php _e('I agree to Faminga\'s', 'faminga-theme-v1'); ?> <a href="#" class="text-primary hover:underline"><?php _e('Terms of Service', 'faminga-theme-v1'); ?></a> <?php _e('and', 'faminga-theme-v1'); ?> <a href="#" class="text-primary hover:underline"><?php _e('Privacy Policy', 'faminga-theme-v1'); ?></a> <span class="text-red-500">*</span></label></div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="submit_demo_request" class="px-8 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button whitespace-nowrap"><?php _e('Request Early Access', 'faminga-theme-v1'); ?></button>
                        <p class="text-sm text-gray-400 mt-4"><?php _e('Our team will contact you within 24 hours', 'faminga-theme-v1'); ?></p>
                    </div>
                </form>
            </div>
            <!-- Benefits Section -->
            <div class="mt-16"><h2 class="text-2xl font-bold mb-8 text-center"><?php _e('Benefits of Early Access', 'faminga-theme-v1'); ?></h2><div class="grid grid-cols-1 md:grid-cols-4 gap-6"><div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover-card"><div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4 hover-icon"><i class="ri-customer-service-2-line text-primary text-xl"></i></div><h3 class="text-lg font-semibold mb-2"><?php _e('Priority Support', 'faminga-theme-v1'); ?></h3><p class="text-gray-300 text-sm"><?php _e('Get dedicated onboarding assistance and personalized support from our expert team', 'faminga-theme-v1'); ?></p></div><div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30"><div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4"><i class="ri-user-star-line text-primary text-xl"></i></div><h3 class="text-lg font-semibold mb-2"><?php _e('Dedicated Manager', 'faminga-theme-v1'); ?></h3><p class="text-gray-300 text_sm"><?php _e('Work with a dedicated account manager who understands your specific agricultural needs', 'faminga-theme-v1'); ?></p></div><div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30"><div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4"><i class="ri-tools-line text-primary text-xl"></i></div><h3 class="text-lg font-semibold mb-2"><?php _e('Custom Features', 'faminga-theme-v1'); ?></h3><p class="text-gray-300 text-sm"><?php _e('Influence our product roadmap with your feature requests and customization needs', 'faminga-theme-v1'); ?></p></div><div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30"><div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4"><i class="ri-price-tag-3-line text-primary text-xl"></i></div><h3 class="text-lg font-semibold mb-2"><?php _e('Special Pricing', 'faminga-theme-v1'); ?></h3><p class="text-gray-300 text-sm"><?php _e('Access exclusive early-bird pricing and special discounts not available to the general public', 'faminga-theme-v1'); ?></p></div></div></div>
            <!-- Trust Indicators & Testimonials ... -->
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
<?php
// Enqueue demo form script only on this page
wp_enqueue_script('faminga-demo-form', get_template_directory_uri() . '/assets/js/demo-form.js', [], '1.0.0', true);
?> 