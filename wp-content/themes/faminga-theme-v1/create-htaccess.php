<?php
/**
 * Create .htaccess File
 *
 * This file will create or update the .htaccess file to enable pretty permalinks.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

// WordPress installation directory
$wordpress_path = dirname(dirname(dirname(__DIR__)));
$site_url = site_url();
$parsed_url = parse_url($site_url);
$base_path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
if (empty($base_path)) {
    $base_path = '/';
}

// .htaccess content
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

// Path to .htaccess file
$htaccess_file = $wordpress_path . '/.htaccess';

// Check if .htaccess exists and is writable
if (file_exists($htaccess_file)) {
    if (!is_writable($htaccess_file)) {
        echo "<strong>Error:</strong> The .htaccess file exists but is not writable. Please check file permissions.<br>";
        echo "Path: " . $htaccess_file . "<br>";
        echo "You can manually create/update the .htaccess file with this content:<br>";
        echo "<pre>" . htmlspecialchars($htaccess_content) . "</pre>";
        exit;
    }
    
    // Backup the existing .htaccess file
    $backup_file = $htaccess_file . '.backup-' . date('Y-m-d-H-i-s');
    if (!copy($htaccess_file, $backup_file)) {
        echo "<strong>Warning:</strong> Failed to create backup of existing .htaccess file.<br>";
    } else {
        echo "Backup of existing .htaccess created at: " . $backup_file . "<br>";
    }
}

// Write the new .htaccess file
if (file_put_contents($htaccess_file, $htaccess_content) !== false) {
    echo "Successfully created/updated .htaccess file.<br>";
    echo "Content:<br><pre>" . htmlspecialchars($htaccess_content) . "</pre>";
    
    // Flush rewrite rules for good measure
    flush_rewrite_rules();
    echo "WordPress rewrite rules have been flushed.<br>";
    
    // Check permalink structure
    $permalink_structure = get_option('permalink_structure');
    if (empty($permalink_structure)) {
        update_option('permalink_structure', '/%postname%/');
        echo "Permalink structure has been set to '/%postname%/'<br>";
    } else {
        echo "Current permalink structure is: " . $permalink_structure . "<br>";
    }
    
    echo "<br>Now try accessing the demo request page without 'index.php' in the URL:<br>";
    echo "<a href='" . home_url('/demo-request/') . "'>Demo Request Page</a>";
} else {
    echo "<strong>Error:</strong> Failed to write to .htaccess file. Check file permissions.<br>";
    echo "Path: " . $htaccess_file . "<br>";
    echo "You can manually create/update the .htaccess file with this content:<br>";
    echo "<pre>" . htmlspecialchars($htaccess_content) . "</pre>";
} 