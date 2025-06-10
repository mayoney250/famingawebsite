<?php
declare(strict_types=1);

/**
 * SEO Meta Tags and Schema.org Implementation
 * 
 * @package Faminga_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add comprehensive SEO meta tags to head
 */
function faminga_add_seo_meta_tags() {
    global $post;
    
    // Get current language for localized content
    $current_lang = faminga_get_current_language();
    
    // Basic meta tags
    echo "\n<!-- SEO Meta Tags -->\n";
    
    // Viewport (already in header.php but ensuring it's present)
    if (!has_action('wp_head', 'wp_site_icon')) {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
    }
    
    // Robots meta
    $robots_content = 'index, follow, max-snippet:160, max-image-preview:large, max-video-preview:-1';
    if (is_search() || is_404()) {
        $robots_content = 'noindex, nofollow';
    }
    echo '<meta name="robots" content="' . esc_attr($robots_content) . '">' . "\n";
    
    // Canonical URL
    $canonical_url = wp_get_canonical_url();
    if ($canonical_url) {
        echo '<link rel="canonical" href="' . esc_url($canonical_url) . '">' . "\n";
    }
    
    // Language and hreflang
    echo '<meta property="og:locale" content="' . esc_attr(get_locale()) . '">' . "\n";
    
    // Add hreflang tags for multilingual support
    $languages = [
        'en_US' => 'en-US',
        'rw_RW' => 'rw-RW', 
        'fr_FR' => 'fr-FR',
        'sw_KE' => 'sw-KE',
        'lg_UG' => 'lg-UG'
    ];
    
    $current_url = home_url($_SERVER['REQUEST_URI']);
    foreach ($languages as $wp_locale => $hreflang) {
        $lang_url = add_query_arg('lang', $wp_locale, $current_url);
        echo '<link rel="alternate" hreflang="' . esc_attr($hreflang) . '" href="' . esc_url($lang_url) . '">' . "\n";
    }
    
    // Get page-specific content
    $page_title = faminga_get_seo_title();
    $page_description = faminga_get_seo_description();
    $page_keywords = faminga_get_seo_keywords();
    $featured_image = faminga_get_featured_image_for_seo();
    
    // Meta description
    if ($page_description) {
        echo '<meta name="description" content="' . esc_attr($page_description) . '">' . "\n";
    }
    
    // Meta keywords (for legacy support)
    if ($page_keywords) {
        echo '<meta name="keywords" content="' . esc_attr($page_keywords) . '">' . "\n";
    }
    
    // Open Graph meta tags
    echo "\n<!-- Open Graph Meta Tags -->\n";
    echo '<meta property="og:type" content="' . esc_attr(is_single() ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($page_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($page_description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($canonical_url) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    
    if ($featured_image) {
        echo '<meta property="og:image" content="' . esc_url($featured_image['url']) . '">' . "\n";
        echo '<meta property="og:image:width" content="' . esc_attr($featured_image['width']) . '">' . "\n";
        echo '<meta property="og:image:height" content="' . esc_attr($featured_image['height']) . '">' . "\n";
        echo '<meta property="og:image:type" content="' . esc_attr($featured_image['type']) . '">' . "\n";
    }
    
    // Twitter Card meta tags
    echo "\n<!-- Twitter Card Meta Tags -->\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($page_title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($page_description) . '">' . "\n";
    
    if ($featured_image) {
        echo '<meta name="twitter:image" content="' . esc_url($featured_image['url']) . '">' . "\n";
    }
    
    // Article-specific meta tags
    if (is_single() && $post) {
        echo '<meta property="article:published_time" content="' . esc_attr(get_the_date('c')) . '">' . "\n";
        echo '<meta property="article:modified_time" content="' . esc_attr(get_the_modified_date('c')) . '">' . "\n";
        
        $categories = get_the_category();
        if ($categories) {
            foreach ($categories as $category) {
                echo '<meta property="article:section" content="' . esc_attr($category->name) . '">' . "\n";
            }
        }
        
        $tags = get_the_tags();
        if ($tags) {
            foreach ($tags as $tag) {
                echo '<meta property="article:tag" content="' . esc_attr($tag->name) . '">' . "\n";
            }
        }
    }
    
    // Add JSON-LD Schema markup
    faminga_add_schema_markup();
}
add_action('wp_head', 'faminga_add_seo_meta_tags', 2);

/**
 * Get SEO optimized title for current page
 */
function faminga_get_seo_title(): string {
    $current_lang = faminga_get_current_language();
    
    // Localized site titles
    $site_titles = [
        'en_US' => 'Faminga - Smart Farming Solutions | AI-Powered Agriculture Technology',
        'rw_RW' => 'Faminga - Ibisubizo by\'Ubuhinzi Bushingiye ku Bumenyi | Ikoranabuhanga ry\'Ubuhinzi',
        'fr_FR' => 'Faminga - Solutions Agricoles Intelligentes | Technologie Agricole IA',
        'sw_KE' => 'Faminga - Suluhisho za Kilimo cha Akili | Teknolojia ya Kilimo ya AI',
        'lg_UG' => 'Faminga - Enkola z\'Okulima Obukugu | Tekinologiya y\'Okulima eya AI'
    ];
    
    $site_title = $site_titles[$current_lang] ?? $site_titles['en_US'];
    
    if (is_front_page()) {
        return $site_title;
    }
    
    if (is_single() || is_page()) {
        $title = get_the_title();
        return $title ? $title . ' | ' . get_bloginfo('name') : $site_title;
    }
    
    if (is_category()) {
        return single_cat_title('', false) . ' | ' . get_bloginfo('name');
    }
    
    if (is_tag()) {
        return single_tag_title('', false) . ' | ' . get_bloginfo('name');
    }
    
    if (is_search()) {
        return 'Search Results for "' . get_search_query() . '" | ' . get_bloginfo('name');
    }
    
    if (is_404()) {
        return 'Page Not Found | ' . get_bloginfo('name');
    }
    
    return wp_get_document_title();
}

/**
 * Get SEO optimized description for current page
 */
function faminga_get_seo_description(): string {
    $current_lang = faminga_get_current_language();
    
    // Localized site descriptions
    $site_descriptions = [
        'en_US' => 'Transform your farming with Faminga\'s AI-powered solutions. Get real-time insights, disease detection, weather forecasting, and expert advice. Boost productivity for small-scale farmers, cooperatives, and commercial farms.',
        'rw_RW' => 'Guhindura ubuhinzi bwawe hamwe n\'ibisubizo bya Faminga bikoresha ubwenge bw\'ikoranabuhanga. Bone amakuru y\'igihe nyacyo, kugaragaza indwara, guhanura ikirere, n\'inama z\'impuguke.',
        'fr_FR' => 'Transformez votre agriculture avec les solutions IA de Faminga. Obtenez des insights en temps réel, détection des maladies, prévisions météo et conseils d\'experts.',
        'sw_KE' => 'Badilisha kilimo chako na suluhisho za AI za Faminga. Pata maarifa ya wakati halisi, utambuzi wa magonjwa, utabiri wa hali ya hewa, na ushauri wa wataalamu.',
        'lg_UG' => 'Kyusa okulima kwo n\'enkola za AI eza Faminga. Funa obumanyirivu obw\'ekiseera ekituufu, okuzuula endwadde, n\'okulagula embeera y\'obudde.'
    ];
    
    if (is_front_page()) {
        return $site_descriptions[$current_lang] ?? $site_descriptions['en_US'];
    }
    
    if (is_single() || is_page()) {
        global $post;
        if ($post && !empty($post->post_excerpt)) {
            return wp_trim_words($post->post_excerpt, 25);
        }
        if ($post && !empty($post->post_content)) {
            $content = strip_tags($post->post_content);
            return wp_trim_words($content, 25);
        }
    }
    
    return $site_descriptions[$current_lang] ?? $site_descriptions['en_US'];
}

/**
 * Get SEO keywords for current page
 */
function faminga_get_seo_keywords(): string {
    $current_lang = faminga_get_current_language();
    
    $base_keywords = [
        'en_US' => 'smart farming, AI agriculture, crop monitoring, disease detection, weather forecasting, farm management, IoT agriculture, precision farming, agricultural technology',
        'rw_RW' => 'ubuhinzi bushingiye ku bumenyi, ubuhinzi bwa AI, gukurikirana ibimera, kugaragaza indwara, guhanura ikirere, gucunga ubusitani',
        'fr_FR' => 'agriculture intelligente, agriculture IA, surveillance des cultures, détection des maladies, prévisions météo, gestion agricole',
        'sw_KE' => 'kilimo cha akili, kilimo cha AI, ufuatiliaji wa mazao, utambuzi wa magonjwa, utabiri wa hali ya hewa, usimamizi wa kilimo',
        'lg_UG' => 'okulima obukugu, okulima kwa AI, okukuuma ebirime, okuzuula endwadde, okulagula embeera y\'obudde'
    ];
    
    $keywords = $base_keywords[$current_lang] ?? $base_keywords['en_US'];
    
    if (is_single() || is_page()) {
        $tags = get_the_tags();
        if ($tags) {
            $tag_names = array_map(function($tag) { return $tag->name; }, $tags);
            $keywords = implode(', ', $tag_names) . ', ' . $keywords;
        }
    }
    
    return $keywords;
}

/**
 * Get featured image data for SEO
 */
function faminga_get_featured_image_for_seo(): ?array {
    $image_url = '';
    $image_width = 1200;
    $image_height = 630;
    $image_type = 'image/png';
    
    if (is_single() || is_page()) {
        $featured_id = get_post_thumbnail_id();
        if ($featured_id) {
            $image_data = wp_get_attachment_image_src($featured_id, 'full');
            if ($image_data) {
                $image_url = $image_data[0];
                $image_width = $image_data[1];
                $image_height = $image_data[2];
                $image_type = get_post_mime_type($featured_id) ?: 'image/jpeg';
            }
        }
    }
    
    // Fallback to default OG image
    if (!$image_url) {
        $image_url = get_template_directory_uri() . '/assets/images/faminga-og-image.png';
    }
    
    return [
        'url' => $image_url,
        'width' => $image_width,
        'height' => $image_height,
        'type' => $image_type
    ];
}

/**
 * Add JSON-LD Schema.org markup
 */
function faminga_add_schema_markup() {
    echo "\n<!-- Schema.org JSON-LD Markup -->\n";
    
    // Organization Schema
    $org_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Faminga',
        'url' => home_url(),
        'logo' => get_template_directory_uri() . '/assets/images/faminga-logo.png',
        'description' => 'Smart farming solutions powered by AI technology for sustainable agriculture',
        'sameAs' => [
            // Add social media URLs when available
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+250-XXX-XXXX', // Update with actual phone
            'contactType' => 'customer service',
            'availableLanguage' => ['English', 'Kinyarwanda', 'French', 'Swahili', 'Luganda']
        ]
    ];
    
    if (is_front_page()) {
        // Website Schema for homepage
        $website_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Faminga',
            'url' => home_url(),
            'description' => faminga_get_seo_description(),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => home_url('/?s={search_term_string}'),
                'query-input' => 'required name=search_term_string'
            ]
        ];
        
        echo '<script type="application/ld+json">' . wp_json_encode($website_schema) . '</script>' . "\n";
        
        // Service Schema for farming solutions
        $service_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Smart Farming Solutions',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Faminga'
            ],
            'description' => 'AI-powered farming solutions including crop monitoring, disease detection, and weather forecasting',
            'serviceType' => 'Agricultural Technology',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Rwanda'
            ]
        ];
        
        echo '<script type="application/ld+json">' . wp_json_encode($service_schema) . '</script>' . "\n";
    }
    
    if (is_single()) {
        // Article Schema for blog posts
        global $post;
        if ($post) {
            $article_schema = [
                '@context' => 'https://schema.org',
                '@type' => 'Article',
                'headline' => get_the_title(),
                'description' => faminga_get_seo_description(),
                'author' => [
                    '@type' => 'Person',
                    'name' => get_the_author()
                ],
                'publisher' => $org_schema,
                'datePublished' => get_the_date('c'),
                'dateModified' => get_the_modified_date('c'),
                'mainEntityOfPage' => get_permalink(),
                'image' => faminga_get_featured_image_for_seo()['url']
            ];
            
            echo '<script type="application/ld+json">' . wp_json_encode($article_schema) . '</script>' . "\n";
        }
    }
    
    // Always include Organization schema
    echo '<script type="application/ld+json">' . wp_json_encode($org_schema) . '</script>' . "\n";
}

/**
 * Add structured data for FAQ sections
 */
function faminga_add_faq_schema($faqs) {
    if (empty($faqs) || !is_array($faqs)) {
        return;
    }
    
    $faq_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => []
    ];
    
    foreach ($faqs as $faq) {
        $faq_schema['mainEntity'][] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer']
            ]
        ];
    }
    
    echo '<script type="application/ld+json">' . wp_json_encode($faq_schema) . '</script>' . "\n";
} 