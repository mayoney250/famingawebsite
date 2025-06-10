/**
 * Smooth scrolling for navigation links
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links with hash
    const navLinks = document.querySelectorAll('a[href*="#"]');
    
    // Add click event listener to each link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Only process links that point to an ID on this page
            if (
                this.getAttribute('href').startsWith('#') || 
                this.getAttribute('href').includes(window.location.pathname + '#')
            ) {
                const targetId = this.getAttribute('href').split('#')[1];
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    // Smooth scroll to the target
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Offset for fixed header
                        behavior: 'smooth'
                    });
                    
                    // Update URL without reloading
                    history.pushState(null, null, '#' + targetId);
                }
            }
        });
    });
    
    // Handle initial page load with hash in URL
    if (window.location.hash) {
        const targetId = window.location.hash.substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            setTimeout(() => {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }, 300);
        }
    }
}); 