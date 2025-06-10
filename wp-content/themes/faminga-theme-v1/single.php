<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Faminga_Theme_V1
 */

get_header();
?>

<div id="primary" class="content-area py-16 px-6">
    <main id="main" class="site-main container mx-auto max-w-4xl">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-[#0a2c0a] rounded-lg p-8 shadow-lg border border-[#526700] border-opacity-30'); ?>>
                <header class="entry-header mb-8 text-center">
                    <?php the_title( '<h1 class="entry-title text-4xl font-bold text-white mb-4">', '</h1>' ); ?>
                    <div class="entry-meta text-gray-400">
                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author_posts_link(); ?></span>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-8">
                        <?php the_post_thumbnail('large', ['class' => 'rounded-lg mx-auto']); ?>
                    </div><!-- .post-thumbnail -->
                <?php endif; ?>

                <div class="entry-content prose prose-invert lg:prose-xl max-w-none">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'faminga-theme-v1' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer mt-8 pt-8 border-t border-gray-700">
                     <div class="entry-meta text-gray-400">
                        <span class="cat-links"><?php echo get_the_category_list( ', ' ); ?></span>
                        <span class="tags-links"><?php echo get_the_tag_list( '', ', ' ); ?></span>
                    </div><!-- .entry-meta -->
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); 