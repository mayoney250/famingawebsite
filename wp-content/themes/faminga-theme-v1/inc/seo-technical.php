<?php
declare(strict_types=1);

/**
 * Technical SEO Features - XML Sitemap, Robots.txt, Performance
 * 
 * @package Faminga_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Generate dynamic XML Sitemap
 */
function faminga_generate_xml_sitemap() {
    // Check if user is requesting sitemap
    if (isset($_GET['sitemap']) && $_GET['sitemap'] === 'xml') {
        header('Content-Type: application/xml; charset=utf-8');
        echo faminga_create_sitemap_xml();
        exit;
    }
}
add_action('init', 'faminga_generate_xml_sitemap');

/**
 * Create XML sitemap content
 */
function faminga_create_sitemap_xml(): string {
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
    
    // Homepage
    $sitemap .= faminga_add_sitemap_url(home_url('/'), date('c'), 'daily', '1.0');
    
    // Pages
    $pages = get_pages(['post_status' => 'publish']);
    foreach ($pages as $page) {
        $priority = $page->post_parent ? '0.6' : '0.8';
        $sitemap .= faminga_add_sitemap_url(
            get_permalink($page),
            get_the_modified_date('c', $page),
            'weekly',
            $priority,
            $page->ID
        );
    }
    
    // Posts
    $posts = get_posts(['numberposts' => 1000, 'post_status' => 'publish']);
    foreach ($posts as $post) {
        $sitemap .= faminga_add_sitemap_url(
            get_permalink($post),
            get_the_modified_date('c', $post),
            'monthly',
            '0.7',
            $post->ID
        );
    }
    
    // Categories
    $categories = get_categories(['hide_empty' => true]);
    foreach ($categories as $category) {
        $sitemap .= faminga_add_sitemap_url(
            get_category_link($category),
            date('c'),
            'weekly',
            '0.5'
        );
    }
    
    // Custom post types (if any)
    $custom_posts = get_posts([
        'post_type' => 'faminga_job',
        'numberposts' => -1,
        'post_status' => 'publish'
    ]);
    foreach ($custom_posts as $custom_post) {
        $sitemap .= faminga_add_sitemap_url(
            get_permalink($custom_post),
            get_the_modified_date('c', $custom_post),
            'monthly',
            '0.6',
            $custom_post->ID
        );
    }
    
    $sitemap .= '</urlset>';
    return $sitemap;
}

/**
 * Add URL to sitemap with multilingual support
 */
function faminga_add_sitemap_url(string $url, string $lastmod, string $changefreq, string $priority, ?int $post_id = null): string {
    $sitemap_entry = "\t<url>\n";
    $sitemap_entry .= "\t\t<loc>" . esc_url($url) . "</loc>\n";
    $sitemap_entry .= "\t\t<lastmod>" . esc_html($lastmod) . "</lastmod>\n";
    $sitemap_entry .= "\t\t<changefreq>" . esc_html($changefreq) . "</changefreq>\n";
    $sitemap_entry .= "\t\t<priority>" . esc_html($priority) . "</priority>\n";
    
    // Add hreflang alternates for multilingual pages
    if ($post_id) {
        $languages = ['en_US', 'rw_RW', 'fr_FR', 'sw_KE', 'lg_UG'];
        foreach ($languages as $lang) {
            $lang_url = add_query_arg('lang', $lang, $url);
            $hreflang = str_replace('_', '-', $lang);
            $sitemap_entry .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"" . esc_attr($hreflang) . "\" href=\"" . esc_url($lang_url) . "\" />\n";
        }
    }
    
    $sitemap_entry .= "\t</url>\n";
    return $sitemap_entry;
}

/**
 * Generate dynamic robots.txt
 */
function faminga_generate_robots_txt() {
    if (isset($_GET['robots']) && $_GET['robots'] === 'txt') {
        header('Content-Type: text/plain; charset=utf-8');
        echo faminga_create_robots_txt();
        exit;
    }
}
add_action('init', 'faminga_generate_robots_txt');

