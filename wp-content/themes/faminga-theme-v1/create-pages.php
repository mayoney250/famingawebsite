<?php
/**
 * Script to create all Faminga pages with their corresponding templates
 * Run this once to create all the required pages
 * 
 * @package Faminga_Theme_V1
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

// Define all pages with their templates and content
$pages_to_create = [
    // Solutions Pages
    [
        'title' => 'Small-Scale Farmers',
        'slug' => 'small-scale-farmers',
        'template' => 'template-small-scale-farmers.php',
        'content' => 'Solutions designed specifically for small-scale farmers to increase yield and reduce costs.',
        'parent' => 0
    ],
    [
        'title' => 'Commercial Farms',
        'slug' => 'commercial-farms',
        'template' => 'template-commercial-farms.php',
        'content' => 'Enterprise-grade solutions for large-scale commercial farming operations.',
        'parent' => 0
    ],
    [
        'title' => 'Cooperatives',
        'slug' => 'cooperatives',
        'template' => 'template-cooperatives.php',
        'content' => 'Collaborative tools for farmer groups and agricultural cooperatives.',
        'parent' => 0
    ],
    [
        'title' => 'Agribusinesses',
        'slug' => 'agribusinesses',
        'template' => 'template-agribusinesses.php',
        'content' => 'Solutions for processors, exporters and value-chain businesses.',
        'parent' => 0
    ],
    [
        'title' => 'Food Security',
        'slug' => 'food-security',
        'template' => 'template-food-security.php',
        'content' => 'Community resilience building through sustainable agriculture programs.',
        'parent' => 0
    ],
    
    // Company Pages
    [
        'title' => 'About Us',
        'slug' => 'about',
        'template' => 'template-about.php',
        'content' => 'Learn about Faminga\'s mission, vision, and team.',
        'parent' => 0
    ],
    [
        'title' => 'Partners',
        'slug' => 'partners',
        'template' => 'template-partners.php',
        'content' => 'Our strategic partnerships and collaboration opportunities.',
        'parent' => 0
    ],
    [
        'title' => 'Blog',
        'slug' => 'blog',
        'template' => 'template-blog.php',
        'content' => 'Latest insights, tips, and stories from the world of smart agriculture.',
        'parent' => 0
    ],
    [
        'title' => 'Contact',
        'slug' => 'contact',
        'template' => 'template-contact.php',
        'content' => 'Get in touch with our team for support and inquiries.',
        'parent' => 0
    ],
    
    // Legal Pages
    [
        'title' => 'Terms of Service',
        'slug' => 'terms-of-service',
        'template' => 'template-terms-of-service.php',
        'content' => 'Terms and conditions for using Faminga services.',
        'parent' => 0
    ],
    [
        'title' => 'Privacy Policy',
        'slug' => 'privacy-policy',
        'template' => 'template-privacy-policy.php',
        'content' => 'How we collect, use, and protect your personal information.',
        'parent' => 0
    ],
    [
        'title' => 'Data Processing',
        'slug' => 'data-processing',
        'template' => 'template-data-processing.php',
        'content' => 'Data processing agreement and technical details.',
        'parent' => 0
    ],
    [
        'title' => 'Cookies',
        'slug' => 'cookies',
        'template' => 'template-cookies.php',
        'content' => 'Information about our use of cookies and tracking technologies.',
        'parent' => 0
    ]
];

function create_faminga_pages() {
    global $pages_to_create;
    
    $created_pages = [];
    $existing_pages = [];
    $errors = [];
    
    foreach ($pages_to_create as $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['slug']);
        
        if ($existing_page) {
            $existing_pages[] = $page_data['title'];
            
            // Update the page template if it's different
            $current_template = get_page_template_slug($existing_page->ID);
            if ($current_template !== $page_data['template']) {
                update_post_meta($existing_page->ID, '_wp_page_template', $page_data['template']);
                $created_pages[] = $page_data['title'] . ' (template updated)';
            }
            continue;
        }
        
        // Create the page
        $page_args = [
            'post_title'     => $page_data['title'],
            'post_content'   => $page_data['content'],
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_name'      => $page_data['slug'],
            'post_parent'    => $page_data['parent'],
            'post_author'    => 1, // Admin user
            'meta_input'     => [
                '_wp_page_template' => $page_data['template']
            ]
        ];
        
        $page_id = wp_insert_post($page_args);
        
        if ($page_id && !is_wp_error($page_id)) {
            $created_pages[] = $page_data['title'];
        } else {
            $error_message = is_wp_error($page_id) ? $page_id->get_error_message() : 'Unknown error';
            $errors[] = $page_data['title'] . ': ' . $error_message;
        }
    }
    
    return [
        'created' => $created_pages,
        'existing' => $existing_pages,
        'errors' => $errors
    ];
}

// Only run if accessed directly or via admin
if (isset($_GET['create_pages']) && $_GET['create_pages'] === 'true') {
    $result = create_faminga_pages();
    
    // Flush rewrite rules to ensure clean URLs work
    flush_rewrite_rules();
    
    echo '<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f5f5f5; border-radius: 8px;">';
    echo '<h1 style="color: #333;">Faminga Pages Creation Results</h1>';
    
    if (!empty($result['created'])) {
        echo '<h2 style="color: #0A1A0F;">✅ Successfully Created/Updated Pages:</h2>';
        echo '<ul>';
        foreach ($result['created'] as $page) {
            echo '<li style="color: #0A1A0F; margin: 5px 0;">' . esc_html($page) . '</li>';
        }
        echo '</ul>';
    }
    
    if (!empty($result['existing'])) {
        echo '<h2 style="color: #F26B3A;">📄 Pages Already Exist:</h2>';
        echo '<ul>';
        foreach ($result['existing'] as $page) {
            echo '<li style="color: #F26B3A; margin: 5px 0;">' . esc_html($page) . '</li>';
        }
        echo '</ul>';
    }
    
    if (!empty($result['errors'])) {
        echo '<h2 style="color: #d32f2f;">❌ Errors:</h2>';
        echo '<ul>';
        foreach ($result['errors'] as $error) {
            echo '<li style="color: #d32f2f; margin: 5px 0;">' . esc_html($error) . '</li>';
        }
        echo '</ul>';
    }
    
    echo '<div style="margin-top: 30px; padding: 20px; background: #e8f5e8; border-radius: 4px;">';
    echo '<h3 style="color: #0A1A0F;">Next Steps:</h3>';
    echo '<ol>';
    echo '<li>Visit your WordPress admin dashboard</li>';
    echo '<li>Go to Pages to see all created pages</li>';
    echo '<li>Test the navigation links</li>';
    echo '<li>Customize page content as needed</li>';
    echo '</ol>';
    echo '</div>';
    
    echo '<div style="margin-top: 20px; text-align: center;">';
    echo '<a href="' . admin_url('edit.php?post_type=page') . '" style="background: #0A1A0F; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">View Pages in Admin</a>';
    echo '</div>';
    
    echo '</div>';
} else {
    // Show instructions if not running the script
    echo '<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f5f5f5; border-radius: 8px;">';
    echo '<h1 style="color: #333;">Faminga Pages Creation Script</h1>';
    echo '<p>This script will create all the necessary WordPress pages for the Faminga theme.</p>';
    echo '<div style="background: #fff; padding: 20px; border-radius: 4px; margin: 20px 0;">';
    echo '<h3>Pages to be created:</h3>';
    echo '<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px;">';
    
    foreach ($pages_to_create as $page) {
        echo '<div style="background: #0A1A0F; color: white; padding: 10px; border-radius: 4px; text-align: center;">';
        echo '<strong>' . esc_html($page['title']) . '</strong><br>';
        echo '<small>/' . esc_html($page['slug']) . '</small>';
        echo '</div>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '<div style="text-align: center; margin-top: 30px;">';
    echo '<a href="?create_pages=true" style="background: #F26B3A; color: white; padding: 15px 30px; text-decoration: none; border-radius: 4px; font-size: 18px;">Create All Pages</a>';
    echo '</div>';
    echo '<div style="background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; padding: 15px; border-radius: 4px; margin-top: 20px;">';
    echo '<strong>Note:</strong> Make sure you have administrator privileges before running this script.';
    echo '</div>';
    echo '</div>';
}
?> 