<?php
/**
 * Fix Permalinks Structure
 *
 * This file will update the permalink structure to remove index.php from URLs.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Include admin functions
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

// Current permalink structure
$current_structure = get_option('permalink_structure');
echo "Current permalink structure: " . ($current_structure ? $current_structure : "(Default)") . "<br>";

// Check if the .htaccess file is writable
$htaccess_file = ABSPATH . '.htaccess';
$has_writable_htaccess = is_writable($htaccess_file) || (!file_exists($htaccess_file) && is_writable(ABSPATH));

if (!$has_writable_htaccess) {
    echo "<strong>Warning:</strong> .htaccess file is not writable. You may need to manually update it.<br>";
}

// Update permalink structure to "/%postname%/"
update_option('permalink_structure', '/%postname%/');
echo "Permalink structure has been updated to: /%postname%/<br>";

// Flush the rewrite rules
flush_rewrite_rules();
echo "Rewrite rules have been flushed.<br>";

// Verify the page exists
global $wpdb;
$page = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_name = %s AND post_type = 'page'", 'demo-request'));

if ($page) {
    echo "The 'Demo Request' page exists with ID: " . $page->ID . "<br>";
    echo "Direct link to the page: <a href='" . get_permalink($page->ID) . "'>" . get_permalink($page->ID) . "</a><br>";
    
    // Check template assignment
    $template = get_post_meta($page->ID, '_wp_page_template', true);
    echo "Page template: " . ($template ? $template : "Default Template") . "<br>";
    
    // Update template if necessary
    if ($template !== 'template-demo-request.php') {
        update_post_meta($page->ID, '_wp_page_template', 'template-demo-request.php');
        echo "Page template has been updated to 'template-demo-request.php'<br>";
    }
} else {
    echo "<strong>Error:</strong> The 'Demo Request' page does not exist. Creating it now...<br>";
    
    // Create the page
    $page_id = wp_insert_post([
        'post_title'    => 'Demo Request',
        'post_name'     => 'demo-request',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_content'  => '',
    ]);
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', 'template-demo-request.php');
        echo "Demo Request page created with ID: " . $page_id . "<br>";
        echo "Direct link to the page: <a href='" . get_permalink($page_id) . "'>" . get_permalink($page_id) . "</a><br>";
    } else {
        echo "<strong>Error creating page:</strong> " . (is_wp_error($page_id) ? $page_id->get_error_message() : "Unknown error") . "<br>";
    }
}

// Create .htaccess content
$site_url = site_url();
$parsed_url = parse_url($site_url);
$base_path = isset($parsed_url['path']) ? $parsed_url['path'] : '/';

$htaccess_content = <<<EOD
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase $base_path
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . {$base_path}index.php [L]
</IfModule>
# END WordPress
EOD;

// Display the necessary .htaccess content
echo "<hr><h3>HTACCESS Information</h3>";
echo "If your site is still showing 404 errors or requiring index.php in URLs, you need to update your .htaccess file.<br><br>";
echo "For Apache servers, ensure your .htaccess contains these rules:<br>";
echo "<pre>" . htmlspecialchars($htaccess_content) . "</pre>";

// Try to write the .htaccess file if it's writable
if ($has_writable_htaccess) {
    if (file_exists($htaccess_file)) {
        // Backup the existing .htaccess file
        $backup_file = $htaccess_file . '.backup-' . date('Y-m-d-H-i-s');
        if (copy($htaccess_file, $backup_file)) {
            echo "Backup of existing .htaccess created at: " . $backup_file . "<br>";
        }
    }
    
    // Write the new .htaccess file
    if (file_put_contents($htaccess_file, $htaccess_content) !== false) {
        echo "<strong>Success:</strong> .htaccess file has been updated.<br>";
    } else {
        echo "<strong>Error:</strong> Failed to write to .htaccess file.<br>";
    }
}

echo "<br><a href='" . admin_url('options-permalink.php') . "' class='button'>Check Permalink Settings in Admin</a>";
echo "&nbsp;<a href='" . home_url('/demo-request/') . "' class='button'>Try Demo Request Page Again</a>"; 