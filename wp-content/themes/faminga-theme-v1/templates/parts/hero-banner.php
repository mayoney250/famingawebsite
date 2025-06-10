<?php
declare(strict_types=1);

/**
 * Template part for displaying the hero banner section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();

// Get page links
$demo_request_page = get_page_by_path('demo-request');
$learn_more_page   = get_page_by_path('learn-more');

$demo_request_url = $demo_request_page ? get_permalink($demo_request_page->ID) : home_url('/demo-request');
$learn_more_url   = $learn_more_page ? get_permalink($learn_more_page->ID) : home_url('/learn-more');
?>

<!-- Hero Section -->
<section class="hero-section w-full pt-24 pb-40 px-6 relative">
    <!-- Video Background -->
    <div class="video-background absolute inset-0 z-0 overflow-hidden">
        <video class="absolute w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-[#0c310c] bg-opacity-60 "></div>
    </div>
    
    <div class="container mx-auto relative z-10 flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 mb-10 md:mb-0" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold mb-4"><?php echo wp_kses_post($t['hero_title']); ?></h1>
            <p class="text-lg mb-8 text-gray-200"><?php echo esc_html($t['hero_description']); ?></p>
            <div class="flex flex-wrap gap-6" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo esc_url($demo_request_url); ?>" class="px-6 py-3 bg-primary text-white font-medium !rounded-button whitespace-nowrap"><?php echo esc_html($t['get_started']); ?></a>
                <a href="<?php echo esc_url($learn_more_url); ?>" class="px-6 py-3 border border-white text-white font-medium !rounded-button whitespace-nowrap"><?php echo esc_html($t['learn_more']); ?></a>
            </div>
            <div class="flex flex-wrap mt-10 gap-6" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-plant-line text-primary"></i>
                    </div>
                    <span class="text-sm"><?php echo esc_html($t['smart_farming']); ?></span>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-sensor-line text-primary"></i>
                    </div>
                    <span class="text-sm"><?php echo esc_html($t['iot_monitoring']); ?></span>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-cloud-line text-primary"></i>
                    </div>
                    <span class="text-sm"><?php echo esc_html($t['weather_services']); ?></span>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-database-2-line text-primary"></i>
                    </div>
                    <span class="text-sm"><?php echo esc_html($t['real_time_data']); ?></span>
                </div>
            </div>
        </div>
        
    </div>
    <style>
    .hero-section {
        position: relative;
        overflow: hidden;
    }
    .video-background {
        position: absolute;
        width: 100%;
        height: 100%;
    }
    .video-background video {
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    </style>
</section> 