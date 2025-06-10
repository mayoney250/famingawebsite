<?php
declare(strict_types=1);

/**
 * Template part for displaying the solutions section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();
?>

<!-- Solutions Section -->
<section id="solutions" class="py-20 px-6 bg-[#0a2c0a] bg-opacity-50 backdrop-blur-sm">
<div class="container mx-auto text-center mb-16" data-aos="fade-up">
<h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['solutions_title']); ?></h2>
<p class="text-lg text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['solutions_desc']); ?></p>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
<!-- Small-Scale Farmers -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
<div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
<i class="ri-plant-line text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['small_scale_farmers']); ?></h3>
<p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['small_scale_farmers_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2 mb-4">
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['weather_forecasting']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['crop_management']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['disease_identification']); ?>
</li>
</ul>
<a href="#" class="text-primary text-sm flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-4 h-4 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- Commercial Farms -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
<div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
<i class="ri-building-4-line text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['commercial_farms']); ?></h3>
<p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['commercial_farms_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2 mb-4">
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['analytics_dashboard']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['workforce_management']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['supply_chain_integration']); ?>
</li>
</ul>
<a href="#" class="text-primary text-sm flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-4 h-4 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- Cooperatives & Groups -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
<div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
<i class="ri-team-line text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['cooperatives']); ?></h3>
<p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['cooperatives_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2 mb-4">
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['member_management']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['bulk_purchasing']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['collective_marketing']); ?>
</li>
</ul>
<a href="#" class="text-primary text-sm flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-4 h-4 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- Agribusinesses -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="400">
<div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
<i class="ri-briefcase-4-line text-primary"></i>
</div>
<h3 class="text-lg font-semibold mb-3"><?php echo esc_html($t['agribusinesses']); ?></h3>
<p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['agribusinesses_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2 mb-4">
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['supplier_management']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['quality_control']); ?>
</li>
<li class="flex items-center">
<div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
<i class="ri-check-line"></i>
</div>
<?php echo esc_html($t['export_documentation']); ?>
</li>
</ul>
<a href="#" class="text-primary text-sm flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-4 h-4 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mt-6" data-aos="fade-up" data-aos-delay="500">
<!-- Irrigation Solutions -->
<div class="solution-card p-4 rounded-lg flex items-center">
<div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
<i class="ri-drop-line text-primary"></i>
</div>
<div>
<h3 class="text-base font-medium"><?php echo esc_html($t['irrigation_solutions']); ?></h3>
<p class="text-xs text-gray-300"><?php echo esc_html($t['irrigation_solutions_desc']); ?></p>
</div>
</div>
<!-- Food Security Programs -->
<div class="solution-card p-4 rounded-lg flex items-center">
<div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
<i class="ri-seedling-line text-primary"></i>
</div>
<div>
<h3 class="text-base font-medium"><?php echo esc_html($t['food_security']); ?></h3>
<p class="text-xs text-gray-300"><?php echo esc_html($t['food_security_desc']); ?></p>
</div>
</div>
<!-- Rural Connectivity -->
<div class="solution-card p-4 rounded-lg flex items-center">
<div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3">
<i class="ri-wifi-line text-primary"></i>
</div>
<div>
<h3 class="text-base font-medium"><?php echo esc_html($t['rural_connectivity']); ?></h3>
<p class="text-xs text-gray-300"><?php echo esc_html($t['rural_connectivity_desc']); ?></p>
</div>
</div>
</div>
<style>
.solution-card {
    background: rgba(0, 51, 0, 0.25);
    border: 1px solid rgba(82, 103, 0, 0.3);
    box-shadow: 0 0 20px rgba(82, 103, 0, 0.1);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.solution-card:hover {
    background: rgba(0, 51, 0, 0.4);
    border-color: rgba(82, 103, 0, 0.5);
    box-shadow: 0 0 30px rgba(82, 103, 0, 0.2);
}
</style>
</section> 