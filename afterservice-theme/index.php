<?php get_header(); ?>

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--sm-8">

                <section class="o-content">

                    <h1>Blog</h1>

                    <?php if ( have_posts() ) :?>

                        <?php while ( have_posts() ) : the_post(); ?>

                        <article>

                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <p><small>Posted <?php the_time("F d, Y"); ?> in <?php the_category(', '); ?></small></p>

                            <?php the_excerpt() ?>

                            <a href="<?php the_permalink(); ?>" class="c-btn--arrow u-text--uppercase u-text--bold">Read More</a>

                            <hr>

                        </article>

                        <?php endwhile; ?>

                        <?php get_template_part('_inc/pager'); ?>

                    <?php endif; ?>

                </section>

            </div>

           <?php get_sidebar('blog'); ?>

        </div>

    </div>

<?php get_footer(); ?>


