<section class="cta-block">
    <div class="c-cta-tertiary c-background--gradient-2 u-block--white u-block-padding--lg">
        <div class="o-container">
            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-12">
                    <div class="cta-wrapper">
                        <h2 class="c-cta-tertiary__title_secondary u-text--center u-text--xl u-text--accent-3">
                            <?php the_field('cta_title'); ?>
                        </h2>
                        <?php the_field('cta_copy'); ?>
                        <?php $cta_button = get_field('cta_button'); if($cta_button) : ?>
                            <a class="c-btn c-btn--secondary" href="<?php echo $cta_button['url']; ?>"><?php echo $cta_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>