/**
 * Create robots.txt content
 */
function faminga_create_robots_txt(): string {
    $robots = "User-agent: *\n";
    $robots .= "Disallow: /wp-admin/\n";
    $robots .= "Disallow: /wp-includes/\n";
    $robots .= "Disallow: /wp-content/plugins/\n";
    $robots .= "Disallow: /wp-content/cache/\n";
    $robots .= "Disallow: /wp-content/themes/\n";
    $robots .= "Disallow: /wp-login.php\n";
    $robots .= "Disallow: /wp-register.php\n";
    $robots .= "Disallow: /feed/\n";
    $robots .= "Disallow: /comments/feed/\n";
    $robots .= "Disallow: /?s=\n";
    $robots .= "Disallow: /search\n";
    $robots .= "Allow: /wp-content/uploads/\n";
    $robots .= "Allow: /wp-content/themes/faminga-theme-v1/assets/\n";
    $robots .= "\n";
    $robots .= "Sitemap: " . home_url('/?sitemap=xml') . "\n";
    
    return $robots;
}

/**
 * Add SEO-friendly permalink structure
 */
function faminga_setup_seo_permalinks() {
    // Set permalink structure if it's default
    $permalink_structure = get_option('permalink_structure');
    if (empty($permalink_structure)) {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules();
    }
    
    // Add custom rewrite rules for SEO URLs
    add_rewrite_rule('^sitemap\.xml$', 'index.php?sitemap=xml', 'top');
    add_rewrite_rule('^robots\.txt$', 'index.php?robots=txt', 'top');
}
add_action('init', 'faminga_setup_seo_permalinks');

/**
 * Add query vars for custom endpoints
 */
function faminga_add_query_vars($vars) {
    $vars[] = 'sitemap';
    $vars[] = 'robots';
    return $vars;
}
add_filter('query_vars', 'faminga_add_query_vars');

/**
 * Optimize images for SEO and performance
 */
function faminga_optimize_images() {
    // Add loading="lazy" to images
    add_filter('wp_get_attachment_image_attributes', 'faminga_add_lazy_loading');
    add_filter('the_content', 'faminga_add_lazy_loading_to_content');
    
    // Add proper alt text if missing
    add_filter('wp_get_attachment_image_attributes', 'faminga_ensure_alt_text', 10, 2);
}
add_action('init', 'faminga_optimize_images');

/**
 * Add lazy loading to images
 */
function faminga_add_lazy_loading($attr) {
    if (!is_admin() && !wp_doing_ajax()) {
        $attr['loading'] = 'lazy';
    }
    return $attr;
}

/**
 * Add lazy loading to content images
 */
function faminga_add_lazy_loading_to_content($content) {
    if (!is_admin() && !is_feed()) {
        $content = preg_replace('/<img([^>]*)>/i', '<img$1 loading="lazy">', $content);
    }
    return $content;
}

/**
 * Ensure images have alt text for SEO
 */
function faminga_ensure_alt_text($attr, $attachment) {
    if (empty($attr['alt'])) {
        $attr['alt'] = get_the_title($attachment->ID) ?: 'Faminga Smart Farming Image';
    }
    return $attr;
}

/**
 * Add semantic HTML structure classes
 */
function faminga_add_semantic_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'homepage';
        $classes[] = 'landing-page';
    }
    
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
        $classes[] = 'content-page';
    }
    
    if (is_single()) {
        $classes[] = 'single-post';
        $classes[] = 'article-page';
    }
    
    // Add language class
    $current_lang = faminga_get_current_language();
    $classes[] = 'lang-' . str_replace('_', '-', strtolower($current_lang));
    
    return $classes;
}
add_filter('body_class', 'faminga_add_semantic_body_classes');

/**
 * Optimize performance - Remove unnecessary WordPress features
 */
