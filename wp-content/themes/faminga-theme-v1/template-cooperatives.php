<?php
/**
 * Template Name: Cooperatives
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
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['solutions_cooperatives_groups']); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['collaborative_tools_desc']); ?></p>
        </div>

        <!-- Hero Section -->
        <section class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-6">
                            <i class="ri-team-line text-primary text-2xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($t['stronger_together']); ?></h2>
                        <p class="text-gray-300 mb-6"><?php echo esc_html($t['empower_cooperative_desc']); ?></p>
                        <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="inline-block px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['start_group_trial']); ?></a>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cooperative-hero.jpg" alt="<?php esc_attr_e( 'Farmer Cooperative', 'faminga-theme-v1' ); ?>" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <!-- Key Features -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['collaborative_tools_title']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-user-settings-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['member_management_system']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['member_management_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-shopping-cart-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['bulk_purchasing_platform']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['bulk_purchasing_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-megaphone-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['collective_marketing_tools_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['collective_marketing_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-calendar-event-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['activity_coordination']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['activity_coordination_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-share-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['resource_sharing_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['resource_sharing_desc']); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                        <i class="ri-money-dollar-circle-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['financial_management_title']); ?></h3>
                    <p class="text-gray-300 text-sm"><?php echo esc_html($t['financial_management_desc']); ?></p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['benefits_cooperative_farming']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-6"><?php echo esc_html($t['economic_benefits']); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-arrow-up-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['reduced_input_costs']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['reduced_costs_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-line-chart-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['better_market_prices']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['better_prices_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-bank-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['access_to_credit']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['access_credit_desc']); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6"><?php echo esc_html($t['social_benefits']); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-graduation-cap-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['knowledge_sharing_title']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['knowledge_sharing_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-tools-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['shared_resources_title']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['shared_resources_desc']); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-shield-user-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($t['risk_mitigation']); ?></h4>
                                <p class="text-gray-300 text-sm"><?php echo esc_html($t['risk_mitigation_desc']); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Success Story -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['cooperative_success_story']); ?></h2>
            
            <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-1">
                        <img src="https://via.placeholder.com/300x200" alt="Ubwenge Coffee Cooperative" class="w-full rounded-lg">
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold mb-4">Ubwenge Coffee Cooperative</h3>
                        <p class="text-gray-400 mb-4"><?php echo esc_html($t['members_coffee_nyamasheke']); ?></p>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">250</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['active_members']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">40%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['cost_savings']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">65%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['income_increase']); ?></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl font-bold text-primary">100%</div>
                                <div class="text-xs text-gray-400"><?php echo esc_html($t['member_satisfaction']); ?></div>
                            </div>
                        </div>
                        
                        <blockquote class="text-gray-300 italic">
                            <?php echo esc_html($t['cooperative_testimonial']); ?>
                        </blockquote>
                        <p class="text-sm text-gray-400 mt-2">— Jean de Dieu Nzeyimana, <?php echo esc_html($t['cooperative_manager']); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['affordable_plans_cooperatives']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Cooperative Basic -->
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <h3 class="text-2xl font-bold mb-2"><?php echo esc_html($t['cooperative_basic']); ?></h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['small_cooperatives_50']); ?></p>
                    <div class="text-3xl font-bold mb-6">$25<span class="text-lg text-gray-400"><?php echo esc_html($t['month']); ?></span></div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['up_to_50_members']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['basic_bulk_purchasing']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['simple_financial_tracking']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['activity_coordination_calendar']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['email_support']); ?></span>
                        </li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="block w-full text-center px-6 py-3 bg-gray-700 text-white font-medium hover:bg-gray-600 transition-all duration-300 rounded-lg"><?php echo esc_html($t['start_trial']); ?></a>
                </div>

                <!-- Cooperative Pro -->
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-primary relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-medium"><?php echo esc_html($t['most_popular']); ?></span>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-2"><?php echo esc_html($t['cooperative_pro']); ?></h3>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['large_cooperatives_unlimited']); ?></p>
                    <div class="text-3xl font-bold mb-6">$75<span class="text-lg text-gray-400"><?php echo esc_html($t['month']); ?></span></div>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['unlimited_member_profiles']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['advanced_bulk_purchasing']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['complete_financial_suite']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['collective_marketing_tools_feature']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['resource_sharing_management']); ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-check-line text-primary mr-3"></i>
                            <span class="text-sm"><?php echo esc_html($t['priority_support_training']); ?></span>
                        </li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="block w-full text-center px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['start_trial']); ?></a>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center">
            <div class="bg-[#0a2c0a] p-12 rounded-lg border border-[#526700] border-opacity-30">
                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['ready_strengthen_cooperative']); ?></h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto"><?php echo esc_html($t['join_thousands_cooperatives']); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="px-8 py-4 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['start_group_trial']); ?></a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-8 py-4 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 rounded-lg"><?php echo esc_html($t['contact_sales']); ?></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?> 