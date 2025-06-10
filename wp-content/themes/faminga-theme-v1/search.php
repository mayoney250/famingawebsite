<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Faminga_Theme_V1
 */

get_header();
?>

<div id="primary" class="content-area py-16 px-6">
    <main id="main" class="site-main container mx-auto max-w-4xl">

        <?php if ( have_posts() ) : ?>

            <header class="page-header mb-12 text-center">
                <h1 class="page-title text-4xl font-bold text-white mb-2">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'faminga-theme-v1' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
            </header><!-- .page-header -->

            <div class="space-y-8">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                     ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-[#0a2c0a] rounded-lg p-8 shadow-lg border border-[#526700] border-opacity-30 hover-card'); ?>>
                        <header class="entry-header mb-4">
                            <?php the_title( sprintf( '<h2 class="entry-title text-2xl font-bold text-white mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-summary text-gray-300 mb-6">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-summary -->

                        <footer class="entry-footer">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-primary hover:underline">
                                Read More <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                endwhile;
                ?>
            </div>

            <?php
            the_posts_pagination( array(
                'prev_text' => '<i class="ri-arrow-left-s-line"></i><span class="screen-reader-text">' . __( 'Previous page', 'faminga-theme-v1' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'faminga-theme-v1' ) . '</span><i class="ri-arrow-right-s-line"></i>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'faminga-theme-v1' ) . ' </span>',
            ) );

        else :
            get_template_part( 'templates/parts/content', 'none' );
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); 