document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('language-switcher-button');
    const options = document.getElementById('language-switcher-options');

    if (button && options) {
        // Ensure options are hidden initially, but only if they aren't already
        if (!options.classList.contains('hidden')) {
            options.classList.add('hidden');
        }

        // Toggle dropdown on button click
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            options.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            // If the click is outside the button and the options, and the options are not hidden
            if (!button.contains(e.target) && !options.contains(e.target)) {
                if (!options.classList.contains('hidden')) {
                    options.classList.add('hidden');
                }
            }
        });
    }
});
