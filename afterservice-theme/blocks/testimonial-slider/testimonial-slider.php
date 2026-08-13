<section class="testimonial-slider">
    <div class="c-reviews u-block--accent-2 c-background--relative">
        <div class="o-container">
            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-4">
                    <h2 class="c-reviews__title u-h3 u-text--white"><?php the_field('testimonial_title'); ?></h2>
                </div>

                <?php if( have_rows('testimonials') ) : ?>
                <div class="o-col--xxs-12 o-col--md-6 o-col--offset-md-2">
                    <div class="c-carousel__reviews">
                        <?php while( have_rows('testimonials') ) : the_row(); ?>
                        <div class="c-reviews__block">
                            <img src="/wp-content/themes/afterservice-theme/_dist/img/img-stars.jpg">
                            <blockquote class="u-reset--blockquote">
                                <div class="c-reviews__quote">
                                    <?php the_sub_field('quote'); ?>
                                </div>
                                <cite class="c-reviews__author"><?php the_sub_field('author'); ?></cite>
                            </blockquote>
                        </div>          
                        <?php endwhile; ?>
                    </div>  
                    <span class="c-reviews__counter"></span>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy b-loaded" style="background-image: url('/wp-content/uploads/2024/06/test-bg.jpg');"></div>
    </div>
</section>