<?php
/**
 * Template Name: Career Page
 *
 * @package Faminga_Theme_V1
 */

get_header(); 

// Get filters
$locations = get_terms([
    'taxonomy' => 'job_location',
    'hide_empty' => true,
]);

$opportunity_types = get_terms([
    'taxonomy' => 'opportunity_type',
    'hide_empty' => true,
]);

$skills = get_terms([
    'taxonomy' => 'job_skill',
    'hide_empty' => true,
]);

// Get jobs by opportunity type
$open_positions_query = new WP_Query([
    'post_type' => 'faminga_job',
    'posts_per_page' => -1,
    'tax_query' => [
        [
            'taxonomy' => 'opportunity_type',
            'field' => 'slug',
            'terms' => 'open-position',
            'operator' => 'IN',
        ],
    ],
    'meta_key' => '_job_status',
    'orderby' => 'meta_value',
    'order' => 'ASC',
]);

$internships_query = new WP_Query([
    'post_type' => 'faminga_job',
    'posts_per_page' => -1,
    'tax_query' => [
        [
            'taxonomy' => 'opportunity_type',
            'field' => 'slug',
            'terms' => 'internship',
            'operator' => 'IN',
        ],
    ],
    'meta_key' => '_job_status',
    'orderby' => 'meta_value',
    'order' => 'ASC',
]);

$volunteer_query = new WP_Query([
    'post_type' => 'faminga_job',
    'posts_per_page' => -1,
    'tax_query' => [
        [
            'taxonomy' => 'opportunity_type',
            'field' => 'slug',
            'terms' => 'volunteer',
            'operator' => 'IN',
        ],
    ],
    'meta_key' => '_job_status',
    'orderby' => 'meta_value',
    'order' => 'ASC',
]);
?>

