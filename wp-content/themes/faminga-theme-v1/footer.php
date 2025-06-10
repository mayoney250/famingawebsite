	</main><!-- #content -->

	<!-- Footer -->
	<footer class="py-12 px-6 bg-[#0a2c0a]" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-5 gap-8">
				<div class="md:col-span-2">
					<img src="https://static.readdy.ai/image/8f9a4aa4eef33a1aa07dab33cb633d6f/f9a3b44a81b9e7fa213d7beada2779d5.png" alt="Faminga Logo" class="h-10 mb-4">
					<p class="text-gray-300 mb-6"><?php _e( 'Empowering farmers with breakthrough technology for unparalleled productivity, sustainability, and profitability in smart agriculture across Africa.', 'faminga-theme-v1' ); ?></p>
					<div class="flex space-x-4">
						<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-opacity-20 transition">
							<i class="ri-facebook-fill text-white"></i>
						</a>
						<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-opacity-20 transition">
							<i class="ri-twitter-x-fill text-white"></i>
						</a>
						<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-opacity-20 transition">
							<i class="ri-instagram-fill text-white"></i>
						</a>
						<a href="https://www.linkedin.com/company/faminga/posts/" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-opacity-20 transition">
							<i class="ri-linkedin-fill text-white"></i>
						</a>
					</div>
				</div>
				<div>
					<h4 class="text-white font-semibold mb-4"><?php _e( 'Solutions', 'faminga-theme-v1' ); ?></h4>
					<ul class="space-y-2">
						<li><a href="<?php echo esc_url(site_url('/small-scale-farmers')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Small-Scale Farmers', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/commercial-farms')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Commercial Farms', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/cooperatives')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Cooperatives', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/agribusinesses')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Agribusinesses', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/food-security')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Food Security', 'faminga-theme-v1' ); ?></a></li>
					</ul>
				</div>
				<div>
					<h4 class="text-white font-semibold mb-4"><?php _e( 'Company', 'faminga-theme-v1' ); ?></h4>
					<ul class="space-y-2">
						<li><a href="<?php echo esc_url(site_url('/about')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'About Us', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/career')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Careers', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/partners')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Partners', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/blog')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Blog', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/contact')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Contact', 'faminga-theme-v1' ); ?></a></li>
					</ul>
				</div>
				<div>
					<h4 class="text-white font-semibold mb-4"><?php _e( 'Legal', 'faminga-theme-v1' ); ?></h4>
					<ul class="space-y-2">
						<li><a href="<?php echo esc_url(site_url('/terms-of-service')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Terms of Service', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/privacy-policy')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Privacy Policy', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/data-processing')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Data Processing', 'faminga-theme-v1' ); ?></a></li>
						<li><a href="<?php echo esc_url(site_url('/cookies')); ?>" class="text-gray-300 hover:text-primary transition"><?php _e( 'Cookies', 'faminga-theme-v1' ); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
				<p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; <?php echo date('Y'); ?> <?php _e( 'Faminga. All rights reserved.', 'faminga-theme-v1' ); ?></p>
				<div class="flex items-center space-x-4">
					<div class="flex items-center">
						<i class="ri-visa-line text-white mr-2"></i>
						<i class="ri-mastercard-line text-white mr-2"></i>
						<i class="ri-paypal-line text-white mr-2"></i>
						<i class="ri-bank-card-line text-white"></i>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Back to Top Button Script -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const backToTopButton = document.getElementById('back-to-top');
		
		if (!backToTopButton) return; // Exit if button doesn't exist
		
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
	});
</script>

<!-- Fixed Navigation Script -->
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
		navSpacer.style.height = `${navHeight}px`;
		
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

<!-- Language Switcher Fix -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Fix language switcher dropdown
		const button = document.getElementById('language-switcher-button');
		const dropdown = document.getElementById('language-switcher-options');
		
		if (button && dropdown) {
			console.log('Language switcher elements found');
			
			// Force initial state
			dropdown.classList.add('hidden');
			dropdown.style.display = 'none';
			
			// Add direct click handler to the button
			button.onclick = function(e) {
				e.preventDefault();
				e.stopPropagation();
				console.log('Language switcher button clicked');
				
				// Toggle dropdown visibility
				if (dropdown.classList.contains('hidden')) {
					dropdown.classList.remove('hidden');
					dropdown.style.display = 'block';
					console.log('Showing dropdown');
				} else {
					dropdown.classList.add('hidden');
					dropdown.style.display = 'none';
					console.log('Hiding dropdown');
				}
			};
			
			// Close dropdown when clicking outside
			document.addEventListener('click', function(e) {
				if (e.target !== button && !dropdown.contains(e.target)) {
					dropdown.classList.add('hidden');
					dropdown.style.display = 'none';
				}
			});
			
			// Add click handlers to language links
			const links = dropdown.querySelectorAll('a');
			links.forEach(function(link) {
				link.addEventListener('click', function(e) {
					e.preventDefault();
					const href = this.getAttribute('href');
					const url = new URL(href, window.location.origin);
					const lang = url.searchParams.get('lang');
					
					if (lang) {
						// Set cookie to remember language preference
						document.cookie = 'faminga_lang=' + lang + '; path=/; max-age=' + (60 * 60 * 24 * 30);
						
						// Navigate to the selected language URL
						window.location.href = href;
					}
				});
			});
		}
	});
</script>

</body>
</html> 