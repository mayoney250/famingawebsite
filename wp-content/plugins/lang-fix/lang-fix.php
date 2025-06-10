<?php
/**
 * Plugin Name: Language Switcher Fix
 * Description: Simple direct fix for language switcher
 * Version: 1.0
 * Author: Faminga Team
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add fix to footer
 */
function lang_fix_script() {
    ?>
    <script>
    window.addEventListener('load', function() {
        var btn = document.getElementById('language-switcher-button');
        var menu = document.getElementById('language-switcher-options');
        
        if (btn && menu) {
            // Replace button to remove all handlers
            var newBtn = btn.cloneNode(true);
            btn.parentNode.replaceChild(newBtn, btn);
            
            // Add direct onclick attribute
            newBtn.setAttribute('onclick', 
                "event.preventDefault(); " + 
                "event.stopPropagation(); " + 
                "var dropdown = document.getElementById('language-switcher-options'); " + 
                "if (dropdown.classList.contains('hidden')) { " + 
                "    dropdown.classList.remove('hidden'); " + 
                "    dropdown.style.display = 'block'; " + 
                "} else { " + 
                "    dropdown.classList.add('hidden'); " + 
                "    dropdown.style.display = 'none'; " + 
                "} " + 
                "return false;"
            );
            
            // Close when clicking outside
            document.addEventListener('click', function(e) {
                if (e.target !== newBtn && !menu.contains(e.target)) {
                    menu.classList.add('hidden');
                    menu.style.display = 'none';
                }
            });
            
            console.log('Language switcher fixed');
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'lang_fix_script', 9999);
