<?php
declare(strict_types=1);
/**
 * The template for displaying the blog home page
 *
 * This is used when your site is set to display latest posts on the front page,
 * or when viewing any blog archive page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Faminga_Theme_v1
 */

get_header(); ?>

<main id="main" class="site-main py-16">
    <div class="container mx-auto px-4">
        <header class="page-header mb-12 text-center">
            <h1 class="page-title text-4xl font-bold mb-4"><?php echo esc_html(get_the_title(get_option('page_for_posts', true))); ?></h1>
            <div class="archive-description text-gray-300 max-w-2xl mx-auto">
                <p>Latest farming insights, tips, and updates from the Faminga team.</p>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-[#0a2c0a] rounded-lg overflow-hidden border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <header class="entry-header mb-4">
                                <?php
                                the_title(
                                    '<h2 class="entry-title text-xl font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-primary transition duration-200">',
                                    '</a></h2>'
                                );
                                ?>
                                <div class="entry-meta text-sm text-gray-400 mb-3">
                                    <span class="posted-on">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </span>
                                    <span class="mx-2">•</span>
                                    <span class="byline">
                                        <?php echo esc_html(get_the_author()); ?>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-content text-gray-300">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <footer class="entry-footer mt-4">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline transition duration-200">
                                    Read More
                                    <i class="ri-arrow-right-line ml-1"></i>
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php
                endwhile;
            else :
                get_template_part('templates/parts/content', 'none');
            endif;
            ?>
        </div>

        <div class="pagination-container mt-12 flex justify-center">
            <?php
            echo paginate_links([
                'prev_text' => '<i class="ri-arrow-left-s-line"></i> Previous',
                'next_text' => 'Next <i class="ri-arrow-right-s-line"></i>',
                'type' => 'list',
                'class' => 'flex',
            ]);
            ?>
        </div>
    </div>
</main>

<?php
get_footer(); 