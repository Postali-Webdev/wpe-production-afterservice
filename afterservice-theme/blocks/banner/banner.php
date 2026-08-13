<section class="banner-block">
    <div class="c-content c-content-bio">
        <div class="o-container--wide">
            <div class="o-row u-reset--gutter align-items-center-md">
                <div class="o-col--xxs-12 o-col--md-8">
                    <div class="o-content">
                        <p class="eyebrow u-text--accent-3"><?php the_field('banner_eyebrow'); ?></p>
                        <h1 class="c-page__title"><?php the_field('banner_title'); ?></span></h1>
                        <?php the_field('banner_copy'); ?>
                        <?php $cta_group = get_field('banner_cta'); ?>
                        <div class="cta-wrapper">
                            <p class="u-text--accent-3"><?php echo $cta_group['copy']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="o-col--xxs-12 o-col--md-4">
                    <aside class="c-sidebar">
                        <div class="c-sidebar__form">
                            <h3 class="u-h2 u-text--white u-text--center u-reset--margin-bottom">Request a Free Consultation</h3>
                            <p class="u-text--white u-text--center u-reset-font--primary-italic-bold">Get your no cost case review. <br>*All fields required.</p>
                            <?php echo do_shortcode( get_field('banner_form_embed') );  ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <?php if( get_field('banner_enable_awards') ) : ?>
        <?php if ( get_field('awards', 'options') ): ?>
            <div class="c-footer__awards">
                <?php while( has_sub_field('awards', 'options') ): 
                    $image = get_sub_field('image'); ?>
                    <?php if ( $image ): ?>
                        <div class="c-footer__award">
                            <img class="u-reset--margin" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>