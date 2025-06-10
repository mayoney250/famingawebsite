<?php
declare(strict_types=1);

/**
 * Template part for displaying the all-in-one platform section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();
?>

<!-- Platform Section -->
<section id="technology" class="py-20 px-6 bg-[#0c330c]">
<div class="container mx-auto text-center mb-16" data-aos="fade-up">
<h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['platform_title']); ?></h2>
<p class="text-lg text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['platform_desc']); ?></p>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Smart Farming Platform -->
<div class="solution-card p-6 rounded-lg border border-primary border-opacity-30" data-aos="fade-up" data-aos-delay="100">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-smartphone-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['smart_farming_platform']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['smart_farming_platform_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-3 mb-4">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['mobile_app']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['offline_functionality']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['multilanguage_support']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['ivr_system']); ?></span>
</li>
</ul>
</div>
<!-- IoT Solutions -->
<div class="solution-card p-6 rounded-lg border border-primary border-opacity-30" data-aos="fade-up" data-aos-delay="200">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-sensor-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['iot_solutions']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['iot_solutions_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-3 mb-4">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['soil_monitoring']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['connectivity']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['smart_irrigation']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['power_efficient']); ?></span>
</li>
</ul>
</div>
<!-- AI & Data Analytics -->
<div class="solution-card p-6 rounded-lg border border-primary border-opacity-30" data-aos="fade-up" data-aos-delay="300">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-brain-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['ai_analytics']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['ai_analytics_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-3 mb-4">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['ai_disease_detection']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['tensorflow_model']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['predictive_analytics']); ?></span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5 text-primary">
<i class="ri-check-line"></i>
</div>
<span><?php echo esc_html($t['custom_recommendations']); ?></span>
</li>
</ul>
</div>
</div>
</section> 