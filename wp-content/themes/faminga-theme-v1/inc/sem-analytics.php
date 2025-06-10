<?php
declare(strict_types=1);

/**
 * SEM & Analytics Integration - GTM, GA4, Facebook Pixel
 * 
 * @package Faminga_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Google Tag Manager Integration
 */
function faminga_add_gtm_head() {
    $gtm_id = get_option('faminga_gtm_id', '');
    
    if (!empty($gtm_id) && !is_admin()) {
        echo "\n<!-- Google Tag Manager -->\n";
        echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':\n";
        echo "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],\n";
        echo "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=\n";
        echo "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);\n";
        echo "})(window,document,'script','dataLayer','" . esc_js($gtm_id) . "');</script>\n";
        echo "<!-- End Google Tag Manager -->\n";
    }
}
add_action('wp_head', 'faminga_add_gtm_head', 1);

/**
 * Google Tag Manager Body Script
 */
function faminga_add_gtm_body() {
    $gtm_id = get_option('faminga_gtm_id', '');
    
    if (!empty($gtm_id) && !is_admin()) {
        echo "\n<!-- Google Tag Manager (noscript) -->\n";
        echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . esc_attr($gtm_id) . '"' . "\n";
        echo 'height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>' . "\n";
        echo "<!-- End Google Tag Manager (noscript) -->\n";
    }
}
add_action('wp_body_open', 'faminga_add_gtm_body');

/**
 * Enhanced Data Layer for GTM
 */
function faminga_init_data_layer() {
    if (!is_admin()) {
        echo "\n<!-- DataLayer Initialization -->\n";
        echo "<script>\n";
        echo "window.dataLayer = window.dataLayer || [];\n";
        
        // Add page information to data layer
        $page_data = [
            'page_type' => faminga_get_page_type(),
            'page_title' => get_the_title() ?: get_bloginfo('name'),
            'page_language' => faminga_get_current_language(),
            'user_type' => is_user_logged_in() ? 'logged_in' : 'guest',
            'site_name' => get_bloginfo('name')
        ];
        
        if (is_single()) {
            global $post;
            $page_data['post_id'] = $post->ID;
            $page_data['post_date'] = get_the_date('Y-m-d');
            $page_data['post_author'] = get_the_author();
            
            $categories = get_the_category();
            if ($categories) {
                $page_data['post_category'] = $categories[0]->name;
            }
        }
        
        echo "dataLayer.push(" . wp_json_encode($page_data) . ");\n";
        echo "</script>\n";
        echo "<!-- End DataLayer Initialization -->\n";
    }
}
add_action('wp_head', 'faminga_init_data_layer', 0);

/**
 * Get page type for analytics
 */
function faminga_get_page_type(): string {
    if (is_front_page()) return 'homepage';
    if (is_page()) return 'page';
    if (is_single()) return 'blog_post';
    if (is_category()) return 'category';
    if (is_tag()) return 'tag';
    if (is_search()) return 'search';
    if (is_404()) return '404';
    if (is_archive()) return 'archive';
    return 'other';
}

/**
 * Track CTA button clicks
 */
function faminga_add_cta_tracking_script() {
    if (!is_admin()) {
        echo "\n<script>\n";
        echo "// CTA Click Tracking\n";
        echo "document.addEventListener('DOMContentLoaded', function() {\n";
        echo "  // Track Get Started buttons\n";
        echo "  var getStartedButtons = document.querySelectorAll('a[href*=\"demo-request\"], .btn-get-started, .cta-primary');\n";
        echo "  getStartedButtons.forEach(function(button) {\n";
        echo "    button.addEventListener('click', function() {\n";
        echo "      dataLayer.push({\n";
        echo "        'event': 'cta_click',\n";
        echo "        'cta_type': 'get_started',\n";
        echo "        'button_text': this.textContent.trim(),\n";
        echo "        'button_location': this.href\n";
        echo "      });\n";
        echo "    });\n";
        echo "  });\n";
        echo "});\n";
        echo "</script>\n";
    }
}
add_action('wp_footer', 'faminga_add_cta_tracking_script');

/**
 * Add admin settings page for analytics IDs
 */
function faminga_add_analytics_admin_page() {
    add_options_page(
        'Faminga Analytics Settings',
        'Analytics Settings',
        'manage_options',
        'faminga-analytics',
        'faminga_analytics_admin_page'
    );
}
add_action('admin_menu', 'faminga_add_analytics_admin_page');

/**
 * Analytics admin page content
 */
function faminga_analytics_admin_page() {
    if (isset($_POST['save_analytics'])) {
        update_option('faminga_gtm_id', sanitize_text_field($_POST['gtm_id']));
        update_option('faminga_ga4_id', sanitize_text_field($_POST['ga4_id']));
        update_option('faminga_fb_pixel_id', sanitize_text_field($_POST['fb_pixel_id']));
        echo '<div class="notice notice-success"><p>Analytics settings saved!</p></div>';
    }
    
    $gtm_id = get_option('faminga_gtm_id', '');
    $ga4_id = get_option('faminga_ga4_id', '');
    $fb_pixel_id = get_option('faminga_fb_pixel_id', '');
    
    ?>
    <div class="wrap">
        <h1>Faminga Analytics Settings</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th scope="row">Google Tag Manager ID</th>
                    <td>
                        <input type="text" name="gtm_id" value="<?php echo esc_attr($gtm_id); ?>" placeholder="GTM-XXXXXXX" />
                        <p class="description">Enter your Google Tag Manager container ID (e.g., GTM-XXXXXXX)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Google Analytics 4 ID</th>
                    <td>
                        <input type="text" name="ga4_id" value="<?php echo esc_attr($ga4_id); ?>" placeholder="G-XXXXXXXXXX" />
                        <p class="description">Enter your GA4 Measurement ID (e.g., G-XXXXXXXXXX). Only used if GTM is not configured.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Facebook Pixel ID</th>
                    <td>
                        <input type="text" name="fb_pixel_id" value="<?php echo esc_attr($fb_pixel_id); ?>" placeholder="123456789012345" />
                        <p class="description">Enter your Facebook Pixel ID (15-16 digit number)</p>
                    </td>
                </tr>
            </table>
            <?php submit_button('Save Analytics Settings', 'primary', 'save_analytics'); ?>
        </form>
        
        <h2>Testing & Verification</h2>
        <div class="card">
            <h3>Current Status</h3>
            <ul>
                <li><strong>GTM:</strong> <?php echo $gtm_id ? '✅ Configured' : '❌ Not configured'; ?></li>
                <li><strong>GA4:</strong> <?php echo $ga4_id ? '✅ Configured' : '❌ Not configured'; ?></li>
                <li><strong>Facebook:</strong> <?php echo $fb_pixel_id ? '✅ Configured' : '❌ Not configured'; ?></li>
            </ul>
            
            <h3>Verification Links</h3>
            <ul>
                <li><a href="https://tagassistant.google.com/" target="_blank">Google Tag Assistant</a></li>
                <li><a href="https://www.facebook.com/business/help/952192354843755" target="_blank">Facebook Pixel Helper</a></li>
                <li><a href="<?php echo home_url('/?sitemap=xml'); ?>" target="_blank">XML Sitemap</a></li>
                <li><a href="<?php echo home_url('/?robots=txt'); ?>" target="_blank">Robots.txt</a></li>
            </ul>
        </div>
    </div>
    <?php
}
