<?php get_header(); ?>

<div class="c-blog">
    
    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-8">

                <section class="o-content">

                    <h1 class="c-page__title">Category: <?php single_cat_title(); ?></h1>

                    <?php if ( have_posts() ) :?>

                        <div class="c-blog__items">

                            <?php while ( have_posts() ) : the_post(); ?>

                                <article class="c-blog__item">


                                    <h2 class="c-blog__title u-text--accent-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <p class="u-text--accent-4">Posted by Gregory M. Rada |  <?php the_time("F d, Y"); ?> | <?php the_category(', '); ?></p>


                                    <div class="c-blog__excerpt">
                                        
                                        <?php the_excerpt() ?>

                                    </div>

                                    <a href="<?php the_permalink(); ?>"
                                     title="Read Article: <?php the_title(); ?>" 
                                     class="c-btn--arrow">Read More</a>

                                </article>

                            <hr class="u-block-hr--accent-6">

                            <?php endwhile; ?>

                        </div>

                        <?php get_template_part('_inc/pager'); ?>

                    <?php endif; ?>

                </section>

            </div>

            <?php get_sidebar('blog'); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>