function faminga_optimize_performance() {
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Remove RSS feed links if not needed
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    
    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove REST API link
    remove_action('wp_head', 'rest_output_link_wp_head');
    
    // Remove oEmbed discovery links
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    
    // Disable emoji scripts (save HTTP requests)
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Remove Windows Live Writer manifest
    remove_action('wp_head', 'wlwmanifest_link');
    
    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
}
add_action('after_setup_theme', 'faminga_optimize_performance');

/**
 * Add preload hints for critical resources
 */
function faminga_add_resource_hints() {
    // Preload critical CSS - commented out as file doesn't exist
    // echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/css/main.css" as="style">' . "\n";
    
    // Preload critical fonts - commented out as file doesn't exist
    // echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/fonts/inter.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
    
    // Preconnect to external domains
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://flagcdn.com">' . "\n";
    
    // DNS prefetch for external resources
    echo '<link rel="dns-prefetch" href="//www.googletagmanager.com">' . "\n";
    echo '<link rel="dns-prefetch" href="//www.google-analytics.com">' . "\n";
}
add_action('wp_head', 'faminga_add_resource_hints', 1);

/**
 * Add breadcrumb schema markup
 */
function faminga_add_breadcrumb_schema() {
    if (is_front_page()) {
        return;
    }
    
    $breadcrumbs = [];
    $breadcrumbs[] = [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => home_url()
    ];
    
    $position = 2;
    
    if (is_single()) {
        $categories = get_the_category();
        if ($categories) {
            $category = $categories[0];
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => $category->name,
                'item' => get_category_link($category)
            ];
        }
        
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title(),
            'item' => get_permalink()
        ];
    } elseif (is_page()) {
        global $post;
        if ($post->post_parent) {
            $parent_id = $post->post_parent;
            $parents = [];
            while ($parent_id) {
                $parent = get_post($parent_id);
                $parents[] = $parent;
                $parent_id = $parent->post_parent;
            }
            $parents = array_reverse($parents);
            
            foreach ($parents as $parent) {
                $breadcrumbs[] = [
                    '@type' => 'ListItem',
                    'position' => $position++,
                    'name' => $parent->post_title,
                    'item' => get_permalink($parent)
                ];
            }
        }
        
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title(),
            'item' => get_permalink()
        ];
    }
    
    if (count($breadcrumbs) > 1) {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs
        ];
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'faminga_add_breadcrumb_schema');

/**
 * Add critical CSS inline for above-the-fold content
 */
function faminga_add_critical_css() {
    if (is_front_page()) {
        echo '<style id="critical-css">';
        echo 'body{font-family:Inter,sans-serif;margin:0;background:#0A1A0F;color:#fff;}';
        echo 'nav{background:#0A1A0F;padding:1rem 1.5rem;position:relative;z-index:50;}';
        echo '.hero{min-height:70vh;display:flex;align-items:center;justify-content:center;}';
        echo '.btn-primary{background:#F26B3A;color:#fff;padding:0.75rem 1.5rem;border:none;border-radius:0.5rem;}';
        echo '</style>';
    }
}
add_action('wp_head', 'faminga_add_critical_css', 3);

/**
 * Minify HTML output for better performance
 */
function faminga_minify_html($buffer) {
    if (is_admin() || wp_doing_ajax()) {
        return $buffer;
    }
    
    // Remove HTML comments (except IE conditional comments)
    $buffer = preg_replace('/<!--(?!<!)[^\[>].*?-->/s', '', $buffer);
    
    // Remove unnecessary whitespace
    $buffer = preg_replace('/\s+/', ' ', $buffer);
    $buffer = preg_replace('/>\s+</', '><', $buffer);
    
    return trim($buffer);
}

/**
 * Start HTML minification
 */
function faminga_start_html_minification() {
    if (!is_admin() && !wp_doing_ajax()) {
        ob_start('faminga_minify_html');
    }
}
add_action('init', 'faminga_start_html_minification', 1);

/**
 * End HTML minification
 */
function faminga_end_html_minification() {
    if (!is_admin() && !wp_doing_ajax()) {
        ob_end_flush();
    }
}
add_action('wp_footer', 'faminga_end_html_minification', PHP_INT_MAX); 