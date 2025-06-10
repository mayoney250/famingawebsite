<?php
/**
 * Template Name: Commercial Farms
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
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6"><?php echo esc_html($t['commercial_farms']); ?></h1>
            <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto mb-8"><?php echo esc_html($t['enterprise_solutions']); ?></p>
            <p class="text-sm lg:text-base text-gray-400 max-w-4xl mx-auto"><?php echo esc_html($t['advanced_farm_systems']); ?></p>
        </div>

        <!-- Key Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-12 lg:mb-16">
            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-dashboard-3-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['advanced_analytics_dashboard']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['analytics_dashboard_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-group-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['workforce_mgmt']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['workforce_mgmt_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-links-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['supply_chain_integration_title']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['supply_chain_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-robot-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['automation_iot']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['automation_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-shield-check-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['compliance_reporting']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['compliance_desc']); ?></p>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                    <i class="ri-line-chart-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['predictive_analytics_title']); ?></h3>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['predictive_desc']); ?></p>
            </div>
        </div>

        <!-- Platform Features -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['complete_enterprise_platform']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['enterprise_platform_desc']); ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mr-4 mt-1">
                            <i class="ri-check-line text-[#F26B3A]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2"><?php echo esc_html($t['multi_location_mgmt']); ?></h4>
                            <p class="text-gray-300 text-sm"><?php echo esc_html($t['multi_location_desc']); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mr-4 mt-1">
                            <i class="ri-check-line text-[#F26B3A]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2"><?php echo esc_html($t['api_integration_title']); ?></h4>
                            <p class="text-gray-300 text-sm"><?php echo esc_html($t['api_integration_desc']); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mr-4 mt-1">
                            <i class="ri-check-line text-[#F26B3A]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2"><?php echo esc_html($t['custom_workflows']); ?></h4>
                            <p class="text-gray-300 text-sm"><?php echo esc_html($t['custom_workflows_desc']); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mr-4 mt-1">
                            <i class="ri-check-line text-[#F26B3A]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2"><?php echo esc_html($t['enterprise_support_24_7']); ?></h4>
                            <p class="text-gray-300 text-sm"><?php echo esc_html($t['enterprise_support_desc']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#0a1a0a] rounded-xl p-6 border border-[#1B3B1C] border-opacity-30">
                    <h4 class="font-bold mb-4 text-center"><?php echo esc_html($t['roi_calculator']); ?></h4>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-300"><?php echo esc_html($t['farm_size_hectares']); ?></span>
                            <span class="font-bold">500</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300"><?php echo esc_html($t['yield_improvement']); ?></span>
                            <span class="font-bold text-[#F26B3A]">+15%</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300"><?php echo esc_html($t['cost_reduction']); ?></span>
                            <span class="font-bold text-[#F26B3A]">-12%</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300"><?php echo esc_html($t['annual_savings']); ?></span>
                            <span class="font-bold text-[#F26B3A]">$45,000+</span>
                        </div>
                        <div class="pt-4 border-t border-gray-600">
                            <div class="flex justify-between">
                                <span class="font-bold"><?php echo esc_html($t['roi']); ?></span>
                                <span class="font-bold text-[#F26B3A] text-lg">320%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Case Studies -->
        <div class="mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['success_stories']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['real_commercial_operations']); ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <div class="mb-6">
                        <h4 class="text-xl font-bold mb-2"><?php _e( 'AgriCorp Rwanda', 'faminga-theme-v1' ); ?></h4>
                        <p class="text-gray-400 text-sm"><?php _e( '2,500 hectares • Mixed crops • Export operations', 'faminga-theme-v1' ); ?></p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">18%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['yield_increase']); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">25%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['cost_reduction_rate']); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">$2.1M</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['annual_savings_amount']); ?></div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm italic"><?php _e( '"Faminga\'s platform transformed our operations. The predictive analytics helped us prevent a major disease outbreak, saving millions in potential losses."', 'faminga-theme-v1' ); ?></p>
                    <p class="text-gray-400 text-xs mt-3">— James Mutabazi, Operations Director</p>
                </div>

                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <div class="mb-6">
                        <h4 class="text-xl font-bold mb-2"><?php _e( 'EastAfrica Farms Ltd', 'faminga-theme-v1' ); ?></h4>
                        <p class="text-gray-400 text-sm"><?php _e( '1,800 hectares • Coffee & Tea • 4 locations', 'faminga-theme-v1' ); ?></p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">22%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['efficiency_gain']); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">100%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['traceability']); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#F26B3A]">95%</div>
                            <div class="text-xs text-gray-400"><?php echo esc_html($t['compliance_rate']); ?></div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm italic"><?php _e( '"The workforce management and compliance reporting features have streamlined our certification processes and improved worker productivity significantly."', 'faminga-theme-v1' ); ?></p>
                    <p class="text-gray-400 text-xs mt-3">— Sarah Uwimana, CEO</p>
                </div>
            </div>
        </div>

        <!-- Enterprise Pricing -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['enterprise_pricing']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['scalable_solutions_desc']); ?></p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto">
                <div class="border border-gray-600 rounded-xl p-6 lg:p-8 text-center">
                    <h3 class="text-xl font-bold mb-4"><?php echo esc_html($t['professional_plan']); ?></h3>
                    <div class="text-3xl font-bold mb-2">$500</div>
                    <p class="text-gray-400 text-sm mb-6"><?php echo esc_html($t['per_month_per_100_hectares']); ?></p>
                    <ul class="space-y-3 text-sm text-left mb-6">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['up_to_5_locations']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['advanced_analytics']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['api_access']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['priority_support']); ?></li>
                    </ul>
                    <button class="w-full bg-gray-600 text-white py-3 rounded-lg font-medium hover:bg-gray-500 transition-colors"><?php echo esc_html($t['get_quote']); ?></button>
                </div>

                <div class="border-2 border-[#F26B3A] rounded-xl p-6 lg:p-8 text-center relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-[#F26B3A] text-white px-4 py-1 rounded-full text-sm font-medium"><?php echo esc_html($t['most_popular']); ?></span>
                    </div>
                    <h3 class="text-xl font-bold mb-4"><?php echo esc_html($t['enterprise_plan_title']); ?></h3>
                    <div class="text-3xl font-bold mb-2">$1,200</div>
                    <p class="text-gray-400 text-sm mb-6"><?php echo esc_html($t['per_month_per_100_hectares']); ?></p>
                    <ul class="space-y-3 text-sm text-left mb-6">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['unlimited_locations']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['full_automation_suite']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['custom_integrations']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['dedicated_support_24_7']); ?></li>
                    </ul>
                    <button class="w-full bg-[#F26B3A] text-white py-3 rounded-lg font-medium hover:bg-[#e55a2b] transition-colors"><?php echo esc_html($t['schedule_demo']); ?></button>
                </div>

                <div class="border border-gray-600 rounded-xl p-6 lg:p-8 text-center">
                    <h3 class="text-xl font-bold mb-4"><?php echo esc_html($t['custom_plan']); ?></h3>
                    <div class="text-3xl font-bold mb-2"><?php echo esc_html($t['contact_custom']); ?></div>
                    <p class="text-gray-400 text-sm mb-6"><?php echo esc_html($t['for_custom_pricing']); ?></p>
                    <ul class="space-y-3 text-sm text-left mb-6">
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['custom_development']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['on_premise_deployment']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['dedicated_infrastructure']); ?></li>
                        <li class="flex items-center"><i class="ri-check-line text-[#F26B3A] mr-2"></i><?php echo esc_html($t['white_label_options']); ?></li>
                    </ul>
                    <button class="w-full bg-gray-600 text-white py-3 rounded-lg font-medium hover:bg-gray-500 transition-colors"><?php echo esc_html($t['contact_sales']); ?></button>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center bg-gradient-to-r from-[#F26B3A] to-[#e55a2b] rounded-xl p-8 lg:p-12">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['ready_to_scale']); ?></h2>
            <p class="text-lg mb-6 opacity-90"><?php echo esc_html($t['join_leading_farms']); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-[#F26B3A] px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors"><?php echo esc_html($t['schedule_demo']); ?></button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-[#F26B3A] transition-colors"><?php echo esc_html($t['get_custom_quote']); ?></button>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 