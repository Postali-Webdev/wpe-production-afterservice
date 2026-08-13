<?php
/*
 * Template Name: Testimonials
 */
?>

<?php get_header() ;?>

<?php get_template_part('_inc/page', 'hero'); ?>

<div class="c-content">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-12">

                <div class="o-content">

                    <div class="c-testimonials">

                        <?php if( have_rows('testimonials_page') ): ?>

                            <?php while( has_sub_field('testimonials_page') ): 

                                $testimonial_header = get_sub_field('testimonial_header');
                                $testimonial_content = get_sub_field('testimonial_content');
                                $testimonial_author = get_sub_field('testimonial_author');

                            ?>

                            <div class="c-testimonials__item">

                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_dist/img/img-stars.jpg">

                                <?php if ( $testimonial_header ): ?>

                                    <h3><?php echo $testimonial_header; ?></h3>

                                <?php endif; ?>

                                <?php if ( $testimonial_content ): ?>

                                    <p><?php echo $testimonial_content; ?></p>

                                <?php endif; ?>

                                <?php if ( $testimonial_author ): ?>

                                    <h4><?php echo $testimonial_author; ?></h4>

                                <?php endif; ?>

                            </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php get_footer();?>