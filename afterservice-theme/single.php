<?php get_header(); ?>

<div class="c-blog">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-8">

                <section class="o-content">

                    <?php if ( have_posts() ) :?>

                        <?php while ( have_posts() ) : the_post(); ?>

                        <article>

                            <?php get_template_part('_inc/sidebar', 'image'); ?>

                            <hr>

                            <h1 class="u-text--xl"><?php the_title(); ?></h1>

                            <p class="u-text--accent-4">Posted by Gregory M. Rada |  <?php the_time("F d, Y"); ?> | <?php the_category(', '); ?></p>

                            <?php the_content(); ?>

                        </article>

                        <?php endwhile; ?>

                        <?php single_pager_nav(); ?>

                    <?php endif; ?>

                </section>

            </div>

           <?php get_sidebar('blog'); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>


