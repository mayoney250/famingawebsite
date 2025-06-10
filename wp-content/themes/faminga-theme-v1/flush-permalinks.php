<?php
/**
 * Flush Permalinks
 *
 * This file should be loaded directly to flush the WordPress permalinks.
 */

// Load WordPress
require_once '../../../wp-load.php';

// Check if the user is logged in as admin
if (!current_user_can('administrator')) {
    die('You must be an administrator to run this script.');
}

// Flush the permalinks
flush_rewrite_rules();

echo "Permalinks have been flushed successfully!";
echo "<br><a href='" . admin_url('options-permalink.php') . "'>Check Permalink Settings</a>";
echo "<br><a href='" . home_url('/demo-request/') . "'>Go to Demo Request Page</a>"; 