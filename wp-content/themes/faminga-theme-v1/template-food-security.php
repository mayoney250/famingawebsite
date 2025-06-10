<?php
/**
 * Template Name: Food Security
 *
 * @package Faminga_Theme_V1
 */

get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-6xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['food_security_programs']); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['food_security_subtitle']); ?></p>
        </div>

        <!-- Hero Section -->
        <section class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-6">
                            <i class="ri-heart-line text-primary text-2xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($t['building_resilient_communities']); ?></h2>
                        <p class="text-gray-300 mb-6"><?php echo esc_html($t['food_security_hero_desc']); ?></p>
                        <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="inline-block px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['learn_more']); ?></a>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-security-hero.jpg" alt="<?php esc_attr_e( 'Food Security Programs', 'faminga-theme-v1' ); ?>" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <!-- Core Programs -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['comprehensive_food_security']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-alarm-warning-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['early_warning_systems']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['early_warning_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-bar-chart-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['yield_monitoring_assessment']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['yield_monitoring_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-map-pin-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['vulnerability_mapping']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['vulnerability_mapping_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-seedling-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['resilient_farming_programs']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['resilient_farming_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-truck-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['emergency_response_coordination']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['emergency_response_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-community-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['community_nutrition_programs']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['community_nutrition_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Technology Solutions -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['technology_for_food_security']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-6"><?php echo esc_html($t['data_collection_analysis']); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-satellite-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['satellite_monitoring']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['satellite_monitoring_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-phone-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['mobile_data_collection']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['mobile_data_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-brain-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['ai_powered_predictions']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['ai_predictions_desc']); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6"><?php echo esc_html($t['community_engagement']); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-message-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['sms_alerts']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['sms_alerts_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-radio-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['radio_integration']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['radio_integration_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-group-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['community_networks']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['community_networks_desc']); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Impact Metrics -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['impact_on_food_security']); ?></h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">2.5M</div>
                    <div class="text-gray-300"><?php echo esc_html($t['people_reached']); ?></div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">150K</div>
                    <div class="text-gray-300"><?php echo esc_html($t['farmers_trained']); ?></div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">85%</div>
                    <div class="text-gray-300"><?php echo esc_html($t['early_warning_accuracy']); ?></div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">30%</div>
                    <div class="text-gray-300"><?php echo esc_html($t['yield_improvement']); ?></div>
                </div>
            </div>
        </section>

        <!-- Partners -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['food_security_partners']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <h3 class="font-bold mb-3"><?php echo esc_html($t['international_organizations']); ?></h3>
                    <p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['international_orgs_desc']); ?></p>
                    <div class="text-primary font-semibold">FAO • WFP • USAID</div>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <h3 class="font-bold mb-3"><?php echo esc_html($t['government_agencies']); ?></h3>
                    <p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['government_agencies_desc']); ?></p>
                    <div class="text-primary font-semibold"><?php echo esc_html($t['rwanda_kenya_uganda']); ?></div>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <h3 class="font-bold mb-3"><?php echo esc_html($t['research_institutions']); ?></h3>
                    <p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['research_institutions_desc']); ?></p>
                    <div class="text-primary font-semibold">CGIAR • ICRAF • RAB</div>
                </div>
            </div>
        </section>

        <!-- Case Study -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['food_security_success_story']); ?></h2>
            
            <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30 max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-1">
                        <img src="https://via.placeholder.com/300x200" alt="Eastern Province Drought Response" class="w-full rounded-lg">
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold mb-2"><?php echo esc_html($t['eastern_province_drought']); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo esc_html($t['drought_stats']); ?></p>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">45K</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['households_reached']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">30</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['days_early_warning']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">70%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['crop_loss_prevented']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">0</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['malnutrition_cases']); ?></div>
                            </div>
                        </div>
                        
                        <blockquote class="text-gray-300 italic mb-4">
                            <?php echo esc_html($t['food_security_testimonial']); ?>
                        </blockquote>
                        <p class="text-sm text-gray-400">— Dr. Damascene Nzabonimpa, <?php echo esc_html($t['ministry_of_agriculture']); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center">
            <div class="bg-[#0a2c0a] p-12 rounded-lg border border-[#526700] border-opacity-30">
                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['partner_with_us_food_security']); ?></h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto"><?php echo esc_html($t['food_security_partnership_desc']); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-8 py-4 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['partner_with_us']); ?></a>
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="px-8 py-4 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 rounded-lg"><?php echo esc_html($t['learn_more']); ?></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?> 