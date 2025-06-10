<?php
declare(strict_types=1);

/**
 * Template part for displaying the pricing section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();
?>
<!-- Pricing Section -->
<section id="pricing" class="py-20 px-6 bg-[#0a2c0a]">
<div class="container mx-auto text-center mb-16" data-aos="fade-up">
<h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['pricing_title']); ?></h2>
<p class="text-lg text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['pricing_desc']); ?></p>
<div class="flex justify-center items-center gap-4 mt-8">
<span class="text-gray-300"><?php echo esc_html($t['monthly_billing']); ?></span>
<button class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-primary" id="pricing-toggle">
<span class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
</button>
<span class="text-gray-300"><?php echo esc_html($t['annual_billing']); ?> <span class="text-primary text-sm"><?php echo esc_html($t['save_20']); ?></span></span>
</div>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
<!-- Free Plan -->
<div class="solution-card p-6 rounded-lg border border-gray-700 hover:border-primary transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
<h3 class="text-xl font-semibold mb-2"><?php echo esc_html($t['free_plan']); ?></h3>
<p class="text-sm text-gray-400 mb-4"><?php echo esc_html($t['free_plan_desc']); ?></p>
<div class="mb-6">
<span class="text-3xl font-bold">0Rwf</span>
<span class="text-gray-400 billing-period">/month</span>
</div>
<ul class="text-sm text-gray-300 space-y-3 mb-8">
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['limited_weather']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['basic_farm_management']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['single_farm']); ?></span>
</li>
</ul>
<button class="w-full py-2 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 !rounded-button"><?php echo esc_html($t['get_started']); ?></button>
</div>
<!-- Standard Plan -->
<div class="solution-card p-6 rounded-lg border border-gray-700 hover:border-primary transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
<h3 class="text-xl font-semibold mb-2"><?php echo esc_html($t['standard_plan']); ?></h3>
<p class="text-sm text-gray-400 mb-4"><?php echo esc_html($t['standard_plan_desc']); ?></p>
<div class="mb-6">
<span class="text-3xl font-bold">10,000Rwf</span>
<span class="text-gray-400 billing-period">/month</span>
</div>
<ul class="text-sm text-gray-300 space-y-3 mb-8">
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['full_weather']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['advanced_farm_management']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['iot_device_support']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['basic_reports']); ?></span>
</li>
</ul>
<button class="w-full py-2 bg-primary text-white hover:bg-opacity-90 transition-all duration-300 !rounded-button"><?php echo esc_html($t['subscribe_now']); ?></button>
</div>
<!-- Pro Plan -->
<div class="solution-card p-6 rounded-lg border border-primary transition-all duration-300 relative" data-aos="fade-up" data-aos-delay="300">
<div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-sm"><?php echo esc_html($t['popular']); ?></div>
<h3 class="text-xl font-semibold mb-2"><?php echo esc_html($t['pro_plan']); ?></h3>
<p class="text-sm text-gray-400 mb-4"><?php echo esc_html($t['pro_plan_desc']); ?></p>
<div class="mb-6">
<span class="text-3xl font-bold">25,000Rwf</span>
<span class="text-gray-400 billing-period">/month</span>
</div>
<ul class="text-sm text-gray-300 space-y-3 mb-8">
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['premium_weather']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['advanced_analytics']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['up_to_10_iot']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['priority_support']); ?></span>
</li>
</ul>
<button class="w-full py-2 bg-primary text-white hover:bg-opacity-90 transition-all duration-300 !rounded-button"><?php echo esc_html($t['contact_sales']); ?></button>
</div>
<!-- Enterprise Plan -->
<div class="solution-card p-6 rounded-lg border border-gray-700 hover:border-primary transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
<h3 class="text-xl font-semibold mb-2"><?php echo esc_html($t['enterprise_plan']); ?></h3>
<p class="text-sm text-gray-400 mb-4"><?php echo esc_html($t['enterprise_plan_desc']); ?></p>
<div class="mb-6">
<span class="text-3xl font-bold">50,000Rwf</span>
<span class="text-gray-400 billing-period">/month</span>
</div>
<ul class="text-sm text-gray-300 space-y-3 mb-8">
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['api_integration']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['unlimited_iot']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['advanced_dashboard']); ?></span>
</li>
<li class="flex items-center">
<i class="ri-check-line text-primary mr-2"></i>
<span><?php echo esc_html($t['premium_support']); ?></span>
</li>
</ul>
<button class="w-full py-2 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 !rounded-button"><?php echo esc_html($t['schedule_demo']); ?></button>
</div>
</div>
</section> 