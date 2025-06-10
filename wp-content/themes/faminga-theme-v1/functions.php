<?php
declare(strict_types=1);

// --- START: Language Switching Logic ---

// This global variable will hold the language for the current request.
$faminga_current_language_request = null;

/**
 * Normalizes a given locale code to its correct casing.
 *
 * Compares the input code against a list of allowed locales in a case-insensitive manner
 * and returns the official, correctly-cased version if a match is found.
 *
 * @param string|null $code The locale code to normalize (e.g., 'en_us').
 * @return string|null The correctly-cased locale code (e.g., 'en_US') or null if not found.
 */
function faminga_normalize_locale_code(?string $code): ?string {
    if (empty($code)) {
        return null;
    }

    $allowed_languages = ['en_US', 'rw_RW', 'fr_FR', 'sw_KE', 'lg_UG'];
    
    // Create a map of lowercase codes to their correct-cased versions.
    // e.g., ['en_us' => 'en_US', 'rw_rw' => 'rw_RW']
    $map = array_combine(
        array_map('strtolower', $allowed_languages),
        $allowed_languages
    );

    $lowercase_code = strtolower(sanitize_text_field($code));

    return $map[$lowercase_code] ?? null;
}

/**
 * Sets the language from the URL parameter and stores it in a cookie and global variable.
 * This runs early to ensure the language is available for the entire request.
 */
function faminga_set_language_from_request() {
    global $faminga_current_language_request;

    $lang_param = isset($_GET['lang']) ? sanitize_text_field($_GET['lang']) : null;
    $normalized_lang = faminga_normalize_locale_code($lang_param);

    if ($normalized_lang) {
        // Set for the current request.
        $faminga_current_language_request = $normalized_lang;

        // Set for future requests, ensuring correct casing.
        setcookie('faminga_lang', $normalized_lang, time() + (86400 * 30), COOKIEPATH, COOKIE_DOMAIN);
    }
}
add_action('plugins_loaded', 'faminga_set_language_from_request', 1);


/**
 * Get the current language for the site.
 *
 * This function determines the language based on the following priority:
 * 1. A language set during the current request (from a ?lang=... parameter).
 * 2. A language previously set and stored in a cookie.
 * 3. The default language, which is Kinyarwanda ('rw_RW').
 *
 * @return string The locale string for the current language (e.g., 'en_US' or 'rw_RW').
 */
function faminga_get_current_language(): string {
    global $faminga_current_language_request;

    // 1. Prioritize the language set in the current request (already normalized).
    if ($faminga_current_language_request) {
        // We can trust this value because it was normalized when it was set.
        return $faminga_current_language_request;
    }

    // 2. Fall back to the language stored in the cookie.
    $cookie_value = isset($_COOKIE['faminga_lang']) ? sanitize_text_field($_COOKIE['faminga_lang']) : null;
    $normalized_cookie_lang = faminga_normalize_locale_code($cookie_value);
    if ($normalized_cookie_lang) {
        return $normalized_cookie_lang;
    }
    
    // 3. If no other language is set, use the default.
    return 'rw_RW';
}

/**
 * Filters the WordPress locale to apply the theme's language setting.
 *
 * @param string $locale The default WordPress locale.
 * @return string The filtered locale.
 */
function faminga_filter_locale(string $locale): string {
    return faminga_get_current_language();
}
add_filter('locale', 'faminga_filter_locale');

// --- END: Language Switching Logic ---


/**
 * Faminga Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Faminga_Theme
 */

