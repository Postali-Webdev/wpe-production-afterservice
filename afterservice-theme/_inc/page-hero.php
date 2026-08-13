<?php

    // check if the flexible subpage field has rows of data
    if( have_rows('subpage') ):

        // loop through the rows of data
        while ( have_rows('subpage') ) : the_row();

            if( get_row_layout() == 'block_1_hero' ): 

                $block_1_title = get_sub_field('block_1_hero_title');
                $block_1_subtitle = get_sub_field('block_1_hero_subtitle');
                $block_1_text = get_sub_field('block_1_hero_text');
                $block_1_link = get_sub_field('block_1_hero_link');
                $block_1_bg = get_sub_field('block_1_hero_background');

            ?>

            <!-- Section -->

            <div class="c-hero-subpage c-hero--default u-block--accent-1 c-background--relative">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-7">

                            <?php if ( $block_1_title ): ?>

                                <h1 class="c-hero__title u-text--white">
                                    <?php echo $block_1_title; ?>
                                </h1>

                            <?php endif; ?>

                            <?php if ( $block_1_subtitle ): ?>

                                <span class="c-hero__subtitle">
                                    <?php echo $block_1_subtitle; ?>
                                </span>

                            <?php endif; ?>

                            <?php if ( $block_1_text ): ?>

                                <div class="c-hero__text u-text--white">
                                    <?php echo $block_1_text; ?>
                                </div>

                            <?php endif; ?>

                            <?php if( get_sub_field('block_1_hero_social') ): ?>

                                <div class="c-hero__social u-text--white">

                                    <p class="u-h5 u-text--white u-reset--margin u-reset-font--tertiary">
                                        Social
                                    </p>

                                    <ul class="c-hero__social-list c-list--unstyled">

                                        <?php while( has_sub_field('block_1_hero_social') ): 
                                            
                                            $block_1_socialIcon = get_sub_field('block_1_hero_social_icon');
                                            $block_1_socialLink = get_sub_field('block_1_hero_social_link');
                                            $block_1_socialTitle = get_sub_field('block_1_hero_social_title');

                                        ?>

                                            <?php if ( $block_1_socialIcon ): ?>

                                                <li class="c-hero__social-item">

                                                    <a class="c-hero__social-link"
                                                       target="_blank"
                                                       rel="noopener"
                                                       aria-label="<?php echo $block_1_socialTitle; ?>"
                                                       title="<?php echo $block_1_socialTitle; ?>"
                                                       href="<?php echo $block_1_socialLink['url']; ?>">
                                                             <i class="fab <?php echo $block_1_socialIcon; ?>"></i>
                                                            <span class="u-visibility--sr-only"><?php echo $block_1_socialTitle; ?></span>
                                                    </a>

                                                </li>

                                            <?php endif; ?>

                                        <?php endwhile; ?>

                                    </ul>

                                </div>

                            <?php endif; ?>

                            <?php if ( $block_1_link ): ?>
                            
                                <a href="<?php echo $block_1_link['url']; ?>" class="c-btn c-btn--primary">
                                    <?php echo $block_1_link['title']; ?>
                                </a>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php if ( $block_1_bg ): ?>

                    <div class="c-hero__bg c-background c-background--base c-background--position-right c-background--cover b-lazy" data-original="<?php echo $block_1_bg['url']; ?>"></div>

                <?php endif; ?>

            </div>

        <?php  endif;

        endwhile;

    endif; ?>