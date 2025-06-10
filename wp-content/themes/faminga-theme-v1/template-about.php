<?php
/**
 * Template Name: About Us
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
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6"><?php echo esc_html($t['about_us']); ?></h1>
            <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto mb-8"><?php echo esc_html($t['transforming_african_agriculture']); ?></p>
            <p class="text-sm lg:text-base text-gray-400 max-w-4xl mx-auto"><?php echo esc_html($t['about_mission_desc']); ?></p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-12 lg:mb-16">
            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                    <i class="ri-rocket-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo esc_html($t['our_mission']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base leading-relaxed"><?php echo esc_html($t['mission_statement']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-6">
                    <i class="ri-eye-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo esc_html($t['our_vision']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base leading-relaxed"><?php echo esc_html($t['vision_statement']); ?></p>
            </div>
        </div>

        <!-- Our Story -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['our_story']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['story_subtitle']); ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-[#F26B3A] font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2"><?php echo esc_html($t['founded_rwanda_2019']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['founded_desc']); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-[#F26B3A] font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2"><?php echo esc_html($t['first_1000_farmers']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['first_farmers_desc']); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-[#F26B3A] font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2"><?php echo esc_html($t['regional_expansion']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['expansion_desc']); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-[#F26B3A] font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2"><?php echo esc_html($t['ai_iot_integration']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['ai_integration_desc']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#0a1a0a] rounded-xl p-6 border border-[#1B3B1C] border-opacity-30">
                    <h4 class="font-bold mb-4 text-center"><?php echo esc_html($t['impact_to_date']); ?></h4>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-2xl font-bold text-[#F26B3A]">50K+</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['farmers_served']); ?></div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-[#F26B3A]">30%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['avg_yield_increase']); ?></div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-[#F26B3A]">4</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['countries']); ?></div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-[#F26B3A]">85%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['customer_satisfaction']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leadership Team -->
        <div class="mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php _e( 'Leadership Team', 'faminga-theme-v1' ); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php _e( 'Experienced leaders driving agricultural innovation', 'faminga-theme-v1' ); ?></p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 border border-[#1B3B1C] border-opacity-30 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceo-avatar.jpg" alt="CEO" class="w-20 h-20 rounded-full mx-auto mb-4" onerror="this.style.display='none'">
                    <h4 class="font-bold mb-1"><?php _e( 'Jean-Claude Habimana', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-[#F26B3A] text-sm mb-3"><?php _e( 'CEO & Co-Founder', 'faminga-theme-v1' ); ?></p>
                    <p class="text-gray-300 text-xs"><?php _e( '15+ years in agricultural technology and rural development. Former FAO agricultural specialist.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 border border-[#1B3B1C] border-opacity-30 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cto-avatar.jpg" alt="CTO" class="w-20 h-20 rounded-full mx-auto mb-4" onerror="this.style.display='none'">
                    <h4 class="font-bold mb-1"><?php _e( 'Dr. Sarah Mukamana', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-[#F26B3A] text-sm mb-3"><?php _e( 'CTO & Co-Founder', 'faminga-theme-v1' ); ?></p>
                    <p class="text-gray-300 text-xs"><?php _e( 'PhD in Computer Science, AI/ML expert. Former Lead Engineer at top African tech companies.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 border border-[#1B3B1C] border-opacity-30 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cao-avatar.jpg" alt="CAO" class="w-20 h-20 rounded-full mx-auto mb-4" onerror="this.style.display='none'">
                    <h4 class="font-bold mb-1"><?php _e( 'Emmanuel Niyonshuti', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-[#F26B3A] text-sm mb-3"><?php _e( 'Chief Agricultural Officer', 'faminga-theme-v1' ); ?></p>
                    <p class="text-gray-300 text-xs"><?php _e( 'Agronomist with 20+ years field experience. Expert in sustainable farming practices across East Africa.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php _e( 'Our Values', 'faminga-theme-v1' ); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php _e( 'The principles that guide everything we do', 'faminga-theme-v1' ); ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="ri-heart-line text-2xl text-[#F26B3A]"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?php _e( 'Farmer-First', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-gray-300 text-sm"><?php _e( 'Every decision is made with farmers\' needs and success at the center.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="ri-lightbulb-line text-2xl text-[#F26B3A]"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?php _e( 'Innovation', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-gray-300 text-sm"><?php _e( 'Constantly pushing boundaries to create better agricultural solutions.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="ri-shield-check-line text-2xl text-[#F26B3A]"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?php _e( 'Reliability', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-gray-300 text-sm"><?php _e( 'Building trust through consistent, dependable technology and support.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="ri-leaf-line text-2xl text-[#F26B3A]"></i>
                    </div>
                    <h4 class="font-bold mb-2"><?php _e( 'Sustainability', 'faminga-theme-v1' ); ?></h4>
                    <p class="text-gray-300 text-sm"><?php _e( 'Promoting practices that protect our environment for future generations.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center bg-gradient-to-r from-[#F26B3A] to-[#e55a2b] rounded-xl p-8 lg:p-12">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['join_our_mission']); ?></h2>
            <p class="text-lg mb-6 opacity-90"><?php echo esc_html($t['join_mission_desc']); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-[#F26B3A] px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors"><?php echo esc_html($t['join_our_team']); ?></button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-[#F26B3A] transition-colors"><?php echo esc_html($t['partner_with_us']); ?></button>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 