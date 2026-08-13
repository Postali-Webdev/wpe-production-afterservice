<section class="results-block">
    <div class="c-cases u-block--accent-2 u-block-padding--xl c-background--relative">
        <div class="o-container">
            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">
                    <div class="c-cases__content u-text--center u-text--white">
                        <h2 class="c-cases__title u-text--center"><?php the_field('results_title'); ?></h2>
                        <hr class="u-block-hr--narrow u-block-hr--accent-1">
                        <div class="c-cases__text">
                            <?php the_field('results_copy'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="o-row">
                <div class="o-col--xxs-12 o-col--md-12">
                    <?php if( have_rows('results') ) : ?>
                    <div class="c-carousel__cases">
                        <?php while( have_rows('results') ) : the_row(); ?>
                        <div class="c-carousel__item">
                            <div class="c-cases__item">
                                <p class="c-cases__revenue"><?php the_sub_field('revenue'); ?></p>
                                <p class="c-cases__status u-reset--margin"><?php the_sub_field('status'); ?></p>
                                <p class="c-cases__date u-reset--margin"><?php the_sub_field('date'); ?></p>
                                <p class="c-cases__description"><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>