<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Faminga_Theme_V1
 */

get_header();
?>

<main id="main" class="site-main py-20 px-6">
    <div class="container mx-auto max-w-4xl text-center">

        <div class="mb-8">
            <i class="ri-error-warning-line text-primary text-8xl"></i>
        </div>

        <h1 class="text-6xl font-bold text-white mb-4">404</h1>
        <h2 class="text-3xl font-semibold text-white mb-6">Page Not Found</h2>
        <p class="text-lg text-gray-300 max-w-md mx-auto mb-10">
            Oops! The page you are looking for does not exist. It might have been moved or deleted.
        </p>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="px-8 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button whitespace-nowrap">
            <i class="ri-home-4-line mr-2"></i>
            Return to Homepage
        </a>

    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer(); 