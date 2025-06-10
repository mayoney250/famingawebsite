<?php
declare(strict_types=1);

/**
 * Template part for displaying the feature grid section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();
?>

<!-- Features Section -->
<section id="features" class="py-20 px-6 bg-[#0c330c] bg-opacity-60 backdrop-blur-sm">
<div class="container mx-auto text-center mb-16" data-aos="fade-up">
<h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['section_title']); ?></h2>
<p class="text-lg text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['section_description']); ?></p>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Farm Management -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-farm-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['farm_management']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['farm_management_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- IoT Monitoring -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-sensor-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['iot_monitoring']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['iot_monitoring_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- Plant Disease Detection -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-virus-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['disease_detection']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['disease_detection_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
</div>
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
<!-- Weather & Geospatial -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="400">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-cloud-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['weather_title']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['weather_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- Virtual Marketplace -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="500">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-store-2-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['marketplace']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['marketplace_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
<!-- AI Agricultural Advice -->
<div class="feature-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="600">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-lg mb-4">
<i class="ri-robot-line text-primary text-2xl"></i>
</div>
<h3 class="text-xl font-semibold mb-3"><?php echo esc_html($t['ai_advice']); ?></h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['ai_advice_desc']); ?></p>
<a href="#" class="text-primary flex items-center hover:underline">
<?php echo esc_html($t['learn_more']); ?>
<div class="w-5 h-5 flex items-center justify-center ml-1">
<i class="ri-arrow-right-line"></i>
</div>
</a>
</div>
</div>
<style>
.feature-card {
    background: rgba(0, 51, 0, 0.3);
    border: 1px solid rgba(82, 103, 0, 0.3);
    box-shadow: 0 0 20px rgba(82, 103, 0, 0.1);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.feature-card:hover {
    background: rgba(0, 51, 0, 0.5);
    border-color: rgba(82, 103, 0, 0.5);
    box-shadow: 0 0 30px rgba(82, 103, 0, 0.2);
    transform: translateY(-5px);
}
</style>
</section> 