<?php get_header();?>

<?php get_template_part('_inc/page', 'hero'); ?>

<div class="c-content c-content-bio">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-8">

                <div class="o-content">

                    <h1 class="c-page__title"><?php the_title(); ?></h1>

                    <div class="u-block-padding--md u-reset--padding-top u-text--center u-visibility-hidden-md--up">

                        <?php get_template_part('_inc/sidebar', 'image'); ?>

                    </div>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--md-4">

                <aside class="c-sidebar">

                    <div class="u-visibility-hidden-sm--down">

                        <?php get_template_part('_inc/sidebar', 'image'); ?>

                    </div>

    				<?php 

                        $staff_info = get_field('staff_info');

                        if ( $staff_info ):  ?>

                            <div class="c-attorneys__info">
                                
                                <?php echo $staff_info; ?>

                            </div>

                    <?php endif; ?>

                </aside>

            </div>

        </div>

    </div>

</div>

<?php get_footer();?>