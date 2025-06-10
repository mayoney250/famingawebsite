/**
 * Career Filters JavaScript
 * Handles filtering of job listings on the career page
 */
document.addEventListener('DOMContentLoaded', function() {
    // Filter tab switching
    const filterTabs = document.querySelectorAll('.filter-tab');
    const jobSections = document.querySelectorAll('.job-section');
    
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            filterTabs.forEach(t => {
                t.classList.remove('bg-primary', 'text-white');
                t.classList.add('hover:bg-[#001a00]', 'text-white');
            });
            
            // Add active class to clicked tab
            this.classList.remove('hover:bg-[#001a00]');
            this.classList.add('bg-primary', 'text-white');
            
            // Show/hide appropriate section
            const targetId = this.getAttribute('href').substring(1);
            
            jobSections.forEach(section => {
                if (section.id === targetId) {
                    section.classList.remove('hidden');
                } else {
                    section.classList.add('hidden');
                }
            });
        });
    });
    
    // Filter dropdowns
    const filterForm = document.getElementById('job-filter-form');
    
    if (filterForm) {
        // Initialize job cards
        const jobCards = document.querySelectorAll('.job-card');
        
        // Filter function
        const filterJobs = () => {
            const locationFilter = document.getElementById('filter-location').value;
            const typeFilter = document.getElementById('filter-type').value;
            const statusFilter = document.getElementById('filter-status').value;
            const skillFilter = document.getElementById('filter-skill').value;
            
            // Loop through all job cards
            jobCards.forEach(card => {
                let showCard = true;
                
                // Check location filter
                if (locationFilter && card.dataset.location !== locationFilter) {
                    showCard = false;
                }
                
                // Check type filter
                if (typeFilter && card.dataset.type !== typeFilter) {
                    showCard = false;
                }
                
                // Check status filter
                if (statusFilter && card.dataset.status !== statusFilter) {
                    showCard = false;
                }
                
                // Check skill filter (skills are comma-separated values)
                if (skillFilter && !card.dataset.skills.split(',').includes(skillFilter)) {
                    showCard = false;
                }
                
                // Show/hide card
                if (showCard) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
            
            // Check if any cards are visible in each section
            jobSections.forEach(section => {
                if (!section.classList.contains('hidden')) {
                    const visibleCards = section.querySelectorAll('.job-card:not(.hidden)');
                    const emptyMessage = section.querySelector('.empty-filter-message');
                    
                    if (visibleCards.length === 0 && emptyMessage) {
                        emptyMessage.classList.remove('hidden');
                    } else if (emptyMessage) {
                        emptyMessage.classList.add('hidden');
                    }
                }
            });
        };
        
        // Attach event listeners to filter dropdowns
        const filterDropdowns = filterForm.querySelectorAll('select');
        filterDropdowns.forEach(dropdown => {
            dropdown.addEventListener('change', filterJobs);
        });
        
        // Reset filters button
        const resetButton = document.getElementById('reset-filters');
        if (resetButton) {
            resetButton.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Reset all filter dropdowns
                filterDropdowns.forEach(dropdown => {
                    dropdown.selectedIndex = 0;
                });
                
                // Show all job cards
                jobCards.forEach(card => {
                    card.classList.remove('hidden');
                });
                
                // Hide all empty messages
                document.querySelectorAll('.empty-filter-message').forEach(msg => {
                    msg.classList.add('hidden');
                });
            });
        }
    }
    
    // Search functionality
    const searchInput = document.getElementById('job-search');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const jobCards = document.querySelectorAll('.job-card');
            
            jobCards.forEach(card => {
                const title = card.querySelector('.job-title').textContent.toLowerCase();
                const location = card.querySelector('.job-location')?.textContent.toLowerCase() || '';
                const description = card.querySelector('.job-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || location.includes(searchTerm) || description.includes(searchTerm)) {
                    card.classList.remove('search-hidden');
                } else {
                    card.classList.add('search-hidden');
                }
            });
            
            // Check if any cards are visible in each section
            jobSections.forEach(section => {
                if (!section.classList.contains('hidden')) {
                    const visibleCards = section.querySelectorAll('.job-card:not(.hidden):not(.search-hidden)');
                    const emptyMessage = section.querySelector('.empty-search-message');
                    
                    if (visibleCards.length === 0 && emptyMessage) {
                        emptyMessage.classList.remove('hidden');
                    } else if (emptyMessage) {
                        emptyMessage.classList.add('hidden');
                    }
                }
            });
        });
    }
}); 