<?php
/**
 * Template Name: Blog
 *
 * @package Faminga_Theme_V1
 */

get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-6xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['faminga_blog']); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['blog_subtitle']); ?></p>
        </div>

        <!-- Categories Filter -->
        <section class="mb-12">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="category-filter active px-6 py-3 bg-primary text-white rounded-lg font-medium hover:bg-opacity-90 transition-all duration-300" data-category="all"><?php echo esc_html($t['all_articles']); ?></button>
                <button class="category-filter px-6 py-3 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-gray-300 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300" data-category="smart-farming"><?php echo esc_html($t['smart_farming']); ?></button>
                <button class="category-filter px-6 py-3 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-gray-300 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300" data-category="technology"><?php echo esc_html($t['technology']); ?></button>
                <button class="category-filter px-6 py-3 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-gray-300 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300" data-category="sustainability"><?php echo esc_html($t['sustainability']); ?></button>
                <button class="category-filter px-6 py-3 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-gray-300 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300" data-category="success-stories"><?php echo esc_html($t['success_stories']); ?></button>
                <button class="category-filter px-6 py-3 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-gray-300 rounded-lg font-medium hover:bg-primary hover:text-white transition-all duration-300" data-category="market-insights"><?php echo esc_html($t['market_insights']); ?></button>
            </div>
        </section>

        <!-- Featured Article -->
        <section class="mb-20">
            <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="lg:order-2">
                        <img src="https://via.placeholder.com/600x400" alt="Featured Article" class="w-full h-64 lg:h-full object-cover">
                    </div>
                    <div class="lg:order-1 p-8">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-primary text-white text-sm rounded-full"><?php _e( 'Featured', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-sm"><?php echo date('F j, Y'); ?></span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold mb-4"><?php _e( 'The Future of Agriculture: How AI is Transforming Farming in Africa', 'faminga-theme-v1' ); ?></h2>
                        <p class="text-gray-300 mb-6"><?php _e( 'Discover how artificial intelligence and machine learning are revolutionizing agricultural practices across the African continent, from crop monitoring to yield prediction.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40x40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                                <div>
                                    <p class="font-semibold text-sm">Dr. Sarah Uwimana</p>
                                    <p class="text-gray-400 text-xs"><?php _e( 'Chief Technology Officer', 'faminga-theme-v1' ); ?></p>
                                </div>
                            </div>
                            <a href="#" class="text-primary hover:underline font-medium"><?php _e( 'Read Full Article', 'faminga-theme-v1' ); ?> →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Articles Grid -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold mb-12"><?php _e( 'Latest Articles', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="articles-grid">
                <!-- Article 1 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="smart-farming">
                    <img src="https://via.placeholder.com/400x250" alt="IoT Sensors in Agriculture" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-blue-600 bg-opacity-20 text-blue-400 text-xs rounded-full"><?php _e( 'Smart Farming', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 15, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( '10 Essential IoT Sensors Every Smart Farm Needs', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'Learn about the most important IoT sensors that can transform your farming operations and increase productivity.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">Emmanuel Nshimiyimana</span>
                            </div>
                            <span class="text-gray-400 text-xs">5 min read</span>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="success-stories">
                    <img src="https://via.placeholder.com/400x250" alt="Success Story" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-green-600 bg-opacity-20 text-green-400 text-xs rounded-full"><?php _e( 'Success Stories', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 12, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( 'How Kivu Coffee Cooperative Increased Yield by 40%', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'A detailed case study of how one cooperative used Faminga\'s platform to dramatically improve their coffee production.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">Marie Mukamana</span>
                            </div>
                            <span class="text-gray-400 text-xs">8 min read</span>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="technology">
                    <img src="https://via.placeholder.com/400x250" alt="AI Disease Detection" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-purple-600 bg-opacity-20 text-purple-400 text-xs rounded-full"><?php _e( 'Technology', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 10, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( 'AI-Powered Disease Detection: Early Warning Systems for Crops', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'Explore how machine learning algorithms are helping farmers detect plant diseases before they spread.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">Dr. Grace Nyirahabimana</span>
                            </div>
                            <span class="text-gray-400 text-xs">6 min read</span>
                        </div>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="sustainability">
                    <img src="https://via.placeholder.com/400x250" alt="Sustainable Farming" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-green-700 bg-opacity-20 text-green-300 text-xs rounded-full"><?php _e( 'Sustainability', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 8, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( 'Climate-Smart Agriculture: Adapting to Changing Weather Patterns', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'Learn strategies for building resilient farming systems that can withstand climate variability and change.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">James Ochieng</span>
                            </div>
                            <span class="text-gray-400 text-xs">7 min read</span>
                        </div>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="market-insights">
                    <img src="https://via.placeholder.com/400x250" alt="Market Trends" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-yellow-600 bg-opacity-20 text-yellow-400 text-xs rounded-full"><?php _e( 'Market Insights', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 5, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( 'African Agricultural Export Trends: Opportunities for 2024', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'Discover emerging market opportunities and export trends that African farmers should know about.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">Jean Claude Rwigema</span>
                            </div>
                            <span class="text-gray-400 text-xs">9 min read</span>
                        </div>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30 overflow-hidden hover:shadow-lg transition duration-300" data-category="smart-farming">
                    <img src="https://via.placeholder.com/400x250" alt="Precision Agriculture" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="px-3 py-1 bg-blue-600 bg-opacity-20 text-blue-400 text-xs rounded-full"><?php _e( 'Smart Farming', 'faminga-theme-v1' ); ?></span>
                            <span class="ml-3 text-gray-400 text-xs">March 2, 2024</span>
                        </div>
                        <h3 class="font-bold mb-3 hover:text-primary transition-colors"><?php _e( 'Precision Agriculture: Getting Started with GPS and Variable Rate Technology', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 text-sm mb-4"><?php _e( 'A beginner\'s guide to implementing precision agriculture techniques for optimal resource use and crop management.', 'faminga-theme-v1' ); ?></p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/30x30" alt="Author" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-gray-400 text-xs">Sarah Uwimana</span>
                            </div>
                            <span class="text-gray-400 text-xs">10 min read</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Load More Button -->
        <section class="text-center mb-20">
            <button class="px-8 py-4 bg-[#0a2c0a] border border-[#526700] border-opacity-30 text-white font-medium hover:bg-primary hover:border-primary transition-all duration-300 rounded-lg"><?php _e( 'Load More Articles', 'faminga-theme-v1' ); ?></button>
        </section>

        <!-- Newsletter Signup -->
        <section class="text-center">
            <div class="bg-[#0a2c0a] p-12 rounded-lg border border-[#526700] border-opacity-30 max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['stay_updated_faminga']); ?></h2>
                <p class="text-xl text-gray-300 mb-8"><?php echo esc_html($t['newsletter_desc']); ?></p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="<?php echo esc_attr($t['enter_email_address']); ?>" class="flex-1 px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm focus:outline-none focus:border-primary">
                    <button type="submit" class="px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded"><?php echo esc_html($t['subscribe']); ?></button>
                </form>
                <p class="text-gray-400 text-sm mt-4"><?php echo esc_html($t['no_spam_policy']); ?></p>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilters = document.querySelectorAll('.category-filter');
    const articles = document.querySelectorAll('[data-category]');

    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active filter
            categoryFilters.forEach(f => f.classList.remove('active', 'bg-primary', 'text-white'));
            categoryFilters.forEach(f => f.classList.add('bg-[#0a2c0a]', 'border', 'border-[#526700]', 'border-opacity-30', 'text-gray-300'));
            
            this.classList.add('active', 'bg-primary', 'text-white');
            this.classList.remove('bg-[#0a2c0a]', 'border', 'border-[#526700]', 'border-opacity-30', 'text-gray-300');
            
            // Filter articles
            articles.forEach(article => {
                if (category === 'all' || article.getAttribute('data-category') === category) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php get_footer(); ?> 