<?php
/**
 * Template Name: Learn More
 *
 * @package Faminga_Theme_v1
 */

declare(strict_types=1);
get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main id="primary" class="site-main bg-[#0A1A0F] text-white">
    <!-- Hero Banner -->
    <section class="py-16 px-6 bg-[#0D2E14] relative overflow-hidden">
        <div class="container mx-auto relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['how_faminga_supports']); ?></h1>
                <p class="text-xl text-gray-300 mb-8"><?php echo esc_html($t['discover_process']); ?></p>
            </div>
        </div>
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-pattern"></div>
        </div>
    </section>

    <!-- Step by Step Process Infographic -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center"><?php echo esc_html($t['step_by_step_process']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Step 1 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">1</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step1']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step1-registration.svg" alt="<?php echo esc_attr($t['step1_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step1_desc']); ?></p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">2</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step2']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step2-data-collection.svg" alt="<?php echo esc_attr($t['step2_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step2_desc']); ?></p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">3</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step3']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step3-request-solution.svg" alt="<?php echo esc_attr($t['step3_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step3_desc']); ?></p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">4</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step4']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step4-monitoring.svg" alt="<?php echo esc_attr($t['step4_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step4_desc']); ?></p>
                </div>
                
                <!-- Step 5 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">5</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step5']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step5-solution.svg" alt="<?php echo esc_attr($t['step5_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step5_desc']); ?></p>
                </div>
                
                <!-- Step 6 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] relative">
                    <div class="absolute -top-5 -left-5 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-xl font-bold">6</div>
                    <h3 class="text-xl font-bold mb-4 mt-4"><?php echo esc_html($t['step6']); ?></h3>
                    <div class="mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step6-community.svg" alt="<?php echo esc_attr($t['step6_title']); ?>" class="h-40 mx-auto">
                    </div>
                    <p class="text-gray-300"><?php echo esc_html($t['step6_desc']); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Information -->
    <section class="py-16 px-6 bg-[#0A1A0F]">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-3xl font-bold mb-12 text-center"><?php echo esc_html($t['how_faminga_supports']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Section 1 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-user-plus text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step1']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['account_setup_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['signup_quickly']); ?></li>
                            <li><?php echo esc_html($t['fill_basic_details']); ?></li>
                            <li><?php echo esc_html($t['get_personalized_support']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['secure_storage']); ?></p>
                    </div>
                </div>
                
                <!-- Section 2 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-database text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step2']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['data_collection_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['manual_entry']); ?></li>
                            <li><?php echo esc_html($t['iot_sensors']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['iot_realtime']); ?></p>
                    </div>
                </div>
                
                <!-- Section 3 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-leaf text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step3']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['solution_request_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['take_photo']); ?></li>
                            <li><?php echo esc_html($t['ai_detection']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['offline_model']); ?></p>
                    </div>
                </div>
                
                <!-- Section 4 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-bell text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step4']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['monitoring_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['sensors_24_7']); ?></li>
                            <li><?php echo esc_html($t['instant_alerts']); ?></li>
                            <li><?php echo esc_html($t['immediate_action']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['instant_notifications']); ?></p>
                    </div>
                </div>
                
                <!-- Section 5 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step5_title']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['solution_tracking_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['precise_treatment']); ?></li>
                            <li><?php echo esc_html($t['track_outcome']); ?></li>
                            <li><?php echo esc_html($t['follow_progress']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['monitor_improvements']); ?></p>
                    </div>
                </div>
                
                <!-- Section 6 -->
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] hover:border-primary transition-all duration-300 hover:shadow-lg hover:shadow-primary/20 h-full transform hover:-translate-y-1">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center"><?php echo esc_html($t['step6']); ?></h3>
                    <div class="text-gray-300 space-y-3">
                        <p><?php echo esc_html($t['community_details']); ?></p>
                        <ul class="list-disc ml-5 space-y-1">
                            <li><?php echo esc_html($t['growing_community']); ?></li>
                            <li><?php echo esc_html($t['local_agronomists']); ?></li>
                            <li><?php echo esc_html($t['ai_assistant']); ?></li>
                        </ul>
                        <p class="text-gray-400 text-sm italic mt-4"><?php echo esc_html($t['share_knowledge']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Example Use Case -->
    <section class="py-16 px-6 bg-[#0D2E14]">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8 text-center"><?php echo esc_html($t['example_use_case']); ?></h2>
            
            <div class="bg-[#0A1A0F] rounded-lg p-8 border border-[#1B2B1C]">
                <h3 class="text-xl font-bold mb-6"><?php echo esc_html($t['use_case_intro']); ?></h3>
                
                <div class="space-y-6">
                    <div class="flex">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-4 flex-shrink-0">1</div>
                        <div>
                            <p class="text-white"><?php echo esc_html($t['use_case_step1']); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-4 flex-shrink-0">2</div>
                        <div>
                            <p class="text-white"><?php echo esc_html($t['use_case_step2']); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-4 flex-shrink-0">3</div>
                        <div>
                            <p class="text-white"><?php echo esc_html($t['use_case_step3']); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-4 flex-shrink-0">4</div>
                        <div>
                            <p class="text-white"><?php echo esc_html($t['use_case_step4']); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-4 flex-shrink-0">5</div>
                        <div>
                            <p class="text-white"><?php echo esc_html($t['use_case_step5']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Use Faminga -->
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold mb-8 text-center"><?php echo esc_html($t['why_use_faminga']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] flex">
                    <div class="w-10 h-10 bg-primary bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-chart-pie text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2"><?php echo esc_html($t['increase_yields']); ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['increase_yields_desc']); ?></p>
                    </div>
                </div>
                
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] flex">
                    <div class="w-10 h-10 bg-primary bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-shield-alt text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2"><?php echo esc_html($t['reduce_crop_loss']); ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['reduce_crop_loss_desc']); ?></p>
                    </div>
                </div>
                
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] flex">
                    <div class="w-10 h-10 bg-primary bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2"><?php echo esc_html($t['personalized_guidance']); ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['personalized_guidance_desc']); ?></p>
                    </div>
                </div>
                
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] flex">
                    <div class="w-10 h-10 bg-primary bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-users text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2"><?php echo esc_html($t['connect_network']); ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['connect_network_desc']); ?></p>
                    </div>
                </div>
                
                <div class="bg-[#0D2E14] rounded-lg p-6 border border-[#1B2B1C] flex md:col-span-2">
                    <div class="w-10 h-10 bg-primary bg-opacity-20 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-mobile-alt text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2"><?php echo esc_html($t['empower_farm']); ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['empower_farm_desc']); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-6"><?php echo esc_html($t['ready_to_start']); ?></h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('demo-request'))); ?>" class="px-6 py-3 bg-primary text-white font-medium !rounded-button inline-flex items-center">
                        <i class="fas fa-download mr-2"></i> <?php echo esc_html($t['request_demo']); ?>
                    </a>
                    <a href="#" class="px-6 py-3 border border-primary text-primary font-medium !rounded-button inline-flex items-center">
                        <i class="fas fa-play-circle mr-2"></i> <?php echo esc_html($t['watch_tutorial']); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 