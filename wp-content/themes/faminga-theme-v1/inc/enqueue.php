<?php
declare(strict_types=1);

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function faminga_theme_v1_enqueue_assets(): void {
    // Main Stylesheet
    wp_enqueue_style( 'faminga-theme-v1-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css') );
    
    // Google Fonts
    wp_enqueue_style( 'faminga-theme-v1-fonts', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap', [], null );

    // Remix Icons
    wp_enqueue_style( 'faminga-theme-v1-remix-icons', 'https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css', [], '4.2.0' );
    
    // Font Awesome
    wp_enqueue_style( 'faminga-theme-v1-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], '6.5.1' );

    // AOS Animation Library CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');

    // TailwindCSS
    wp_enqueue_script( 'faminga-theme-v1-tailwind', 'https://cdn.tailwindcss.com', [], null, false );
    
    // ECharts for graphs
    wp_enqueue_script( 'faminga-theme-v1-echarts', 'https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js', [], '5.5.0', true );

    // AOS Animation Library JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', ['jquery'], '2.3.1', true);

    // Main JS file (for custom scripts like the chart)
    $main_js_path = get_template_directory() . '/assets/js/main.js';
    if (file_exists($main_js_path)) {
        wp_enqueue_script( 'faminga-theme-v1-scripts', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'faminga-theme-v1-echarts', 'aos-js'], filemtime($main_js_path), true );
    }

    // Navigation JS for smooth scrolling
    $nav_js_path = get_template_directory() . '/assets/js/navigation.js';
    if (file_exists($nav_js_path)) {
        wp_enqueue_script( 'faminga-theme-v1-navigation', get_template_directory_uri() . '/assets/js/navigation.js', [], filemtime($nav_js_path), true );
    }
    
    // Fixed Navigation JS for sticky header
    $fixed_nav_js_path = get_template_directory() . '/assets/js/fixed-navigation.js';
    if (file_exists($fixed_nav_js_path)) {
        wp_enqueue_script( 'faminga-theme-v1-fixed-navigation', get_template_directory_uri() . '/assets/js/fixed-navigation.js', [], filemtime($fixed_nav_js_path), true );
    }
    
    // Language Switcher CSS
    $lang_switcher_css_path = get_template_directory() . '/assets/css/language-switcher.css';
    if (file_exists($lang_switcher_css_path)) {
        wp_enqueue_style( 'faminga-theme-v1-language-switcher', get_template_directory_uri() . '/assets/css/language-switcher.css', [], filemtime($lang_switcher_css_path) );
    }
    
    // Language Switcher JS
    $lang_switcher_js_path = get_template_directory() . '/assets/js/language-switcher.js';
    if (file_exists($lang_switcher_js_path)) {
        wp_enqueue_script( 'faminga-theme-v1-language-switcher', get_template_directory_uri() . '/assets/js/language-switcher.js', [], filemtime($lang_switcher_js_path), true );
    }
    
    // Back to Top button JS
    $back_to_top_js_path = get_template_directory() . '/assets/js/back-to-top.js';
    if (file_exists($back_to_top_js_path)) {
        wp_enqueue_script( 'faminga-theme-v1-back-to-top', get_template_directory_uri() . '/assets/js/back-to-top.js', [], filemtime($back_to_top_js_path), true );
    }

    // Demo Request Form JS - this will be conditionally loaded on the demo request page
    $demo_js_path = get_template_directory() . '/assets/js/demo-form.js';
    if (file_exists($demo_js_path)) {
        wp_register_script('faminga-demo-form', get_template_directory_uri() . '/assets/js/demo-form.js', ['jquery'], filemtime($demo_js_path), true);
    }
    
    // Career Filters JS - this will be conditionally loaded on the career page
    $career_js_path = get_template_directory() . '/assets/js/career-filters.js';
    if (file_exists($career_js_path)) {
        wp_register_script('faminga-career-filters', get_template_directory_uri() . '/assets/js/career-filters.js', [], filemtime($career_js_path), true);
    }
}
add_action('wp_enqueue_scripts', 'faminga_theme_v1_enqueue_assets');

/**
 * Add the TailwindCSS config to the head.
 * This is necessary when using the CDN version.
 */
function faminga_theme_v1_add_head_scripts(): void {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#F26B3A',
                        'dark-green': '#0A1A0F',
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        'DEFAULT': '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; } /* Remix icon fix */
        
        /* Parallax Transparency Styles */
        section {
            background-color: rgba(10, 42, 15, 0.75) !important;
            backdrop-filter: blur(5px);
            position: relative;
            z-index: 1;
        }
        
        .feature-card {
            background: rgba(0, 51, 0, 0.3) !important;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(82, 103, 0, 0.3);
            box-shadow: 0 0 20px rgba(82, 103, 0, 0.1);
        }
        
        .feature-card:hover {
            background: rgba(0, 51, 0, 0.5) !important;
            border-color: rgba(82, 103, 0, 0.5);
            box-shadow: 0 0 30px rgba(82, 103, 0, 0.2);
        }
        
        .solution-card {
            background: rgba(0, 51, 0, 0.3) !important;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(82, 103, 0, 0.3);
            box-shadow: 0 0 20px rgba(82, 103, 0, 0.1);
        }
        
        .solution-card:hover {
            background: rgba(0, 51, 0, 0.5) !important;
            border-color: rgba(82, 103, 0, 0.5);
            box-shadow: 0 0 30px rgba(82, 103, 0, 0.2);
        }
        
        .hero-section {
            background: linear-gradient(90deg, rgba(0, 26, 0, 0.6) 0%, rgba(0, 26, 0, 0.4) 50%, rgba(0, 26, 0, 0.2) 100%) !important;
        }
        
        .hero-section::before {
            opacity: 0.5 !important;
        }
        
        .dashboard-preview {
            background-color: rgba(0, 0, 0, 0.4) !important;
            backdrop-filter: blur(8px);
        }
    </style>
    <?php
}
add_action('wp_head', 'faminga_theme_v1_add_head_scripts'); 