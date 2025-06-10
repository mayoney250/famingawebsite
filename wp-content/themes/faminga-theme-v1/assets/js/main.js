// Main javascript file 
document.addEventListener('DOMContentLoaded', function() {
    // Back to Top Button Functionality
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        // Scroll to top on click
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Pricing toggle functionality
    const pricingToggle = document.getElementById('pricing-toggle');
    if (pricingToggle) {
        let isAnnual = false;
        
        // Define original monthly prices and calculate annual prices
        const pricingData = {
            free: { monthly: 0, annual: 0 },
            standard: { monthly: 10000, annual: 8000 },
            pro: { monthly: 25000, annual: 20000 },
            enterprise: { monthly: 50000, annual: 40000 }
        };
        
        // Get all pricing elements
        const pricingCards = document.querySelectorAll('#pricing .solution-card');
        const billingPeriods = document.querySelectorAll('.billing-period');
        
        // Function to update prices based on billing period
        function updatePrices() {
            // Toggle the switch appearance
            const toggleSpan = pricingToggle.querySelector('span.pointer-events-none');
            if (isAnnual) {
                toggleSpan.classList.remove('translate-x-0');
                toggleSpan.classList.add('translate-x-5');
            } else {
                toggleSpan.classList.remove('translate-x-5');
                toggleSpan.classList.add('translate-x-0');
            }
            
            // Update prices in each card
            pricingCards.forEach((card, index) => {
                const priceElement = card.querySelector('.mb-6 .text-3xl.font-bold');
                if (priceElement) {
                    let planType;
                    switch(index) {
                        case 0: planType = 'free'; break;
                        case 1: planType = 'standard'; break;
                        case 2: planType = 'pro'; break;
                        case 3: planType = 'enterprise'; break;
                    }
                    
                    if (planType) {
                        const price = isAnnual ? pricingData[planType].annual : pricingData[planType].monthly;
                        priceElement.textContent = price.toLocaleString('en-US') + 'Rwf';
                    }
                }
            });
            
            // Update all billing period texts
            billingPeriods.forEach(period => {
                period.textContent = isAnnual ? '/year' : '/month';
            });
        }
        
        // Add click event to toggle
        pricingToggle.addEventListener('click', function() {
            isAnnual = !isAnnual;
            updatePrices();
        });
        
        // Initialize with monthly prices
        updatePrices();
    }
    
    const chartDom = document.getElementById('farmChart');
    if (chartDom) {
        const myChart = echarts.init(chartDom);
        const option = {
            animation: false,
            color: ['rgba(87, 181, 231, 1)', 'rgba(141, 211, 199, 1)', 'rgba(251, 191, 114, 1)', 'rgba(252, 141, 98, 1)'],
            tooltip: {
                trigger: 'axis',
                backgroundColor: 'rgba(255, 255, 255, 0.8)',
                textStyle: {
                    color: '#1f2937'
                }
            },
            grid: {
                top: 5,
                right: 0,
                bottom: 0,
                left: 0,
                containLabel: true
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                axisLine: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.2)'
                    }
                },
                axisLabel: {
                    color: 'rgba(255, 255, 255, 0.6)',
                    fontSize: 8
                }
            },
            yAxis: {
                type: 'value',
                axisLine: {
                    show: false
                },
                splitLine: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                },
                axisLabel: {
                    color: 'rgba(255, 255, 255, 0.6)',
                    fontSize: 8
                }
            },
            series: [{
                name: 'Soil Moisture',
                type: 'line',
                smooth: true,
                symbol: 'none',
                data: [28, 32, 36, 42, 38, 45],
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgba(87, 181, 231, 0.2)'
                    }, {
                        offset: 1,
                        color: 'rgba(87, 181, 231, 0.05)'
                    }])
                }
            }, {
                name: 'Temperature',
                type: 'line',
                smooth: true,
                symbol: 'none',
                data: [22, 25, 29, 26, 24, 27],
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgba(141, 211, 199, 0.2)'
                    }, {
                        offset: 1,
                        color: 'rgba(141, 211, 199, 0.05)'
                    }])
                }
            }]
        };
        myChart.setOption(option);
        window.addEventListener('resize', function() {
            myChart.resize();
        });
    }

    // Language Switcher Logic - Fixed version
    const languageSwitcherButton = document.getElementById('language-switcher-button');
    const languageSwitcherOptions = document.getElementById('language-switcher-options');
    
    if (languageSwitcherButton && languageSwitcherOptions) {
        console.log('Language switcher elements found');
        
        // Toggle dropdown when clicking the button
        languageSwitcherButton.addEventListener('click', function(event) {
            console.log('Language switcher button clicked');
            event.preventDefault();
            event.stopPropagation();
            
            // Toggle the dropdown visibility
            languageSwitcherOptions.classList.toggle('hidden');
        });
        
        // Close when clicking outside
        document.addEventListener('click', function(event) {
            // Only close if clicking outside both the button and options
            if (!languageSwitcherButton.contains(event.target) && !languageSwitcherOptions.contains(event.target)) {
                languageSwitcherOptions.classList.add('hidden');
            }
        });
        
        // Handle language selection links
        const languageLinks = languageSwitcherOptions.querySelectorAll('a');
        languageLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                
                const href = this.getAttribute('href');
                const url = new URL(href, window.location.origin);
                const lang = url.searchParams.get('lang');
                
                if (lang) {
                    // Set cookie for the language preference
                    document.cookie = 'faminga_lang=' + lang + '; path=/; max-age=' + (60 * 60 * 24 * 30); // 30 days
                    
                    // Redirect to apply the language change
                    window.location.href = href;
                }
            });
        });
    }

    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }

    // Active navigation link highlighting
    const currentUrl = window.location.href;
    const navLinks = document.querySelectorAll('#main-nav a');
    navLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active-nav-item');
        }
    });
});