<main class="py-16">
    <div class="container mx-auto max-w-6xl px-4">
        <!-- Career Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php _e('Join the Faminga Team', 'faminga-theme-v1'); ?></h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto"><?php _e('Help us transform African agriculture with cutting-edge technology and innovative solutions', 'faminga-theme-v1'); ?></p>
        </div>
        
        <!-- Search and Filter Bar -->
        <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 p-6 mb-10">
            <div class="mb-6">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="ri-search-line text-gray-400"></i>
                    </div>
                    <input type="text" id="job-search" class="w-full py-3 pl-12 pr-4 bg-[#001a00] border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary" placeholder="<?php esc_attr_e('Search positions...', 'faminga-theme-v1'); ?>">
                </div>
            </div>
            
            <form id="job-filter-form" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="filter-location" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Location', 'faminga-theme-v1'); ?></label>
                    <div class="relative">
                        <select id="filter-location" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value=""><?php _e('All Locations', 'faminga-theme-v1'); ?></option>
                            <?php foreach ($locations as $location) : ?>
                                <option value="<?php echo esc_attr($location->slug); ?>"><?php echo esc_html($location->name); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="filter-type" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Job Type', 'faminga-theme-v1'); ?></label>
                    <div class="relative">
                        <select id="filter-type" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value=""><?php _e('All Types', 'faminga-theme-v1'); ?></option>
                            <option value="full_time"><?php _e('Full Time', 'faminga-theme-v1'); ?></option>
                            <option value="part_time"><?php _e('Part Time', 'faminga-theme-v1'); ?></option>
                            <option value="contract"><?php _e('Contract', 'faminga-theme-v1'); ?></option>
                            <option value="internship"><?php _e('Internship', 'faminga-theme-v1'); ?></option>
                            <option value="volunteer"><?php _e('Volunteer', 'faminga-theme-v1'); ?></option>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="filter-status" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Status', 'faminga-theme-v1'); ?></label>
                    <div class="relative">
                        <select id="filter-status" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value=""><?php _e('All Statuses', 'faminga-theme-v1'); ?></option>
                            <option value="open"><?php _e('Open', 'faminga-theme-v1'); ?></option>
                            <option value="coming_soon"><?php _e('Coming Soon', 'faminga-theme-v1'); ?></option>
                            <option value="closed"><?php _e('Closed', 'faminga-theme-v1'); ?></option>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="filter-skill" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Skill', 'faminga-theme-v1'); ?></label>
                    <div class="relative">
                        <select id="filter-skill" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value=""><?php _e('All Skills', 'faminga-theme-v1'); ?></option>
                            <?php foreach ($skills as $skill) : ?>
                                <option value="<?php echo esc_attr($skill->slug); ?>"><?php echo esc_html($skill->name); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div class="md:col-span-4 flex justify-end">
                    <button id="reset-filters" class="px-4 py-2 text-primary hover:underline flex items-center">
                        <i class="ri-refresh-line mr-2"></i>
                        <?php _e('Reset Filters', 'faminga-theme-v1'); ?>
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Career Categories Navigation -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-[#0a2c0a] rounded-lg p-1 border border-[#526700] border-opacity-30">
                <a href="#open-positions" class="filter-tab px-6 py-2 rounded-md bg-primary text-white"><?php _e('Open Positions', 'faminga-theme-v1'); ?></a>
                <a href="#internships" class="filter-tab px-6 py-2 rounded-md text-white hover:bg-[#001a00] transition-colors"><?php _e('Internships', 'faminga-theme-v1'); ?></a>
                <a href="#volunteer" class="filter-tab px-6 py-2 rounded-md text-white hover:bg-[#001a00] transition-colors"><?php _e('Volunteer & Climate Impact', 'faminga-theme-v1'); ?></a>
            </div>
        </div>
        
        <!-- Job Listings Section -->
        <section id="open-positions" class="job-section mb-16">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4"><?php _e('Current Openings', 'faminga-theme-v1'); ?></h2>
            
            <?php if ($open_positions_query->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-6">
                    <?php 
                    while ($open_positions_query->have_posts()) : 
                        $open_positions_query->the_post();
                        
                        // Get job details
                        $job_status = get_post_meta(get_the_ID(), '_job_status', true) ?: 'open';
                        $job_type = get_post_meta(get_the_ID(), '_job_type', true) ?: 'full_time';
                        $application_url = get_post_meta(get_the_ID(), '_application_url', true);
                        
                        // Format job type for display
                        $job_type_display = '';
                        switch ($job_type) {
                            case 'full_time':
                                $job_type_display = __('Full Time', 'faminga-theme-v1');
                                break;
                            case 'part_time':
                                $job_type_display = __('Part Time', 'faminga-theme-v1');
                                break;
                            case 'contract':
                                $job_type_display = __('Contract', 'faminga-theme-v1');
                                break;
                            case 'internship':
                                $job_type_display = __('Internship', 'faminga-theme-v1');
                                break;
                            case 'volunteer':
                                $job_type_display = __('Volunteer', 'faminga-theme-v1');
                                break;
                            default:
                                $job_type_display = __('Full Time', 'faminga-theme-v1');
                        }
                        
                        // Get location terms
                        $location_terms = get_the_terms(get_the_ID(), 'job_location');
                        $location = '';
                        $location_slug = '';
                        if (!empty($location_terms) && !is_wp_error($location_terms)) {
                            $location = $location_terms[0]->name;
                            $location_slug = $location_terms[0]->slug;
                        }
                        
                        // Get skill terms
                        $skill_terms = get_the_terms(get_the_ID(), 'job_skill');
                        $skills = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = __('Open', 'faminga-theme-v1');
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                            $status_text = __('Closed', 'faminga-theme-v1');
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
                            $status_text = __('Coming Soon', 'faminga-theme-v1');
                        }
                    ?>
                        <div class="job-card bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300" 
                             data-location="<?php echo esc_attr($location_slug); ?>" 
                             data-type="<?php echo esc_attr($job_type); ?>" 
                             data-status="<?php echo esc_attr($job_status); ?>" 
                             data-skills="<?php echo esc_attr(implode(',', $skill_slugs)); ?>">
                            <div class="md:flex">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="md:w-1/3 h-48 md:h-auto overflow-hidden">
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="p-6 md:w-2/3">
                                    <div class="flex justify-between flex-wrap gap-4 mb-4">
                                        <div>
                                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                                <span class="px-3 py-1 <?php echo esc_attr($status_class); ?> text-white rounded-full text-sm"><?php echo esc_html($status_text); ?></span>
                                                <span class="px-3 py-1 bg-primary bg-opacity-20 text-primary rounded-full text-sm"><?php echo esc_html($job_type_display); ?></span>
                                            </div>
                                            <h3 class="text-xl font-bold mb-2 job-title"><?php the_title(); ?></h3>
                                            
                                            <?php if (!empty($location)) : ?>
                                                <div class="flex items-center text-gray-300 text-sm mb-2 job-location">
                                                    <i class="ri-map-pin-line mr-2"></i>
                                                    <span><?php echo esc_html($location); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <?php if (!empty($skills)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php _e('View Details', 'faminga-theme-v1'); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open') : ?>
                                            <?php if (!empty($application_url)) : ?>
                                                <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php _e('Apply Now', 'faminga-theme-v1'); ?>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('job-application')) . '?job_id=' . get_the_ID()); ?>" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php _e('Apply Now', 'faminga-theme-v1'); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Coming Soon', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Position Filled', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No open positions match your filter criteria. Please try different filters.', 'faminga-theme-v1'); ?></p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No open positions match your search. Please try a different search term.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p><?php _e('There are currently no open positions. Please check back later or explore our other opportunities.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        
        <!-- Internship Section -->
        <section id="internships" class="job-section mb-16 hidden">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4"><?php _e('Internship Opportunities', 'faminga-theme-v1'); ?></h2>
            
            <?php if ($internships_query->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-6">
                    <?php 
                    while ($internships_query->have_posts()) : 
                        $internships_query->the_post();
                        
                        // Get job details
                        $job_status = get_post_meta(get_the_ID(), '_job_status', true) ?: 'open';
                        $job_type = get_post_meta(get_the_ID(), '_job_type', true) ?: 'internship';
                        $application_url = get_post_meta(get_the_ID(), '_application_url', true);
                        
                        // Format job type for display
                        $job_type_display = '';
                        switch ($job_type) {
                            case 'full_time':
                                $job_type_display = __('Full Time', 'faminga-theme-v1');
                                break;
                            case 'part_time':
                                $job_type_display = __('Part Time', 'faminga-theme-v1');
                                break;
                            case 'contract':
                                $job_type_display = __('Contract', 'faminga-theme-v1');
                                break;
                            case 'internship':
                                $job_type_display = __('Internship', 'faminga-theme-v1');
                                break;
                            case 'volunteer':
                                $job_type_display = __('Volunteer', 'faminga-theme-v1');
                                break;
                            default:
                                $job_type_display = __('Internship', 'faminga-theme-v1');
                        }
                        
                        // Get location terms
                        $location_terms = get_the_terms(get_the_ID(), 'job_location');
                        $location = '';
                        $location_slug = '';
                        if (!empty($location_terms) && !is_wp_error($location_terms)) {
                            $location = $location_terms[0]->name;
                            $location_slug = $location_terms[0]->slug;
                        }
                        
                        // Get skill terms
                        $skill_terms = get_the_terms(get_the_ID(), 'job_skill');
                        $skills = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = __('Open', 'faminga-theme-v1');
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                            $status_text = __('Closed', 'faminga-theme-v1');
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
                            $status_text = __('Coming Soon', 'faminga-theme-v1');
                        }
                    ?>
                        <div class="job-card bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300" 
                             data-location="<?php echo esc_attr($location_slug); ?>" 
                             data-type="<?php echo esc_attr($job_type); ?>" 
                             data-status="<?php echo esc_attr($job_status); ?>" 
                             data-skills="<?php echo esc_attr(implode(',', $skill_slugs)); ?>">
                            <div class="md:flex">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="md:w-1/3 h-48 md:h-auto overflow-hidden">
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="p-6 md:w-2/3">
                                    <div class="flex justify-between flex-wrap gap-4 mb-4">
                                        <div>
                                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                                <span class="px-3 py-1 <?php echo esc_attr($status_class); ?> text-white rounded-full text-sm"><?php echo esc_html($status_text); ?></span>
                                                <span class="px-3 py-1 bg-[#004d00] text-white rounded-full text-sm"><?php echo esc_html($job_type_display); ?></span>
                                            </div>
                                            <h3 class="text-xl font-bold mb-2 job-title"><?php the_title(); ?></h3>
                                            
                                            <?php if (!empty($location)) : ?>
                                                <div class="flex items-center text-gray-300 text-sm mb-2 job-location">
                                                    <i class="ri-map-pin-line mr-2"></i>
                                                    <span><?php echo esc_html($location); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <?php if (!empty($skills)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php _e('View Details', 'faminga-theme-v1'); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open') : ?>
                                            <?php if (!empty($application_url)) : ?>
                                                <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php _e('Apply for Internship', 'faminga-theme-v1'); ?>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('job-application')) . '?job_id=' . get_the_ID()); ?>" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php _e('Apply for Internship', 'faminga-theme-v1'); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Coming Soon', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Position Filled', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No internships match your filter criteria. Please try different filters.', 'faminga-theme-v1'); ?></p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No internships match your search. Please try a different search term.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p><?php _e('There are currently no open positions. Please check back later or explore our other opportunities.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        
        <!-- Volunteer & Climate Impact Section -->
        <section id="volunteer" class="job-section mb-16 hidden">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4"><?php _e('Volunteer & Climate Impact Opportunities', 'faminga-theme-v1'); ?></h2>
            
            <?php if ($volunteer_query->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-6">
                    <?php 
                    while ($volunteer_query->have_posts()) : 
                        $volunteer_query->the_post();
                        
                        // Get job details
                        $job_status = get_post_meta(get_the_ID(), '_job_status', true) ?: 'open';
                        $job_type = get_post_meta(get_the_ID(), '_job_type', true) ?: 'volunteer';
                        $application_url = get_post_meta(get_the_ID(), '_application_url', true);
                        
                        // Format job type for display
                        $job_type_display = '';
                        switch ($job_type) {
                            case 'full_time':
                                $job_type_display = __('Full Time', 'faminga-theme-v1');
                                break;
                            case 'part_time':
                                $job_type_display = __('Part Time', 'faminga-theme-v1');
                                break;
                            case 'contract':
                                $job_type_display = __('Contract', 'faminga-theme-v1');
                                break;
                            case 'internship':
                                $job_type_display = __('Internship', 'faminga-theme-v1');
                                break;
                            case 'volunteer':
                                $job_type_display = __('Volunteer', 'faminga-theme-v1');
                                break;
                            default:
                                $job_type_display = __('Volunteer', 'faminga-theme-v1');
                        }
                        
                        // Get location terms
                        $location_terms = get_the_terms(get_the_ID(), 'job_location');
                        $location = '';
                        $location_slug = '';
                        if (!empty($location_terms) && !is_wp_error($location_terms)) {
                            $location = $location_terms[0]->name;
                            $location_slug = $location_terms[0]->slug;
                        }
                        
                        // Get skill terms
                        $skill_terms = get_the_terms(get_the_ID(), 'job_skill');
                        $skills = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = __('Open', 'faminga-theme-v1');
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                            $status_text = __('Closed', 'faminga-theme-v1');
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
                            $status_text = __('Coming Soon', 'faminga-theme-v1');
                        }
                    ?>
                        <div class="job-card bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300" 
                             data-location="<?php echo esc_attr($location_slug); ?>" 
                             data-type="<?php echo esc_attr($job_type); ?>" 
                             data-status="<?php echo esc_attr($job_status); ?>" 
                             data-skills="<?php echo esc_attr(implode(',', $skill_slugs)); ?>">
                            <div class="md:flex">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="md:w-1/3 h-48 md:h-auto overflow-hidden">
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="p-6 md:w-2/3">
                                    <div class="flex justify-between flex-wrap gap-4 mb-4">
                                        <div>
                                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                                <span class="px-3 py-1 <?php echo esc_attr($status_class); ?> text-white rounded-full text-sm"><?php echo esc_html($status_text); ?></span>
                                                <span class="px-3 py-1 bg-primary bg-opacity-20 text-primary rounded-full text-sm"><?php echo esc_html($job_type_display); ?></span>
                                            </div>
                                            <h3 class="text-xl font-bold mb-2 job-title"><?php the_title(); ?></h3>
                                            
                                            <?php if (!empty($location)) : ?>
                                                <div class="flex items-center text-gray-300 text-sm mb-2 job-location">
                                                    <i class="ri-map-pin-line mr-2"></i>
                                                    <span><?php echo esc_html($location); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <?php if (!empty($skills)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php _e('View Details', 'faminga-theme-v1'); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open' && !empty($application_url)) : ?>
                                            <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                <?php _e('Join Initiative', 'faminga-theme-v1'); ?>
                                            </a>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Coming Soon', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php _e('Initiative Closed', 'faminga-theme-v1'); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No volunteer opportunities match your filter criteria. Please try different filters.', 'faminga-theme-v1'); ?></p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300"><?php _e('No volunteer opportunities match your search. Please try a different search term.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p><?php _e('There are currently no open positions. Please check back later or explore our other opportunities.', 'faminga-theme-v1'); ?></p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
            <!-- AI in Agriculture Challenges -->
            <div class="bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 p-6 mt-8">
                <h3 class="text-xl font-bold mb-4"><?php _e('AI in Agriculture Challenges', 'faminga-theme-v1'); ?></h3>
                <p class="text-gray-300 mb-6"><?php _e('Participate in our ongoing challenges to solve critical agricultural problems using artificial intelligence. Work on real-world datasets and problems faced by farmers in Africa.', 'faminga-theme-v1'); ?></p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <!-- Challenge 1 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2"><?php _e('Crop Disease Classification', 'faminga-theme-v1'); ?></h4>
                        <p class="text-sm text-gray-300 mb-3"><?php _e('Improve accuracy of disease detection models for cassava, maize, and coffee plants.', 'faminga-theme-v1'); ?></p>
                        <span class="px-2 py-1 bg-yellow-900 text-yellow-100 rounded-full text-xs"><?php _e('Active Challenge', 'faminga-theme-v1'); ?></span>
                    </div>
                    
                    <!-- Challenge 2 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2"><?php _e('Yield Prediction', 'faminga-theme-v1'); ?></h4>
                        <p class="text-sm text-gray-300 mb-3"><?php _e('Develop models to predict crop yields based on sensor data, weather, and farm practices.', 'faminga-theme-v1'); ?></p>
                        <span class="px-2 py-1 bg-yellow-900 text-yellow-100 rounded-full text-xs"><?php _e('Active Challenge', 'faminga-theme-v1'); ?></span>
                    </div>
                    
                    <!-- Challenge 3 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2"><?php _e('Resource Optimization', 'faminga-theme-v1'); ?></h4>
                        <p class="text-sm text-gray-300 mb-3"><?php _e('Create algorithms for optimal water and fertilizer usage based on soil and crop data.', 'faminga-theme-v1'); ?></p>
                        <span class="px-2 py-1 bg-green-900 text-green-100 rounded-full text-xs"><?php _e('Coming Soon', 'faminga-theme-v1'); ?></span>
                    </div>
                </div>
                
                <a href="#" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button"><?php _e('Join AI Challenges', 'faminga-theme-v1'); ?></a>
            </div>
        </section>
        
        <!-- Why Join Us Section -->
        <section class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold text-center mb-8"><?php _e('Why Join Faminga?', 'faminga-theme-v1'); ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-seedling-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php _e('Meaningful Impact', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-300"><?php _e('Work on technology that directly improves food security and farmer livelihoods across Africa', 'faminga-theme-v1'); ?></p>
                </div>
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-lightbulb-flash-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php _e('Innovation-Driven', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-300"><?php _e('Solve complex challenges with cutting-edge technology in a fast-paced startup environment', 'faminga-theme-v1'); ?></p>
                </div>
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-group-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php _e('Diverse Team', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-300"><?php _e('Join a multicultural team of experts in technology, agriculture, and business development', 'faminga-theme-v1'); ?></p>
                </div>
            </div>
        </section>
        
        <!-- Hiring Process -->
        <section>
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e('Our Hiring Process', 'faminga-theme-v1'); ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">1</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2"><?php _e('Application Review', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-400 text-sm"><?php _e('Our team reviews your CV, portfolio, and application questions to assess your skills and experience.', 'faminga-theme-v1'); ?></p>
                </div>
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">2</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2"><?php _e('Technical Assessment', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-400 text-sm"><?php _e('Depending on the role, you may be asked to complete a skill-based assessment or coding challenge.', 'faminga-theme-v1'); ?></p>
                </div>
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">3</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2"><?php _e('Team Interviews', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-400 text-sm"><?php _e('Meet with your potential team members and leadership to discuss your experience and assess cultural fit.', 'faminga-theme-v1'); ?></p>
                </div>
                <!-- Step 4 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">4</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2"><?php _e('Final Decision & Offer', 'faminga-theme-v1'); ?></h3>
                    <p class="text-gray-400 text-sm"><?php _e('Successful candidates will receive a competitive offer with details on compensation and benefits.', 'faminga-theme-v1'); ?></p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Enqueue career filters script only on this page
wp_enqueue_script('faminga-career-filters', get_template_directory_uri() . '/assets/js/career-filters.js', [], '1.0.0', true);
?>

<?php get_footer(); ?>