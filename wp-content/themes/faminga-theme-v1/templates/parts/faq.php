<?php
declare(strict_types=1);

/**
 * Template part for displaying the FAQ section.
 *
 * @package Faminga_Theme_v1
 */

// Get the translated texts for the current language.
$t = faminga_get_translated_texts();
?>
<!-- FAQ Section -->
<section class="py-20 px-6 bg-[#0c330c]">
<div class="container mx-auto">
<h2 class="text-3xl font-bold mb-16 text-center" data-aos="fade-up"><?php echo esc_html($t['faq_title']); ?></h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Knowledge Base -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
<h3 class="text-xl font-semibold mb-4 flex items-center">
<i class="ri-book-open-line text-primary mr-2"></i>
<?php echo esc_html($t['knowledge_base']); ?>
</h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['knowledge_base_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2">
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['getting_started_guide']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['feature_tutorials']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['best_practices']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['technical_guides']); ?></a></li>
</ul>
</div>
<!-- Community Forum -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
<h3 class="text-xl font-semibold mb-4 flex items-center">
<i class="ri-team-line text-primary mr-2"></i>
<?php echo esc_html($t['community_forum']); ?>
</h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['community_forum_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2">
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['discussion_board']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['success_stories']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['feature_requests']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['community_events']); ?></a></li>
</ul>
</div>
<!-- Direct Support -->
<div class="solution-card p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
<h3 class="text-xl font-semibold mb-4 flex items-center">
<i class="ri-customer-service-line text-primary mr-2"></i>
<?php echo esc_html($t['direct_support']); ?>
</h3>
<p class="text-gray-300 mb-4"><?php echo esc_html($t['direct_support_desc']); ?></p>
<ul class="text-sm text-gray-300 space-y-2">
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['live_chat']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['email_helpdesk']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['phone_support']); ?></a></li>
<li><a href="#" class="hover:text-primary transition"><?php echo esc_html($t['report_issues']); ?></a></li>
</ul>
</div>
</div>
<!-- FAQ Questions -->
<div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="400">
<div class="space-y-6">
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q1']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a1']); ?></p>
</div>
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q2']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a2']); ?></p>
</div>
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q3']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a3']); ?></p>
</div>
</div>
<div class="space-y-6">
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q4']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a4']); ?></p>
</div>
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q5']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a5']); ?></p>
</div>
<div class="solution-card p-6 rounded-lg">
<h4 class="text-lg font-semibold mb-2"><?php echo esc_html($t['faq_q6']); ?></h4>
<p class="text-gray-300"><?php echo esc_html($t['faq_a6']); ?></p>
</div>
</div>
</div>
</div>
</section> 