<?php
/**
 * Create Demo Request Page
 *
 * This file should be loaded directly to create the Demo Request page.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

// Check if the page already exists
$page_title = 'Demo Request';
$page_slug = 'demo-request';
$existing_page = get_page_by_path($page_slug);

if ($existing_page) {
    echo "Demo Request page already exists with ID: " . $existing_page->ID;
    echo "<br>Updating template...";
    
    // Update the page template
    update_post_meta($existing_page->ID, '_wp_page_template', 'template-demo-request.php');
    
    echo "<br>Template updated!";
    echo "<br><a href='" . get_permalink($existing_page->ID) . "'>View the page</a>";
} else {
    // Create the page
    $page_id = wp_insert_post([
        'post_title'    => $page_title,
        'post_name'     => $page_slug,
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
    ]);

    if ($page_id && !is_wp_error($page_id)) {
        // Set the page template
        update_post_meta($page_id, '_wp_page_template', 'template-demo-request.php');
        
        echo "Demo Request page created successfully with ID: " . $page_id;
        echo "<br><a href='" . get_permalink($page_id) . "'>View the page</a>";
    } else {
        echo "Error creating Demo Request page: ";
        if (is_wp_error($page_id)) {
            echo $page_id->get_error_message();
        } else {
            echo "Unknown error";
        }
    }
} 