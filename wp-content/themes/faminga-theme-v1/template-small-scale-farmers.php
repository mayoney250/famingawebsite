<?php
/**
 * Template Name: Small-Scale Farmers
 *
 * @package Faminga_Theme_V1
 */

get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main class="py-8 lg:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-12 lg:mb-16">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6"><?php echo esc_html($t['small_scale_farmers']); ?></h1>
            <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto mb-8"><?php echo esc_html($t['affordable_digital_solutions']); ?></p>
            <p class="text-sm lg:text-base text-gray-400 max-w-4xl mx-auto"><?php echo esc_html($t['empowering_small_scale']); ?></p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-12 lg:mb-16">
            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-smartphone-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['mobile_first_design']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['mobile_first_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-money-dollar-circle-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['affordable_pricing']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['affordable_pricing_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-translate-2 text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['local_language_support']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['local_language_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-bug-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['disease_detection_feature']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['disease_detection_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-cloudy-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['weather_forecasts']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['weather_forecasts_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-store-2-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['market_access']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['market_access_desc']); ?></p>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['simple_affordable_pricing']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['start_free_upgrade']); ?></p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                <!-- Free Plan -->
                <div class="border border-gray-600 rounded-xl p-6 lg:p-8">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold mb-2"><?php echo esc_html($t['free_plan']); ?></h3>
                        <div class="text-3xl font-bold mb-2">$0</div>
                        <p class="text-gray-400 text-sm"><?php echo esc_html($t['forever_free']); ?></p>
                    </div>
                    <ul class="space-y-3 mb-6 text-sm">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Basic weather forecasts', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Disease identification (5/month)', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Basic farm records', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Community forum access', 'faminga-theme-v1' ); ?></li>
                    </ul>
                    <button class="w-full bg-gray-600 text-white py-3 rounded-lg font-medium hover:bg-gray-500 transition-colors"><?php echo esc_html($t['get_started']); ?></button>
                </div>

                <!-- Standard Plan -->
                <div class="border-2 border-[#F26B3A] rounded-xl p-6 lg:p-8 relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-[#F26B3A] text-white px-4 py-1 rounded-full text-sm font-medium"><?php echo esc_html($t['most_popular']); ?></span>
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold mb-2"><?php echo esc_html($t['standard_plan']); ?></h3>
                        <div class="text-3xl font-bold mb-2">$5</div>
                        <p class="text-gray-400 text-sm"><?php echo esc_html($t['per_month']); ?></p>
                    </div>
                    <ul class="space-y-3 mb-6 text-sm">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Advanced weather & alerts', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Unlimited disease detection', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Complete farm management', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Basic IoT sensor support', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Market price alerts', 'faminga-theme-v1' ); ?></li>
                    </ul>
                    <button class="w-full bg-[#F26B3A] text-white py-3 rounded-lg font-medium hover:bg-[#e55a2b] transition-colors"><?php echo esc_html($t['start_free_trial']); ?></button>
                </div>

                <!-- Pro Plan -->
                <div class="border border-gray-600 rounded-xl p-6 lg:p-8">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold mb-2"><?php echo esc_html($t['pro_plan']); ?></h3>
                        <div class="text-3xl font-bold mb-2">$15</div>
                        <p class="text-gray-400 text-sm"><?php echo esc_html($t['per_month']); ?></p>
                    </div>
                    <ul class="space-y-3 mb-6 text-sm">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Everything in Standard', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Advanced analytics', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Multiple farm locations', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Priority support', 'faminga-theme-v1' ); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php _e( 'Export data & reports', 'faminga-theme-v1' ); ?></li>
                    </ul>
                    <button class="w-full bg-gray-600 text-white py-3 rounded-lg font-medium hover:bg-gray-500 transition-colors"><?php echo esc_html($t['start_free_trial']); ?></button>
                </div>
            </div>
        </div>

        <!-- Success Stories -->
        <div class="mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['success_stories']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['real_farmers_results']); ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/farmer-1.jpg" alt="Marie Uwimana" class="w-12 h-12 rounded-full mr-4" onerror="this.style.display='none'">
                        <div>
                            <h4 class="font-bold"><?php _e( 'Marie Uwimana', 'faminga-theme-v1' ); ?></h4>
                            <p class="text-gray-400 text-sm"><?php _e( 'Tomato Farmer, Musanze', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm lg:text-base italic"><?php _e( '"Faminga helped me detect tomato blight early and saved my entire crop. My yield increased by 40% this season."', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/farmer-2.jpg" alt="Jean Baptiste" class="w-12 h-12 rounded-full mr-4" onerror="this.style.display='none'">
                        <div>
                            <h4 class="font-bold"><?php _e( 'Jean Baptiste', 'faminga-theme-v1' ); ?></h4>
                            <p class="text-gray-400 text-sm"><?php _e( 'Maize Farmer, Kayonza', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm lg:text-base italic"><?php _e( '"The weather alerts helped me time my planting perfectly. I now get better prices through the marketplace feature."', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/farmer-3.jpg" alt="Grace Mukamana" class="w-12 h-12 rounded-full mr-4" onerror="this.style.display='none'">
                        <div>
                            <h4 class="font-bold"><?php _e( 'Grace Mukamana', 'faminga-theme-v1' ); ?></h4>
                            <p class="text-gray-400 text-sm"><?php _e( 'Vegetable Farmer, Huye', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm lg:text-base italic"><?php _e( '"The app works perfectly even with my basic phone. The Kinyarwanda support makes it so easy to use."', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center bg-gradient-to-r from-[#F26B3A] to-[#e55a2b] rounded-xl p-8 lg:p-12">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['transform_your_farm']); ?></h2>
            <p class="text-lg mb-6 opacity-90"><?php echo esc_html($t['join_thousands_farmers']); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-[#F26B3A] px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors"><?php echo esc_html($t['start_free_trial']); ?></button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-[#F26B3A] transition-colors"><?php echo esc_html($t['schedule_demo']); ?></button>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 