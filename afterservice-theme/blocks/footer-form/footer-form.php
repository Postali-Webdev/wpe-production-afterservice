<section class="footer-form" id="schedule-consultation">
    <div class="c-cta-secondary u-block-padding--xl u-block--white c-background--relative">
        <div class="o-container">
            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5 o-col--offset-lg-1">
                    <div class="c-cta-secondary__content">
                        <h2><?php the_field('footer_title'); ?></h2>
                        <?php the_field('footer_copy'); ?>
                    </div>
                </div>

                <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5">
                    <div class="c-cta-secondary__content">
                        <div class="c-contact__form">
                            <?php echo do_shortcode( get_field('footer_form_embed') ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>