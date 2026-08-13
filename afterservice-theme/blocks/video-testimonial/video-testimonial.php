<section class="video-testimonial-block">
    <div class="c-info u-block--accent-1 u-block-padding--xl c-background--relative">
        <div class="o-container">
            <div class="o-row align-items-center-xs">
                <div class="o-col--xxs-12 o-col--sm-10 o-col--offset-sm-1">
                    <div class="c-info__content">
                        <?php if( have_rows('video_touts') ) : ?>
                            <div class="touts">
                                <?php while( have_rows('video_touts') ) : the_row(); ?>
                                <div class="tout-block">
                                    <p><?php the_sub_field('tour'); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <p>
                            <div class="c-embed c-embed--respond">
                                <iframe title="Testimonial by Veteran Paul Marcil" src="<?php the_field('video_testimonial_url'); ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>