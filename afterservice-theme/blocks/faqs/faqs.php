<section class="faqs-block">
    <div class="c-cta-tertiary c-background--gradient-2 u-block--white u-block-padding--lg">
        <div class="o-container">
            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-12">

                    <div class="u-block-padding--lg">
                        <h2 class="c-cta-tertiary__title_secondary u-text--center u-text--xl u-text--accent-3">
                            <?php the_field('title'); ?>
                        </h2>
                    </div>

                        
                    <?php if( have_rows('accordions') ) : ?>
                    <ul class="c-accordion c-list--unstyled" role="tablist" aria-multiselectable="true">   
                        <?php while( have_rows('accordions') ) : the_row(); ?>    
                        <li class="c-accordion__panel">
                            <button class="c-accordion__title"><?php the_sub_field('label'); ?></button>
                            
                            <div class="c-accordion__content" role="tabpanel" style="display: none;">
                                <?php the_sub_field('copy'); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>