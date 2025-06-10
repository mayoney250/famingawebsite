<?php
/**
 * Create Demo Requests Table
 *
 * This file should be loaded directly to create the demo_requests database table.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

global $wpdb;
$table_name = $wpdb->prefix . 'demo_requests';
$charset_collate = $wpdb->get_charset_collate();

// Check if the table already exists
$table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;

if ($table_exists) {
    echo "Table '$table_name' already exists!";
} else {
    // Create the table
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

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $result = dbDelta($sql);

    echo "Table creation result: <pre>";
    print_r($result);
    echo "</pre>";
    
    // Verify if the table was created
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;
    
    if ($table_exists) {
        echo "<br>Table '$table_name' has been created successfully!";
    } else {
        echo "<br>Failed to create table '$table_name'!";
    }
} 