<?php
/**
 * The template for displaying single job listings
 *
 * @package Faminga_Theme_V1
 */

declare(strict_types=1);
get_header();

// Get job metadata
$job_status = get_post_meta(get_the_ID(), '_job_status', true) ?: 'open';
$job_type = get_post_meta(get_the_ID(), '_job_type', true) ?: 'full_time';
$application_url = get_post_meta(get_the_ID(), '_application_url', true);
$application_deadline = get_post_meta(get_the_ID(), '_application_deadline', true);

// Format job type for display
$job_type_labels = [
    'full_time' => __('Full Time', 'faminga-theme-v1'),
    'part_time' => __('Part Time', 'faminga-theme-v1'),
    'contract' => __('Contract', 'faminga-theme-v1'),
    'internship' => __('Internship', 'faminga-theme-v1'),
    'volunteer' => __('Volunteer', 'faminga-theme-v1')
];
$job_type_display = isset($job_type_labels[$job_type]) ? $job_type_labels[$job_type] : $job_type;

// Format deadline
$deadline_display = '';
if (!empty($application_deadline)) {
    $deadline_date = new DateTime($application_deadline);
    $deadline_display = $deadline_date->format('F j, Y');
    
    // Check if deadline is approaching or passed
    $now = new DateTime();
    if ($now > $deadline_date) {
        $deadline_status = '<span class="text-red-500 font-bold ml-2">' . __('(Expired)', 'faminga-theme-v1') . '</span>';
    } else {
        $diff = $now->diff($deadline_date);
        $days_remaining = $diff->days;
        
        if ($days_remaining <= 7) {
            $deadline_status = '<span class="text-orange-500 font-bold ml-2">(' . 
                sprintf(_n('%d day left', '%d days left', $days_remaining, 'faminga-theme-v1'), $days_remaining) . ')</span>';
        } else {
            $deadline_status = '';
        }
    }
    $deadline_display .= $deadline_status;
}

// Get job location
$location_terms = get_the_terms(get_the_ID(), 'job_location');
$location_list = [];
if (!empty($location_terms) && !is_wp_error($location_terms)) {
    foreach ($location_terms as $term) {
        $location_list[] = $term->name;
    }
}
$location_display = implode(', ', $location_list);

// Get job skills
$skill_terms = get_the_terms(get_the_ID(), 'job_skill');
$skill_list = [];
if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
    foreach ($skill_terms as $term) {
        $skill_list[] = $term->name;
    }
}
?>

