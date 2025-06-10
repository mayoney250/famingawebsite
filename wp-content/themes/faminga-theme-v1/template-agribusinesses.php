<?php
/**
 * Template Name: Agribusinesses
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
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['solutions_for_agribusinesses']); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['agribusiness_subtitle']); ?></p>
        </div>

        <!-- Hero Section -->
        <section class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-6">
                            <i class="ri-building-2-line text-primary text-2xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($t['connect_process_export']); ?></h2>
                        <p class="text-gray-300 mb-6"><?php echo esc_html($t['streamline_agribusiness_desc']); ?></p>
                        <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="inline-block px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['request_demo']); ?></a>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agribusiness-hero.jpg" alt="<?php esc_attr_e( 'Agribusiness Operations', 'faminga-theme-v1' ); ?>" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <!-- Key Features -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['complete_value_chain']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-contacts-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['supplier_management']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['supplier_mgmt_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-award-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['quality_control_tracking']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['quality_control_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-file-list-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['export_documentation']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['export_docs_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-route-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['traceability_system_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['traceability_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-calendar-check-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['production_planning_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['production_planning_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-global-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['market_intelligence_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['market_intelligence_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Industries We Serve -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['industries_we_serve']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-cup-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php echo esc_html($t['coffee_exporters']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['coffee_exporters_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-leaf-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php echo esc_html($t['tea_processors']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['tea_processors_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-plant-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php echo esc_html($t['spice_traders']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['spice_traders_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-apple-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php echo esc_html($t['fresh_produce_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['fresh_produce_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['why_choose_faminga_agribusiness']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
                            <i class="ri-time-line text-primary"></i>
                        </div>
                        <?php echo esc_html($t['reduce_processing_time']); ?>
                    </h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['reduce_processing_desc']); ?></p>
                    
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
                            <i class="ri-shield-check-line text-primary"></i>
                        </div>
                        <?php echo esc_html($t['ensure_compliance']); ?>
                    </h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['ensure_compliance_desc']); ?></p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
                            <i class="ri-line-chart-line text-primary"></i>
                        </div>
                        <?php echo esc_html($t['increase_profitability_title']); ?>
                    </h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['increase_profitability_desc']); ?></p>
                    
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
                            <i class="ri-global-line text-primary"></i>
                        </div>
                        <?php echo esc_html($t['expand_market_reach']); ?>
                    </h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['expand_market_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Success Story -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['agribusiness_success_story']); ?></h2>
            
            <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30 max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-1">
                        <img src="https://via.placeholder.com/300x200" alt="Rwanda Premium Coffee Ltd" class="w-full rounded-lg">
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold mb-2">Rwanda Premium Coffee Ltd</h3>
                        <p class="text-gray-400 mb-4"><?php echo esc_html($t['coffee_exporter_stats']); ?></p>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">50%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['faster_processing']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">35%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['cost_reduction_rate']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">200+</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['active_suppliers']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">25</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['export_markets']); ?></div>
                            </div>
                        </div>
                        
                        <blockquote class="text-gray-300 italic mb-4">
                            <?php echo esc_html($t['agribusiness_testimonial']); ?>
                        </blockquote>
                        <p class="text-sm text-gray-400">— Sarah Mukamana, <?php echo esc_html($t['operations_director']); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['agribusiness_solutions_pricing']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Business Plan -->
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <h3 class="text-2xl font-bold mb-2"><?php echo esc_html($t['business_plan']); ?></h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['small_medium_agribusiness']); ?></p>
                    <div class="text-3xl font-bold mb-6">$150<span class="text-lg text-gray-400"><?php echo esc_html($t['month']); ?></span></div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['up_to_100_suppliers']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['quality_control_tracking_feature']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['basic_export_docs']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['market_intelligence_dashboard']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['email_phone_support']); ?></span>
                        </li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="block w-full text-center px-6 py-3 bg-gray-700 text-white font-medium hover:bg-gray-600 transition-all duration-300 rounded-lg"><?php echo esc_html($t['start_trial']); ?></a>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-primary relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-medium"><?php echo esc_html($t['enterprise_plan_title']); ?></span>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-2"><?php echo esc_html($t['enterprise_plan_title']); ?></h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['enterprise_plan_desc']); ?></p>
                    <div class="text-3xl font-bold mb-6"><?php echo esc_html($t['contact_custom']); ?><span class="text-lg text-gray-400"> <?php echo esc_html($t['custom_pricing']); ?></span></div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['unlimited_supplier_mgmt']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['advanced_traceability']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['complete_export_docs']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['custom_api_integrations']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['dedicated_account_mgmt']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['priority_support_24_7']); ?></span>
                        </li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block w-full text-center px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['contact_sales']); ?></a>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center">
            <div class="bg-[#0a2c0a] p-12 rounded-lg border border-[#526700] border-opacity-30">
                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['transform_your_agribusiness']); ?></h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto"><?php echo esc_html($t['join_leading_agribusinesses']); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="px-8 py-4 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['request_demo']); ?></a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-8 py-4 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 rounded-lg"><?php echo esc_html($t['contact_sales']); ?></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?> 