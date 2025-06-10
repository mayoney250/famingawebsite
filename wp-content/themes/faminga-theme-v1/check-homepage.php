<?php
// Bootstrap WordPress
define('WP_USE_THEMES', false);
require_once('../../wp-load.php');

// Get homepage settings
$show_on_front = get_option('show_on_front');
$page_on_front = get_option('page_on_front');

// If a static page is set as the homepage
if ($show_on_front === 'page' && $page_on_front) {
    $front_page = get_post($page_on_front);
    echo "Homepage is set to a static page: " . $front_page->post_title . " (ID: " . $front_page->ID . ")\n";
} else {
    echo "Homepage is set to show latest posts\n";
}

// Additional check for theme's front-page.php
if (file_exists(get_template_directory() . '/front-page.php')) {
    echo "Theme has a front-page.php template which will be used regardless of WordPress settings\n";
} 