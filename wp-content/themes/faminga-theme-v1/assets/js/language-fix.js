/**
 * Language Switcher Fix
 * 
 * This script fixes the language switcher dropdown functionality.
 */
document.addEventListener("DOMContentLoaded", function() {
    // Elements
    var button = document.getElementById("language-switcher-button");
    var dropdown = document.getElementById("language-switcher-options");
    
    if (!button || !dropdown) {
        console.error("Language switcher elements not found");
        return;
    }
    
    console.log("Language switcher found and fixed");
    
    // Toggle dropdown
    button.onclick = function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log("Language button clicked");
        
        if (dropdown.classList.contains("hidden")) {
            dropdown.classList.remove("hidden");
            dropdown.style.display = "block";
            console.log("Showing dropdown");
        } else {
            dropdown.classList.add("hidden");
            dropdown.style.display = "none";
            console.log("Hiding dropdown");
        }
    };
    
    // Close dropdown when clicking elsewhere
    document.addEventListener("click", function(e) {
        if (e.target !== button && !dropdown.contains(e.target)) {
            dropdown.classList.add("hidden");
            dropdown.style.display = "none";
        }
    });
    
    // Prevent closing dropdown when clicking inside it
    dropdown.addEventListener("click", function(e) {
        e.stopPropagation();
    });
});
