<?php
/**
 * Fixed Navigation Script
 *
 * This file adds a script to make the navigation bar fixed when scrolling.
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add the fixed navigation script to the footer.
 */
function faminga_add_fixed_navigation_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const nav = document.querySelector('nav');
        if (!nav) return;
        
        // Add an ID to the nav element for easier targeting
        nav.id = 'main-nav';
        
        // Create a spacer element to prevent content jump when nav becomes fixed
        const navSpacer = document.createElement('div');
        navSpacer.id = 'nav-spacer';
        navSpacer.classList.add('hidden');
        nav.after(navSpacer);
        
        // Store the original nav height
        const navHeight = nav.offsetHeight;
        navSpacer.style.height = \\px\;
        
        // Add transition classes to nav
        nav.classList.add('transition-all', 'duration-300', 'z-50');
        
        // Function to handle scroll events
        function handleScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // If we've scrolled past 100px, make the navbar fixed
            if (scrollTop > 100) {
                nav.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'shadow-lg');
                nav.classList.add('py-2'); // Smaller padding when fixed
                nav.classList.add('bg-dark-green', 'bg-opacity-95'); // Slightly transparent background
                navSpacer.classList.remove('hidden'); // Show the spacer
            } else {
                nav.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'shadow-lg');
                nav.classList.remove('py-2');
                nav.classList.remove('bg-opacity-95');
                navSpacer.classList.add('hidden'); // Hide the spacer
            }
        }
        
        // Initial call in case the page is loaded scrolled down
        handleScroll();
        
        // Add scroll event listener
        window.addEventListener('scroll', handleScroll);
    });
    </script>
    <?php
}
add_action('wp_footer', 'faminga_add_fixed_navigation_script');
