<?php
/**
 * Direct Fix for Permalinks and Demo Request Page
 * 
 * This script uses direct SQL queries to avoid relying on WordPress functions.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

// 1. Update permalink structure directly in the database
global $wpdb;

// Update the permalink structure
$wpdb->update(
    $wpdb->options,
    ['option_value' => '/%postname%/'],
    ['option_name' => 'permalink_structure']
);

echo "Permalink structure updated to /%postname%/<br>";

// 2. Check if the Demo Request page exists
$page = $wpdb->get_row($wpdb->prepare(
    "SELECT * FROM $wpdb->posts WHERE post_name = %s AND post_type = 'page'",
    'demo-request'
));

if (!$page) {
    // Create the Demo Request page
    $wpdb->insert(
        $wpdb->posts,
        [
            'post_author'    => 1,
            'post_date'      => current_time('mysql'),
            'post_date_gmt'  => current_time('mysql', 1),
            'post_content'   => '',
            'post_title'     => 'Demo Request',
            'post_excerpt'   => '',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_name'      => 'demo-request',
            'post_modified'  => current_time('mysql'),
            'post_modified_gmt' => current_time('mysql', 1),
            'post_type'      => 'page',
            'guid'           => home_url('/demo-request/')
        ]
    );
    
    $page_id = $wpdb->insert_id;
    
    if ($page_id) {
        // Set the page template
        $wpdb->insert(
            $wpdb->postmeta,
            [
                'post_id'    => $page_id,
                'meta_key'   => '_wp_page_template',
                'meta_value' => 'template-demo-request.php'
            ]
        );
        
        echo "Demo Request page created with ID: $page_id<br>";
    } else {
        echo "Failed to create Demo Request page<br>";
    }
} else {
    echo "Demo Request page already exists with ID: {$page->ID}<br>";
    
    // Check if the page template is set correctly
    $template = $wpdb->get_var($wpdb->prepare(
        "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = '_wp_page_template'",
        $page->ID
    ));
    
    if ($template !== 'template-demo-request.php') {
        // Update or insert the template
        if ($wpdb->get_var($wpdb->prepare(
            "SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = '_wp_page_template'",
            $page->ID
        ))) {
            $wpdb->update(
                $wpdb->postmeta,
                ['meta_value' => 'template-demo-request.php'],
                ['post_id' => $page->ID, 'meta_key' => '_wp_page_template']
            );
        } else {
            $wpdb->insert(
                $wpdb->postmeta,
                [
                    'post_id'    => $page->ID,
                    'meta_key'   => '_wp_page_template',
                    'meta_value' => 'template-demo-request.php'
                ]
            );
        }
        
        echo "Page template has been updated to 'template-demo-request.php'<br>";
    } else {
        echo "Page template is already set correctly<br>";
    }
}

// 3. Create .htaccess file
$wordpress_root = dirname(dirname(dirname(__DIR__)));
$htaccess_file = $wordpress_root . '/.htaccess';

// Create the .htaccess content
$htaccess_content = <<<EOD
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /mywordpress/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /mywordpress/index.php [L]
</IfModule>
# END WordPress
EOD;

// Write the .htaccess file
if (is_writable($wordpress_root) || (file_exists($htaccess_file) && is_writable($htaccess_file))) {
    // Backup the existing .htaccess file if it exists
    if (file_exists($htaccess_file)) {
        $backup_file = $htaccess_file . '.backup.' . date('Y-m-d-H-i-s');
        copy($htaccess_file, $backup_file);
        echo "Existing .htaccess backed up to $backup_file<br>";
    }
    
    // Write the new .htaccess file
    file_put_contents($htaccess_file, $htaccess_content);
    echo ".htaccess file created/updated<br>";
} else {
    echo "Cannot write to .htaccess file. Please create it manually with the following content:<br>";
    echo "<pre>" . htmlspecialchars($htaccess_content) . "</pre>";
}

// 4. Create the demo_requests table if it doesn't exist
$table_name = $wpdb->prefix . 'demo_requests';
$table_check = $wpdb->get_var("SHOW TABLES LIKE '$table_name'");

if ($table_check !== $table_name) {
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        org_name varchar(255) NOT NULL,
        org_type varchar(255) NOT NULL,
        employee_count varchar(50) DEFAULT '' NOT NULL,
        contact_name varchar(255) NOT NULL,
        contact_email varchar(255) NOT NULL,
        contact_phone varchar(50) DEFAULT '' NOT NULL,
        country varchar(100) NOT NULL,
        primary_interest varchar(255) NOT NULL,
        usage_scale varchar(100) DEFAULT '' NOT NULL,
        message text NOT NULL,
        newsletter tinyint(1) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    
    // Use WordPress's dbDelta function if available
    if (function_exists('dbDelta')) {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    } else {
        // Fallback to direct query execution
        $wpdb->query($sql);
    }
    
    echo "Created the demo_requests table<br>";
} else {
    echo "The demo_requests table already exists<br>";
}

// Flush the rewrite rules cache
delete_option('rewrite_rules');
echo "Rewrite rules cache flushed<br>";

echo "<hr>";
echo "<h2>All fixes have been applied.</h2>";
echo "The demo request page should now be accessible at: <a href='" . home_url('/demo-request/') . "'>" . home_url('/demo-request/') . "</a><br><br>";

echo "If you're still having issues, try these steps:<br>";
echo "1. Go to WordPress Admin → Settings → Permalinks<br>";
echo "2. Select 'Post name' option<br>";
echo "3. Click 'Save Changes'<br>";
echo "4. Check that Apache mod_rewrite is enabled in your XAMPP configuration<br>";

echo "<hr>";
echo "<a href='" . admin_url('options-permalink.php') . "' class='button'>Go to Permalink Settings</a>&nbsp;";
echo "<a href='" . home_url('/demo-request/') . "' class='button'>Go to Demo Request Page</a>"; 