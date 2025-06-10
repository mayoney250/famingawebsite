/**
 * Demo Request Form Validation & Enhancement
 */
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('demoRequestForm');
    if (!form) return;

    // Client-side form validation
    form.addEventListener('submit', function(e) {
        // Get required fields
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        // Check each required field
        requiredFields.forEach(field => {
            // Remove existing error messages
            const existingError = field.parentElement.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }

            // Validate field
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500');
                
                // Add error message
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message text-red-500 text-xs mt-1';
                errorMsg.textContent = 'This field is required';
                field.parentElement.appendChild(errorMsg);
            } else {
                field.classList.remove('border-red-500');
                
                // Special validation for email
                if (field.type === 'email' && !isValidEmail(field.value)) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    // Add error message
                    const errorMsg = document.createElement('div');
                    errorMsg.className = 'error-message text-red-500 text-xs mt-1';
                    errorMsg.textContent = 'Please enter a valid email address';
                    field.parentElement.appendChild(errorMsg);
                }
            }
        });

        // Validate terms checkbox
        const termsCheckbox = document.getElementById('terms');
        if (termsCheckbox && !termsCheckbox.checked) {
            isValid = false;
            const existingError = termsCheckbox.parentElement.parentElement.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }
            
            // Add error message
            const errorMsg = document.createElement('div');
            errorMsg.className = 'error-message text-red-500 text-xs mt-1';
            errorMsg.textContent = 'You must agree to the terms and conditions';
            termsCheckbox.parentElement.parentElement.appendChild(errorMsg);
        }

        // Stop form submission if validation fails
        if (!isValid) {
            e.preventDefault();
            
            // Scroll to first error
            const firstError = document.querySelector('.error-message');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });

    // Email validation helper
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Field real-time validation
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach(field => {
        field.addEventListener('blur', function() {
            // Remove existing error messages
            const existingError = field.parentElement.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }

            // Validate field
            if (!field.value.trim()) {
                field.classList.add('border-red-500');
                
                // Add error message
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message text-red-500 text-xs mt-1';
                errorMsg.textContent = 'This field is required';
                field.parentElement.appendChild(errorMsg);
            } else {
                field.classList.remove('border-red-500');
                
                // Special validation for email
                if (field.type === 'email' && !isValidEmail(field.value)) {
                    field.classList.add('border-red-500');
                    
                    // Add error message
                    const errorMsg = document.createElement('div');
                    errorMsg.className = 'error-message text-red-500 text-xs mt-1';
                    errorMsg.textContent = 'Please enter a valid email address';
                    field.parentElement.appendChild(errorMsg);
                }
            }
        });
    });

    // Custom checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        const checkmark = checkbox.parentElement.querySelector('.check-mark');
        
        // Set initial state
        if (checkbox.checked) {
            checkmark.style.opacity = '1';
        }
        
        // Add event listener for changes
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkmark.style.opacity = '1';
                
                // Remove error message if terms checkbox
                if (this.id === 'terms') {
                    const existingError = this.parentElement.parentElement.querySelector('.error-message');
                    if (existingError) {
                        existingError.remove();
                    }
                }
            } else {
                checkmark.style.opacity = '0';
            }
        });
    });
}); 