if ( ! defined( 'FAMINGA_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'FAMINGA_THEME_VERSION', '1.0.0' );
}

if ( ! function_exists( 'faminga_theme_v1_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function faminga_theme_v1_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Faminga Theme, use a find and replace
		 * to change 'faminga-theme-v1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'faminga-theme-v1', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'faminga-theme-v1' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'faminga_theme_v1_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		$faminga_theme_v1_inc_dir = get_template_directory() . '/inc';
		
		// faminga - Only include files that actually exist.
		require_once $faminga_theme_v1_inc_dir . '/custom-post-types.php';
		require_once $faminga_theme_v1_inc_dir . '/enqueue.php';
		require_once $faminga_theme_v1_inc_dir . '/theme-hooks.php';
		require_once $faminga_theme_v1_inc_dir . '/ajax-handlers.php';
		require_once $faminga_theme_v1_inc_dir . '/helpers.php';
		require_once $faminga_theme_v1_inc_dir . '/job-admin.php';

		// SEO and SEM modules
		require_once $faminga_theme_v1_inc_dir . '/seo-meta.php';
		require_once $faminga_theme_v1_inc_dir . '/seo-technical.php';
		require_once $faminga_theme_v1_inc_dir . '/sem-analytics.php';
		require_once $faminga_theme_v1_inc_dir . '/content-seo.php';

		// Load custom .po file parser.
		require_once $faminga_theme_v1_inc_dir . '/translations.php';
	}
endif;
add_action( 'after_setup_theme', 'faminga_theme_v1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function faminga_theme_v1_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'faminga_theme_v1_content_width', 640 );
}
add_action( 'after_setup_theme', 'faminga_theme_v1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function faminga_theme_v1_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'faminga-theme-v1' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'faminga-theme-v1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'faminga_theme_v1_widgets_init' );

/**
 * Debug function to check translation status
 */
if (!function_exists('faminga_debug_translations')) {
    function faminga_debug_translations() {
        if (!current_user_can('manage_options') || !isset($_GET['debug_translations'])) {
            return;
        }
        
        echo '<div style="background: #000; color: #0f0; padding: 20px; margin: 20px 0; font-family: monospace; border: 2px solid #0f0;">';
        echo '<h3>Faminga Translation Debug Info</h3>';
        echo '<p><strong>Current Locale:</strong> ' . get_locale() . '</p>';
        echo '<p><strong>Language Function Result:</strong> ' . faminga_get_current_language() . '</p>';
        echo '<p><strong>Is Privacy Policy Page:</strong> ' . (is_privacy_policy() ? 'Yes' : 'No') . '</p>';
        echo '<p><strong>Current Template:</strong> ' . get_page_template_slug() . '</p>';
        echo '<p><strong>Post ID:</strong> ' . get_the_ID() . '</p>';
        
        $t = faminga_get_translated_texts();
        echo '<p><strong>Sample Translation (hero_title):</strong> ' . esc_html($t['hero_title'] ?? 'NOT FOUND') . '</p>';
        echo '<p><strong>Sample Translation (privacy_policy_title):</strong> ' . esc_html($t['privacy_policy_title'] ?? 'NOT FOUND') . '</p>';
        
        echo '<p><strong>Translation Array Keys Count:</strong> ' . count($t) . '</p>';
        echo '<p><strong>First 10 Keys:</strong> ' . implode(', ', array_slice(array_keys($t), 0, 10)) . '</p>';
        echo '</div>';
    }
    add_action('wp_head', 'faminga_debug_translations');
}

/**
 * Force privacy policy content override - this ensures our translations work
 * regardless of how the privacy policy page is configured
 */
if (!function_exists('faminga_override_privacy_policy_content')) {
    function faminga_override_privacy_policy_content($content) {
        // Only override on privacy policy pages
        if (!is_page() || !is_main_query() || is_admin()) {
            return $content;
        }
        
        global $post;
        
        // Check if this is a privacy policy page by various methods
        $is_privacy_page = false;
        
        // Method 1: Check if this is the designated privacy policy page
        $privacy_page_id = get_option('wp_page_for_privacy_policy');
        if ($privacy_page_id && $post->ID == $privacy_page_id) {
            $is_privacy_page = true;
        }
        
        // Method 2: Check if page uses privacy policy template
        $template = get_page_template_slug($post->ID);
        if ($template === 'template-privacy-policy.php') {
            $is_privacy_page = true;
        }
        
        // Method 3: Check page slug/title for privacy policy keywords
        $page_slug = $post->post_name;
        $page_title = strtolower($post->post_title);
        if (strpos($page_slug, 'privacy') !== false || 
            strpos($page_title, 'privacy') !== false ||
            strpos($page_slug, 'politiki') !== false ||
            strpos($page_title, 'politiki') !== false) {
            $is_privacy_page = true;
        }
        
        // If this is a privacy policy page, return empty content so template takes over
        if ($is_privacy_page) {
            // Remove WordPress's default privacy policy content
            return '';
        }
        
        return $content;
    }
    add_filter('the_content', 'faminga_override_privacy_policy_content', 1);
}

/**
 * Ensure privacy policy pages use our template hierarchy
 */
if (!function_exists('faminga_privacy_policy_template')) {
    function faminga_privacy_policy_template($template) {
        if (is_page()) {
            global $post;
            
            // Check if this is privacy policy page
            $privacy_page_id = get_option('wp_page_for_privacy_policy');
            if ($privacy_page_id && $post->ID == $privacy_page_id) {
                // Look for privacy-policy.php first, then template-privacy-policy.php
                $theme_template = locate_template(['privacy-policy.php', 'template-privacy-policy.php']);
                if ($theme_template) {
                    return $theme_template;
                }
            }
            
            // Check by slug/title
            $page_slug = $post->post_name;
            $page_title = strtolower($post->post_title);
            if (strpos($page_slug, 'privacy') !== false || 
                strpos($page_title, 'privacy') !== false ||
                strpos($page_slug, 'politiki') !== false ||
                strpos($page_title, 'politiki') !== false) {
                $theme_template = locate_template(['privacy-policy.php', 'template-privacy-policy.php']);
                if ($theme_template) {
                    return $theme_template;
                }
            }
        }
        
        return $template;
    }
    add_filter('template_include', 'faminga_privacy_policy_template', 99);
}

/**
 * Remove autop from privacy policy content to prevent formatting issues
 */
if (!function_exists('faminga_remove_autop_privacy')) {
    function faminga_remove_autop_privacy() {
        if (is_page()) {
            global $post;
            
            // Check various ways to identify privacy policy page
            $privacy_page_id = get_option('wp_page_for_privacy_policy');
            $template = get_page_template_slug($post->ID);
            $page_slug = $post->post_name;
            $page_title = strtolower($post->post_title);
            
            $is_privacy_page = (
                ($privacy_page_id && $post->ID == $privacy_page_id) ||
                ($template === 'template-privacy-policy.php') ||
                (strpos($page_slug, 'privacy') !== false) ||
                (strpos($page_title, 'privacy') !== false) ||
                (strpos($page_slug, 'politiki') !== false) ||
                (strpos($page_title, 'politiki') !== false)
            );
            
            if ($is_privacy_page) {
                remove_filter('the_content', 'wpautop');
                remove_filter('the_content', 'wptexturize');
            }
        }
    }
    add_action('wp_head', 'faminga_remove_autop_privacy');
}

/**
 * Force load our translations even if WordPress textdomain loading fails
 */
if (!function_exists('faminga_force_translation_loading')) {
    function faminga_force_translation_loading() {
        // Only run on frontend
        if (is_admin()) {
            return;
        }
        
        $locale = get_locale();
        if (strpos($locale, 'rw') === 0) {
            // Manually load Kinyarwanda translations
            faminga_manual_load_po_translations();
            
            // Also inject our extra translations into the global space
            global $l10n;
            if (!isset($l10n['faminga-theme-v1'])) {
                $l10n['faminga-theme-v1'] = new MO();
            }
            
            // Add extra translations
            if (isset($GLOBALS['faminga_extra_en_to_rw'])) {
                foreach ($GLOBALS['faminga_extra_en_to_rw'] as $original => $translation) {
                    if ($original !== '') {
                        $entry = new Translation_Entry([
                            'singular' => $original,
                            'translations' => [$translation]
                        ]);
                        $l10n['faminga-theme-v1']->add_entry($entry);
                    }
                }
            }
        }
    }
    add_action('wp', 'faminga_force_translation_loading', 5);
}

/**
 * Add cache busting for templates when language changes
 */
if (!function_exists('faminga_bust_template_cache')) {
    function faminga_bust_template_cache() {
        if (isset($_GET['lang']) || isset($_COOKIE['faminga_language'])) {
            // Clear any page caching when language changes
            if (function_exists('wp_cache_flush')) {
                wp_cache_flush();
            }
        }
    }
    add_action('init', 'faminga_bust_template_cache');
} 