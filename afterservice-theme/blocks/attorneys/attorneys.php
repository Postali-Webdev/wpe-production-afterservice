<section class="attorneys-block">
    <div class="c-info u-block--accent-1 u-block-padding--xl c-background--relative">
        <div class="o-container">
            <div class="o-row align-items-center-xs">
                <div class="o-col--xxs-12 o-col--sm-10 o-col--offset-sm-1">
                    <div class="c-info__content">
                        <h2><?php the_field('attorneys_title'); ?></h2>

                        <?php if( have_rows('attorneys') ) : ?>
                        <div class="c-carousel__attorneys">
                            <?php while( have_rows('attorneys') ) : the_row(); ?>
                            <div class="c-carousel__item">
                                <div class="c-cases__item">
                                    
                                        <?php $bio_img = get_sub_field('bio_image'); if($bio_img) : ?>
                                            <div class="bio-img">
                                                <?php echo wp_get_attachment_image($bio_img['ID'], 'full'); ?>
                                                <?php if( get_sub_field('service_tag') ) : ?>
                                                    <div class="service-tag">
                                                        <p><?php the_sub_field('service_tag'); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="bio-copy">
                                            <div class="attorney-img"></div>
                                            <p class="c-page__title"><?php the_sub_field('name'); ?></p>
                                        </div>                                        
                                    
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
            <?php $lower_copy = get_field('attorneys_lower_copy'); ?>
            <div class="o-row lower-copy">
                <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5 o-col--offset-lg-1">
                    <div class="c-cta-secondary__content">                    
                        <h2 class=""><?php echo $lower_copy['title']; ?></h2>
                        <h3 class="u-text--accent-3"><?php echo $lower_copy['subtitle']; ?></h3>
                    </div>
                </div>

                <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5">
                    <div class="c-cta-secondary__content">
                        <?php echo $lower_copy['copy']; ?>
                        <a class="c-btn c-btn--secondary" href="<?php echo $lower_copy['button']['url']; ?>"><?php echo $lower_copy['button']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>