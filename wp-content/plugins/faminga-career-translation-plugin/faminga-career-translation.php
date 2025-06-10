<?php
/**
 * Plugin Name: Faminga Career Translation Plugin
 * Description: Properly handles career page translation for Kinyarwanda and other languages
 * Version: 1.0.0
 * Author: Faminga Team
 * Author URI: https://faminga.com
 * License: GPL-2.0+
 */

declare(strict_types=1);

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Filter the career page template based on language
 */
function faminga_career_template_filter($template) {
    // Check if this is the career page
    if (is_page_template('template-career.php')) {
        // Get current language
        $current_language = faminga_get_current_language();
        
        // If the language is Kinyarwanda, use the Kinyarwanda version
        if ($current_language === 'rw_RW') {
            // Look for the RW template version first
            $rw_template = get_template_directory() . '/template-career-rw.php';
            
            // If it exists, use it
            if (file_exists($rw_template)) {
                return $rw_template;
            }
        }
    }
    
    // Return the original template otherwise
    return $template;
}
add_filter('template_include', 'faminga_career_template_filter', 99);

/**
 * Create Kinyarwanda career page tab navigation array
 */
function faminga_get_career_tab_translations() {
    $translations = [
        'en_US' => [
            'open_positions' => 'Open Positions',
            'internships' => 'Internships',
            'volunteer' => 'Volunteer & Climate Impact'
        ],
        'rw_RW' => [
            'open_positions' => 'Imyanya ifunguye',
            'internships' => 'Amahugurwa y\'akazi (Internships)',
            'volunteer' => 'Gukorera ku bushake & Ingamba zo kurengera ikirere'
        ]
    ];
    
    $current_language = faminga_get_current_language();
    return $translations[$current_language] ?? $translations['en_US'];
}

/**
 * Create job type display translations
 */
function faminga_get_job_type_translations() {
    $translations = [
        'en_US' => [
            'full_time' => 'Full Time',
            'part_time' => 'Part Time',
            'contract' => 'Contract',
            'internship' => 'Internship',
            'volunteer' => 'Volunteer'
        ],
        'rw_RW' => [
            'full_time' => 'Igihe cyose',
            'part_time' => 'Igihe gito',
            'contract' => 'Amasezerano',
            'internship' => 'Amahugurwa y\'akazi',
            'volunteer' => 'Gukorera ku bushake'
        ]
    ];
    
    $current_language = faminga_get_current_language();
    return $translations[$current_language] ?? $translations['en_US'];
}

/**
 * Create job status display translations
 */
function faminga_get_job_status_translations() {
    $translations = [
        'en_US' => [
            'open' => 'Open',
            'coming_soon' => 'Coming Soon',
            'closed' => 'Closed',
            'position_filled' => 'Position Filled',
            'initiative_closed' => 'Initiative Closed'
        ],
        'rw_RW' => [
            'open' => 'Ifunguye',
            'coming_soon' => 'Biri hafi',
            'closed' => 'Ifunze',
            'position_filled' => 'Umwanya wujujwe',
            'initiative_closed' => 'Igikorwa cyarangiye'
        ]
    ];
    
    $current_language = faminga_get_current_language();
    return $translations[$current_language] ?? $translations['en_US'];
}

/**
 * Create button translations
 */
function faminga_get_button_translations() {
    $translations = [
        'en_US' => [
            'view_details' => 'View Details',
            'apply_now' => 'Apply Now',
            'apply_for_internship' => 'Apply for Internship',
            'join_initiative' => 'Join Initiative',
            'join_ai_challenges' => 'Join AI Challenges'
        ],
        'rw_RW' => [
            'view_details' => 'Reba ibisobanuro',
            'apply_now' => 'Saba Ubu',
            'apply_for_internship' => 'Saba Kwimenyereza',
            'join_initiative' => 'Yinjira mu gikorwa',
            'join_ai_challenges' => 'Yinjira mu bikorwa bya AI'
        ]
    ];
    
    $current_language = faminga_get_current_language();
    return $translations[$current_language] ?? $translations['en_US'];
} 