<main id="primary" class="site-main bg-[#0A1A0F] text-white py-12">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <?php if (function_exists('yoast_breadcrumb')): ?>
            <div class="breadcrumbs mb-8 text-gray-400 text-sm">
                <?php yoast_breadcrumb(); ?>
            </div>
        <?php endif; ?>
        
        <?php if ($job_status === 'closed'): ?>
            <div class="bg-red-800 text-white p-4 mb-8 rounded-lg">
                <p class="font-bold"><?php _e('This position is no longer accepting applications.', 'faminga-theme-v1'); ?></p>
            </div>
        <?php elseif ($job_status === 'coming_soon'): ?>
            <div class="bg-blue-800 text-white p-4 mb-8 rounded-lg">
                <p class="font-bold"><?php _e('This position will be open for applications soon. Check back later!', 'faminga-theme-v1'); ?></p>
            </div>
        <?php endif; ?>

        <div class="job-header mb-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php the_title(); ?></h1>
            
            <div class="job-meta flex flex-wrap gap-4 mb-6">
                <?php if (!empty($job_type_display)): ?>
                    <div class="job-type bg-[#0D2E14] px-4 py-2 rounded-full border border-[#1B2B1C]">
                        <i class="fas fa-briefcase text-primary mr-2"></i>
                        <?php echo esc_html($job_type_display); ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($location_display)): ?>
                    <div class="job-location bg-[#0D2E14] px-4 py-2 rounded-full border border-[#1B2B1C]">
                        <i class="fas fa-map-marker-alt text-primary mr-2"></i>
                        <?php echo esc_html($location_display); ?>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($deadline_display)): ?>
                    <div class="job-deadline bg-[#0D2E14] px-4 py-2 rounded-full border border-[#1B2B1C]">
                        <i class="fas fa-calendar-alt text-primary mr-2"></i>
                        <?php _e('Apply by:', 'faminga-theme-v1'); ?> <?php echo wp_kses_post($deadline_display); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()): ?>
                <div class="job-featured-image mb-8 rounded-lg overflow-hidden">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="job-content-wrapper flex flex-wrap">
            <div class="job-content w-full lg:w-2/3 lg:pr-8">
                <div class="job-description bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
                    <h2 class="text-2xl font-bold mb-4"><?php _e('Job Description', 'faminga-theme-v1'); ?></h2>
                    <div class="prose prose-invert max-w-none">
                        <?php the_content(); ?>
                    </div>
                </div>
                
                <?php if (!empty($skill_list)): ?>
                <div class="job-skills bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
                    <h2 class="text-2xl font-bold mb-4"><?php _e('Required Skills', 'faminga-theme-v1'); ?></h2>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($skill_list as $skill): ?>
                            <span class="bg-[#0A1A0F] px-3 py-1 rounded-full border border-[#1B2B1C]"><?php echo esc_html($skill); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="job-sidebar w-full lg:w-1/3">
                <div class="sticky top-4">
                    <?php if ($job_status === 'open'): ?>
                        <div class="job-apply-box bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
                            <h3 class="text-xl font-bold mb-4"><?php _e('Apply for this Position', 'faminga-theme-v1'); ?></h3>
                            
                            <?php if (!empty($application_url)): ?>
                                <a href="<?php echo esc_url($application_url); ?>" target="_blank" rel="noopener noreferrer" 
                                   class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-lg inline-block w-full text-center transition">
                                    <?php _e('Apply Now', 'faminga-theme-v1'); ?> <i class="fas fa-external-link-alt ml-2"></i>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('job-application')) . '?job_id=' . get_the_ID()); ?>" 
                                   class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-lg inline-block w-full text-center transition">
                                    <?php _e('Apply Now', 'faminga-theme-v1'); ?>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($deadline_display)): ?>
                                <p class="mt-4 text-center text-gray-400">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    <?php _e('Applications close on', 'faminga-theme-v1'); ?> <?php echo wp_kses_post($deadline_display); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="job-share-box bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
                        <h3 class="text-xl font-bold mb-4"><?php _e('Share This Job', 'faminga-theme-v1'); ?></h3>
                        <div class="flex justify-center gap-4">
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo esc_url(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-primary">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>&text=<?php echo esc_attr(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-primary">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-primary">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="mailto:?subject=<?php echo esc_attr(get_the_title()); ?>&body=<?php echo esc_url(get_permalink()); ?>" class="text-white hover:text-primary">
                                <i class="fas fa-envelope fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    
                    <?php 
                    // Get related jobs
                    $related_args = [
                        'post_type' => 'faminga_job',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'post__not_in' => [get_the_ID()],
                        'meta_query' => [
                            [
                                'key' => '_job_status',
                                'value' => 'open',
                                'compare' => '='
                            ]
                        ]
                    ];
                    
                    // Try to get jobs with similar skills first
                    if (!empty($skill_terms)) {
                        $skill_ids = wp_list_pluck($skill_terms, 'term_id');
                        $related_args['tax_query'] = [
                            [
                                'taxonomy' => 'job_skill',
                                'field' => 'term_id',
                                'terms' => $skill_ids,
                                'operator' => 'IN'
                            ]
                        ];
                    }
                    
                    $related_jobs = new WP_Query($related_args);
                    
                    if ($related_jobs->have_posts()) : 
                    ?>
                        <div class="related-jobs bg-[#0D2E14] p-6 rounded-lg border border-[#1B2B1C] mb-8">
                            <h3 class="text-xl font-bold mb-4"><?php _e('Similar Opportunities', 'faminga-theme-v1'); ?></h3>
                            <ul class="space-y-4">
                                <?php while ($related_jobs->have_posts()) : $related_jobs->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" class="block p-3 rounded hover:bg-[#0A1A0F] transition">
                                            <h4 class="font-bold text-primary"><?php the_title(); ?></h4>
                                            <div class="text-sm text-gray-400">
                                                <?php 
                                                $rel_job_type = get_post_meta(get_the_ID(), '_job_type', true) ?: 'full_time';
                                                echo isset($job_type_labels[$rel_job_type]) ? esc_html($job_type_labels[$rel_job_type]) : esc_html($rel_job_type);
                                                
                                                $rel_location_terms = get_the_terms(get_the_ID(), 'job_location');
                                                if (!empty($rel_location_terms) && !is_wp_error($rel_location_terms)) {
                                                    $rel_locations = [];
                                                    foreach ($rel_location_terms as $term) {
                                                        $rel_locations[] = $term->name;
                                                    }
                                                    echo ' • ' . esc_html(implode(', ', $rel_locations));
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('career'))); ?>" class="text-primary hover:text-primary-light font-medium mt-4 inline-block">
                                <?php _e('View all opportunities', 'faminga-theme-v1'); ?> <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    <?php 
                    wp_reset_postdata();
                    endif; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>