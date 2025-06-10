<?php
/**
 * Template Name: Career Page (Kinyarwanda)
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

// Get translated text for job types, statuses and buttons
$job_types = [
    'full_time' => 'Igihe cyose',
    'part_time' => 'Igihe gito',
    'contract' => 'Amasezerano',
    'internship' => 'Amahugurwa y\'akazi',
    'volunteer' => 'Gukorera ku bushake'
];

$job_statuses = [
    'open' => 'Ifunguye',
    'coming_soon' => 'Biri hafi',
    'closed' => 'Ifunze'
];

$buttons = [
    'view_details' => 'Reba ibisobanuro',
    'apply_now' => 'Saba Ubu',
    'apply_for_internship' => 'Saba Kwimenyereza',
    'join_initiative' => 'Yinjira mu gikorwa',
    'join_ai_challenges' => 'Yinjira mu bikorwa bya AI',
    'coming_soon' => 'Biri hafi',
    'position_filled' => 'Umwanya wujujwe',
    'initiative_closed' => 'Igikorwa cyarangiye'
];
?>

<main class="py-16">
    <div class="container mx-auto max-w-6xl px-4">
        <!-- Career Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Iyinjire mu Itsinda rya Faminga</h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">Dufashe guhindura ubuhinzi muri Afurika dukoresheje ikoranabuhanga rigezweho n'udushya twihariye</p>
        </div>
        
        <!-- Search and Filter Bar -->
        <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 p-6 mb-10">
            <div class="mb-6">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="ri-search-line text-gray-400"></i>
                    </div>
                    <input type="text" id="job-search" class="w-full py-3 pl-12 pr-4 bg-[#001a00] border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary" placeholder="Shakisha imyanya...">
                </div>
            </div>
            
            <form id="job-filter-form" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="filter-location" class="block text-sm font-medium text-gray-300 mb-2">Aho uri</label>
                    <div class="relative">
                        <select id="filter-location" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value="">Aho hose</option>
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
                    <label for="filter-type" class="block text-sm font-medium text-gray-300 mb-2">Ubwoko bw'akazi</label>
                    <div class="relative">
                        <select id="filter-type" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value="">Ubwoko bwose</option>
                            <option value="full_time">Igihe cyose</option>
                            <option value="part_time">Igihe gito</option>
                            <option value="contract">Amasezerano</option>
                            <option value="internship">Amahugurwa y'akazi</option>
                            <option value="volunteer">Gukorera ku bushake</option>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="filter-status" class="block text-sm font-medium text-gray-300 mb-2">Imiterere y'akazi</label>
                    <div class="relative">
                        <select id="filter-status" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value="">Imiterere yose</option>
                            <option value="open">Ifunguye</option>
                            <option value="coming_soon">Biri hafi</option>
                            <option value="closed">Ifunze</option>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none w-4 h-4 flex items-center justify-center">
                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="filter-skill" class="block text-sm font-medium text-gray-300 mb-2">Ubumenyi</label>
                    <div class="relative">
                        <select id="filter-skill" class="w-full appearance-none px-4 py-2 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                            <option value="">Ubumenyi bwose</option>
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
                        Siba ibisubizo byose
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Career Categories Navigation -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-[#0a2c0a] rounded-lg p-1 border border-[#526700] border-opacity-30">
                <a href="#open-positions" class="filter-tab px-6 py-2 rounded-md bg-primary text-white">Imyanya ifunguye</a>
                <a href="#internships" class="filter-tab px-6 py-2 rounded-md text-white hover:bg-[#001a00] transition-colors">Amahugurwa y'akazi (Internships)</a>
                <a href="#volunteer" class="filter-tab px-6 py-2 rounded-md text-white hover:bg-[#001a00] transition-colors">Gukorera ku bushake & Ingamba zo kurengera ikirere</a>
            </div>
        </div>
        
        <!-- Job Listings Section -->
        <section id="open-positions" class="job-section mb-16">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4">Imyanya iriho ubu</h2>
            
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
                        $job_type_display = $job_types[$job_type] ?? $job_types['full_time'];
                        
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
                        $skills_list = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills_list[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = $job_statuses[$job_status] ?? $job_statuses['open'];
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
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
                                        
                                        <?php if (!empty($skills_list)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills_list as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php echo esc_html($buttons['view_details']); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open') : ?>
                                            <?php if (!empty($application_url)) : ?>
                                                <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php echo esc_html($buttons['apply_now']); ?>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('job-application')) . '?job_id=' . get_the_ID()); ?>" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php echo esc_html($buttons['apply_now']); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['coming_soon']); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['position_filled']); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta myanya ihura n'ibyo wahisemo. Nyamuneka gerageza guhitamo ibindi.</p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta myanya ihura n'ibyo washakishije. Nyamuneka gerageza gushakisha mu bundi buryo.</p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p>Nta myanya ifunguye iriho ubu. Nyamuneka garuka nyuma cyangwa usuzume izindi mahirwe dufite.</p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        
        <!-- Internship Section -->
        <section id="internships" class="job-section mb-16 hidden">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4">Amahirwe yo Kwimenyereza Akazi</h2>
            
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
                        $job_type_display = $job_types[$job_type] ?? $job_types['internship'];
                        
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
                        $skills_list = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills_list[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = $job_statuses[$job_status] ?? $job_statuses['open'];
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
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
                                        
                                        <?php if (!empty($skills_list)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills_list as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php echo esc_html($buttons['view_details']); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open') : ?>
                                            <?php if (!empty($application_url)) : ?>
                                                <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php echo esc_html($buttons['apply_for_internship']); ?>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('job-application')) . '?job_id=' . get_the_ID()); ?>" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                    <?php echo esc_html($buttons['apply_for_internship']); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['coming_soon']); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['position_filled']); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta mahugurwa y'akazi ahura n'ibyo wahisemo. Nyamuneka gerageza guhitamo ibindi.</p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta mahugurwa y'akazi ahura n'ibyo washakishije. Nyamuneka gerageza gushakisha mu bundi buryo.</p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p>Nta myanya ifunguye iriho ubu. Nyamuneka garuka nyuma cyangwa usuzume izindi mahirwe dufite.</p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        
        <!-- Volunteer & Climate Impact Section -->
        <section id="volunteer" class="job-section mb-16 hidden">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4">Amahirwe yo Gukorera ku Bushake n'Ingamba zo Kurengera Ibidukikije</h2>
            
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
                        $job_type_display = $job_types[$job_type] ?? $job_types['volunteer'];
                        
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
                        $skills_list = [];
                        $skill_slugs = [];
                        if (!empty($skill_terms) && !is_wp_error($skill_terms)) {
                            foreach ($skill_terms as $skill) {
                                $skills_list[] = $skill->name;
                                $skill_slugs[] = $skill->slug;
                            }
                        }
                        
                        // Status display class and text
                        $status_class = 'bg-primary';
                        $status_text = $job_statuses[$job_status] ?? $job_statuses['open'];
                        
                        if ($job_status === 'closed') {
                            $status_class = 'bg-gray-600';
                        } elseif ($job_status === 'coming_soon') {
                            $status_class = 'bg-green-800';
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
                                        
                                        <?php if (!empty($skills_list)) : ?>
                                            <div class="flex flex-wrap gap-2 items-start">
                                                <?php foreach ($skills_list as $skill) : ?>
                                                    <span class="px-3 py-1 bg-[#001a00] border border-gray-700 rounded-full text-xs"><?php echo esc_html($skill); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="text-gray-300 mb-4 job-description"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
                                    
                                    <div class="flex justify-between items-center flex-wrap gap-4">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                            <?php echo esc_html($buttons['view_details']); ?>
                                            <i class="ri-arrow-right-line ml-1"></i>
                                        </a>
                                        
                                        <?php if ($job_status === 'open' && !empty($application_url)) : ?>
                                            <a href="<?php echo esc_url($application_url); ?>" target="_blank" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">
                                                <?php echo esc_html($buttons['join_initiative']); ?>
                                            </a>
                                        <?php elseif ($job_status === 'coming_soon') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['coming_soon']); ?>
                                            </button>
                                        <?php elseif ($job_status === 'closed') : ?>
                                            <button disabled class="inline-block px-6 py-2 bg-gray-600 text-white font-medium cursor-not-allowed opacity-75 !rounded-button">
                                                <?php echo esc_html($buttons['initiative_closed']); ?>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <div class="empty-filter-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta mahirwe yo gukorera ku bushake ahura n'ibyo wahisemo. Nyamuneka gerageza guhitamo ibindi.</p>
                </div>
                
                <div class="empty-search-message hidden mt-8 p-4 bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 text-center">
                    <p class="text-gray-300">Nta mahirwe yo gukorera ku bushake ahura n'ibyo washakishije. Nyamuneka gerageza gushakisha mu bundi buryo.</p>
                </div>
            <?php else : ?>
                <div class="text-center text-gray-400 py-8">
                    <p>Nta myanya ifunguye iriho ubu. Nyamuneka garuka nyuma cyangwa usuzume izindi mahirwe dufite.</p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
            <!-- AI in Agriculture Challenges -->
            <div class="bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 p-6 mt-8">
                <h3 class="text-xl font-bold mb-4">Imbogamizi mu gukoresha AI mu buhinzi</h3>
                <p class="text-gray-300 mb-6">Fata uruhare mu bikorwa byacu bigamije gukemura ibibazo by'ingenzi mu buhinzi dukoresheje ubwenge bw'ikoranabuhanga (AI). Kora kuri za data n'ibibazo nyakuri abahinzi bo muri Afurika bahura nabyo.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <!-- Challenge 1 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2">Gusesengura indwara z'ibihingwa</h4>
                        <p class="text-sm text-gray-300 mb-3">Kunoza ubushobozi bwo gutahura indwara mu bihingwa nka Mayoka, Ibigori n'Ikawa.</p>
                        <span class="px-2 py-1 bg-yellow-900 text-yellow-100 rounded-full text-xs">Igikorwa Gikomeje</span>
                    </div>
                    
                    <!-- Challenge 2 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2">Guteganya Umusaruro</h4>
                        <p class="text-sm text-gray-300 mb-3">Guteza imbere porogaramu ziteganya umusaruro zishingira ku makuru y'ibikoresho, ikirere n'imirimo y'ubuhinzi.</p>
                        <span class="px-2 py-1 bg-yellow-900 text-yellow-100 rounded-full text-xs">Igikorwa Gikomeje</span>
                    </div>
                    
                    <!-- Challenge 3 -->
                    <div class="bg-[#001a00] p-4 rounded-lg border border-gray-700">
                        <h4 class="font-semibold mb-2">Gukoresha neza ibikoresho</h4>
                        <p class="text-sm text-gray-300 mb-3">Guhanga porogaramu zigena uko bakoresha amazi n'ifumbire neza bishingiye ku makuru ya butaka n'ibihingwa.</p>
                        <span class="px-2 py-1 bg-green-900 text-green-100 rounded-full text-xs">Kizaza Vuba</span>
                    </div>
                </div>
                
                <a href="#" class="inline-block px-6 py-2 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button">Yinjira mu bikorwa bya AI</a>
            </div>
        </section>
        
        <!-- Why Join Us Section -->
        <section class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">Impamvu zo Kwifatanya na Faminga</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-seedling-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Gira uruhare rufatika</h3>
                    <p class="text-gray-300">Kora ku ikoranabuhanga rihindura umutekano w'ibiribwa n'imibereho y'abahinzi muri Afurika.</p>
                </div>
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-lightbulb-flash-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Gukora mu buryo buhanga</h3>
                    <p class="text-gray-300">Kemura ibibazo bigoye ukoresheje ikoranabuhanga rigezweho mu rwego rwihuta rwa startup.</p>
                </div>
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-primary rounded-full p-3">
                            <i class="ri-group-line text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Itsinda ry'abantu batandukanye</h3>
                    <p class="text-gray-300">Jya mu itsinda ry'abahanga baturuka mu mico itandukanye mu by'ikoranabuhanga, ubuhinzi, no guteza imbere ubucuruzi.</p>
                </div>
            </div>
        </section>
        
        <!-- Hiring Process -->
        <section>
            <h2 class="text-3xl font-bold text-center mb-12">Uko Dutoranya Abakozi</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">1</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Isesengura ry'Ubwanditsi (CV)</h3>
                    <p class="text-gray-400 text-sm">Itsinda ryacu risuzuma CV yawe, porotifoliyo, n'ibibazo by'ubusabe kugira ngo bamenye ubumenyi n'uburambe bwawe.</p>
                </div>
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">2</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Isuzuma ry'Ubumenyi bwa Tekiniki</h3>
                    <p class="text-gray-400 text-sm">Biterwa n'akazi, ushobora gusabwa gukora ikizamini cy'ubumenyi cyangwa gukemura ikibazo cyo kwandika porogaramu.</p>
                </div>
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">3</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Ikiganiro n'Itsinda</h3>
                    <p class="text-gray-400 text-sm">Uganira n'abagize itsinda ushobora gukoreramo n'abayobozi kugira ngo basuzume uburambe bwawe n'ukuntu uhura n'umuco w'akazi.</p>
                </div>
                <!-- Step 4 -->
                <div class="text-center">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-[#0a2c0a] border-2 border-primary rounded-full flex items-center justify-center">
                            <span class="text-2xl font-bold text-primary">4</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Icyemezo cya nyuma n'Itangwa ry'Akazi</h3>
                    <p class="text-gray-400 text-sm">Abakandida batsinze bazahabwa itangwa ry'akazi rifite ibisobanuro ku mishahara n'inyungu.</p>
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