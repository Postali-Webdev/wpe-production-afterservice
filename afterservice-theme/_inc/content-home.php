<?php

    // check if the flexible home field has rows of data
    if( have_rows('home') ):

        // loop through the rows of data
        while ( have_rows('home') ) : the_row();

            if( get_row_layout() == 'block_1_hero' ): 

                $block_1_title = get_sub_field('block_1_hero_title');
                $block_1_subtitle = get_sub_field('block_1_hero_subtitle');
                $block_1_text = get_sub_field('block_1_hero_text');
                $block_1_bg = get_sub_field('block_1_hero_background');
                $block_1_img = get_sub_field('block_1_hero_image');

                $block_1_img = get_sub_field('block_1_hero_image');
                $block_1_title_secondary = get_sub_field('block_1_hero_title_secondary');
                $block_1_link_secondary = get_sub_field('block_1_hero_link_secondary');

                $block_1_content_tertiary = get_sub_field('block_1_hero_content_tertiary');
                $block_1_title_tertiary = get_sub_field('block_1_hero_title_tertiary');
                $block_1_link_tertiary = get_sub_field('block_1_hero_link_tertiary');

            ?>

            <!-- Section -->

            <div class="c-hero c-hero--default u-block--white c-background--relative">

                <div class="o-container--wide">

                    <div class="o-row u-reset--gutter">

                        <div class="o-col--xxs-12 o-col--sm-6">

                            <div class="c-hero__top">
                                
                                <?php if ( $block_1_title ): ?>

                                    <p class="c-hero__title u-h1 u-text--accent-2 u-text--center u-text-sm--left">
                                        <?php echo $block_1_title; ?>
                                    </p>

                                <?php endif; ?>

                                <?php if ( $block_1_subtitle ): ?>

                                    <p class="c-hero__subtitle u-h2 u-text--regular u-visibility-hidden-xs--down">
                                        <?php echo $block_1_subtitle; ?>
                                    </p>

                                <?php endif; ?>

                                <?php if ( $block_1_text ): ?>

                                    <div class="c-hero__text">
                                        <?php echo $block_1_text; ?>
                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--sm-6">

                            <div class="c-hero__mobile--top u-visibility-hidden-sm--up">
                                
                                <?php if ( $block_1_link_tertiary ): ?>

                                    <a title="<?php echo $block_1_link_tertiary['title']; ?>" href="<?php echo $block_1_link_tertiary['url']; ?>" class="c-hero__mobile--link u-scroll">

                                        Tap For A Free Consultation

                                    </a>

                                <?php endif; ?>

                            </div>

                            <div class="c-hero__blocks u-visibility-hidden-xs--down">
                                
                                <div class="c-hero__block u-block--white">

                                    <div class="c-hero__block--top">

                                        <?php if ( $block_1_img ): ?>

                                            <img class="c-hero__video b-lazy"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 data-original="<?php echo $block_1_img['url']; ?>"
                                                 alt="<?php echo $block_1_img['alt']; ?>"
                                                 width="<?php echo $block_1_img['width']; ?>"
                                                 height="<?php echo $block_1_img['height']; ?>">

                                        <?php endif; ?>

                                        <?php if ( $block_1_link_secondary ): ?>
                                    
                                            <div class="c-hero__block--banner">

                                                <a title="<?php echo $block_1_link_secondary['title'] ?>" href="<?php echo $block_1_link_secondary['url'] ?>" data-fancybox class="c-hero__block--play-button">

                                                   <img width="131" height="131" src="https://afterservice.com/wp-content/themes/rada/images/hero-video-playbutton.png">

                                                   <img width="122" height="112" class="c-hero__block--play-button-chunks" src="https://afterservice.com/wp-content/themes/rada/images/hero-video-playbutton-chunks.png">
                                                   
                                               </a>

                                           </div>

                                       <?php endif; ?>

                                    </div>

                                    <?php if ( $block_1_title_secondary ): ?>

                                       <div class="c-hero__block--inner c-hero__block--spacer">
                                           <h3 class="c-hero__block--watch u-text--accent-1">
                                               <?php echo $block_1_title_secondary; ?>
                                           </h3>
                                       </div>

                                    <?php endif; ?>

                                </div>

                                <?php if ( $block_1_link_tertiary ): ?>

                                    <a title="<?php echo $block_1_link_tertiary['title']; ?>" href="<?php echo $block_1_link_tertiary['url']; ?>" class="c-hero__block c-hero--link u-scroll">

                                        <div class="c-hero__block--inner">

                                            <?php if ( $block_1_title_tertiary ): ?>
                                            
                                                <h3 class="u-h1 u-text--white u-text--xl">
                                                    <?php echo $block_1_title_tertiary; ?>
                                                </h3>

                                            <?php endif; ?>

                                            <?php if ( $block_1_content_tertiary ): ?>

                                                <p class="c-hero__msg u-text--white">
                                                    <?php echo $block_1_content_tertiary; ?>
                                                </p>

                                                <i class="c-hero__block--icon fa-sharp fa-thin fa-circle-arrow-right"></i>

                                            <?php endif; ?>

                                        </div>

                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php if ( $block_1_bg ): ?>

                    <div class="c-background c-background--base c-background--position-left c-background--cover b-lazy" data-original="<?php echo $block_1_bg['url']; ?>"></div>

                <?php endif; ?>

                <div class="c-hero__mobile--bottom u-visibility-hidden-sm--up">
                                
                    <a title="Learn More About The Firm" href="/the-firm/" class="c-hero__mobile--link-secondary">

                        Learn More About The Firm

                    </a>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_2_cta_primary' ): 

                $block_2_title = get_sub_field('block_2_cta_primary_title');
                $block_2_subtitle = get_sub_field('block_2_cta_primary_subtitle');
                $block_2_content = get_sub_field('block_2_cta_primary_content'); 
                $block_2_content_secondary = get_sub_field('block_2_cta_primary_content_secondary'); 
                $block_2_image = get_sub_field('block_2_cta_primary_image'); 
                $block_2_cta_image = get_sub_field('block_2_cta_primary_cta_image'); 
                $block_2_cta_title = get_sub_field('block_2_cta_primary_cta_title'); 
                $block_2_cta_link = get_sub_field('block_2_cta_primary_cta_link'); 

            ?>

            <!-- Section -->

            <div class="c-cta-primary u-block--accent-5">

                <div class="o-container--wide">
                        
                    <div class="o-row u-reset--gutter">

                        <div class="o-col--xxs-12 o-col--md-4 c-block--flex">

                            <div class="c-cta-primary__block u-block--white c-block--flex-grow">

                                <?php if ( $block_2_image ): ?>

                                    <div class="c-cta-primary__logo">
                                        <img class="b-lazy"
                                             src="data:image/    gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                             data-original="<?php echo $block_2_image['url']; ?>"
                                             alt="<?php echo $block_2_image['alt']; ?>"
                                             width="<?php echo $block_2_image['width']; ?>"
                                             height="<?php echo $block_2_image['height']; ?>">
                                    </div>

                                <?php endif; ?>

                                <?php if( get_sub_field('block_2_cta_primary_blocks') ): ?>

                                    <ul class="c-cta-primary__list c-list--unstyled">

                                        <?php while( has_sub_field('block_2_cta_primary_blocks') ): 

                                            $block_2_link = get_sub_field('block_2_cta_primary_link');

                                        ?>

                                            <li class="c-cta-primary__item">

                                                <?php if ( $block_2_link ): ?>

                                                    <a href="<?php echo $block_2_link['url']; ?>" class="c-cta-primary__link">
                                                        <?php echo $block_2_link['title']; ?>
                                                    </a>

                                                <?php endif; ?>

                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>

                            </div>

                        </div>
						
						<div class="o-col--xxs-12 o-col--md-8 c-block--flex">

                            <div class="c-cta-primary__content c-block--flex-grow">

                                <div class="o-row u-reset--gutter">

                                    <div class="o-col--xxs-12">
                                        
                                        <?php if ( $block_2_title ): ?>

                                            <h2 class="c-page__title">
                                                <?php echo $block_2_title; ?>
                                            </h2>

                                        <?php endif; ?>

                                        <?php if ( $block_2_subtitle ): ?>

                                            <h3>
                                                <?php echo $block_2_subtitle; ?>
                                            </h3>

                                            <hr>

                                        <?php endif; ?>

                                    </div>
                                    
                                    <div class="o-col--xxs-12 o-col--md-6">

                                        <div class="c-cta-primary__info">
                                        
                                            <?php if( $block_2_content ): ?>

                                                <div class="c-cta-primary__text">

                                                    <?php echo $block_2_content; ?>

                                                </div>
                                            
                                            <?php endif; ?>

                                            <?php if( get_sub_field('block_2_cta_secondary_blocks') ): ?>

                                                <ul class="c-accordion c-list--unstyled" role="tablist" aria-multiselectable="true">

                                                    <?php while( has_sub_field('block_2_cta_secondary_blocks') ): 

                                                        $block_2_title = get_sub_field('block_2_cta_secondary_blocks_title');
                                                        $block_2_content = get_sub_field('block_2_cta_secondary_blocks_content');

                                                    ?>

                                                        <li class="c-accordion__panel">

                                                            <?php if ( $block_2_title ): ?>

                                                                <button class="c-accordion__title"><?php echo $block_2_title; ?></button>

                                                            <?php endif; ?>

                                                            <?php if ( $block_2_content ): ?>
                                                            
                                                                <div class="c-accordion__content" role="tabpanel">

                                                                    <?php echo $block_2_content; ?>

                                                                </div>

                                                            <?php endif; ?>

                                                        </li>

                                                    <?php endwhile; ?>

                                                </ul>

                                            <?php endif; ?>

                                            <?php if( $block_2_content_secondary ): ?>

                                                <div class="c-cta-primary__text">

                                                    <?php echo $block_2_content_secondary; ?>

                                                </div>
                                            
                                            <?php endif; ?>

                                            <?php if( get_sub_field('block_2_cta_tertiary_blocks') ): ?>

                                                <ul class="c-accordion c-list--unstyled" role="tablist" aria-multiselectable="true">

                                                    <?php while( has_sub_field('block_2_cta_tertiary_blocks') ): 

                                                        $block_2_title = get_sub_field('block_2_cta_tertiary_blocks_title');
                                                        $block_2_content = get_sub_field('block_2_cta_tertiary_blocks_content');

                                                    ?>

                                                        <li class="c-accordion__panel">

                                                            <?php if ( $block_2_title ): ?>

                                                                <button class="c-accordion__title"><?php echo $block_2_title; ?></button>

                                                            <?php endif; ?>

                                                            <?php if ( $block_2_content ): ?>
                                                            
                                                                <div class="c-accordion__content" role="tabpanel">

                                                                    <?php echo $block_2_content; ?>

                                                                </div>

                                                            <?php endif; ?>

                                                        </li>

                                                    <?php endwhile; ?>

                                                </ul>

                                            <?php endif; ?>
                                            
                                        </div>

                                    </div>

                                    <div class="o-col--xxs-12 o-col--md-5 o-col--offset-md-1">

                                        <div class="c-cta-primary__cta u-block--accent-2 c-background--relative">

                                            <?php if ( $block_2_cta_title ): ?>

                                                <h2 class="u-text--white">
                                                    <?php echo $block_2_cta_title; ?>
                                                </h2>

                                            <?php endif; ?>
                                        
                                            <?php if ( $block_2_cta_image ): ?>

                                                <div class="c-background c-background--base c-background--position-left c-background--cover b-lazy" data-original="<?php echo $block_2_cta_image; ?>"></div>

                                            <?php endif; ?>

                                            <?php if ( $block_2_cta_link ): ?>
                                        
                                                <a href="<?php echo $block_2_cta_link['url']; ?>" class="c-btn c-btn--secondary">
                                                    <?php echo $block_2_cta_link['title']; ?>
                                                </a>

                                            <?php endif; ?>
                                                
                                        </div>

                                    </div>

                                </div>

                            </div>
							
						</div>

                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_3_awards' ): ?>

            <!-- Section -->

            <div class="c-awards u-block--white u-block-padding--lg">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if ( get_sub_field('block_3_awards_title') ): ?>

                                <h2 class="u-text--accent-3 u-text--line u-text--center">
                                    <?php the_sub_field('block_3_awards_title'); ?>
                                </h2>

                            <?php endif; ?>

                            <?php if( get_sub_field('block_3_awards_blocks') ): ?>

                                <div class="c-awards__content c-block--flex c-block--flex-v-center c-block--flex-around u-text--center">

                                    <?php while( has_sub_field('block_3_awards_blocks') ): 

                                        $block_3_img = get_sub_field('block_3_awards_image');
                                        $block_3_link = get_sub_field('block_3_awards_link');

                                    ?>

                                    <div class="c-awards__img">
                                        
                                        <?php if ( $block_3_img ): ?>

                                            <?php if ( $block_3_link ): ?>

                                                <a href="<?php echo $block_3_link['url']; ?>">

                                            <?php endif; ?>

                                            <img class="u-reset--margin b-lazy"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 data-original="<?php echo $block_3_img['url']; ?>"
                                                 alt="<?php echo $block_3_img['alt']; ?>"
                                                 width="<?php echo $block_3_img['width']; ?>"
                                                 height="<?php echo $block_3_img['height']; ?>">

                                            <?php if ( $block_3_link ): ?>

                                                </a>

                                            <?php endif; ?>

                                        <?php endif; ?>

                                    </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_4_info' ): 

                $block_4_title = get_sub_field('block_4_info_title');
                $block_4_subtitle = get_sub_field('block_4_info_subtitle');
                $block_4_content = get_sub_field('block_4_info_content');
                $block_4_img = get_sub_field('block_4_info_image');
                $block_4_link = get_sub_field('block_4_info_link');
                $block_4_button = get_sub_field('block_4_info_button');

            ?>

            <!-- Section -->

            <div class="c-info u-block--accent-1 u-block-padding--xl c-background--relative">

                <div class="o-container">

                    <div class="o-row align-items-center-xs">

                        <div class="o-col--xxs-12 o-col--sm-10 o-col--offset-sm-1">

                            <?php if ( $block_4_img ): ?>
                            
                                <div class="c-info__block">

                                    <?php if ( $block_4_link ): ?>

                                        <a class="c-info__link" data-fancybox href="<?php echo $block_4_link['url']; ?>" title="<?php echo $block_4_link['title']; ?>">

                                    <?php endif; ?>


                                            <img class="c-info__image u-reset--margin b-lazy"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 data-original="<?php echo $block_4_img['url']; ?>"
                                                 alt="<?php echo $block_4_img['alt']; ?>"
                                                 width="<?php echo $block_4_img['width']; ?>"
                                                 height="<?php echo $block_4_img['height']; ?>">

                                            <span class="c-info__icon"><i class="fa fa-play" aria-hidden="true"></i></span>


                                    <?php if ( $block_4_link ): ?>

                                        </a>

                                    <?php endif; ?>

                                </div>
                            
                            <?php endif; ?>


                            <div class="c-info__content">

                                <?php if ( $block_4_title ): ?>
                            
                                    <h2>
                                        <?php echo $block_4_title; ?>
                                    </h2>

                                <?php endif; ?>

                                <?php if ( $block_4_subtitle ): ?>
                            
                                    <h3>
                                        <?php echo $block_4_subtitle; ?>
                                    </h3>

                                    <hr>

                                <?php endif; ?>

                                <?php if ( $block_4_content ): ?>

                                    <?php echo $block_4_content; ?>

                                <?php endif; ?>

                                <?php if ( $block_4_button ): ?>

                                    <a href="<?php echo $block_4_button['url']; ?>" class="c-btn c-btn--primary">
                                        <?php echo $block_4_button['title']; ?>
                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_5_cta_secondary' ): 

                $block_5_title    = get_sub_field('block_5_cta_secondary_title');
                $block_5_subtitle = get_sub_field('block_5_cta_secondary_subtitle');
                $block_5_content  = get_sub_field('block_5_cta_secondary_content');
                $block_5_content_secondary  = get_sub_field('block_5_cta_secondary_content_secondary');
                $block_5_bg       = get_sub_field('block_5_cta_secondary_background');

            ?>

            <!-- Section -->

            <div class="c-cta-secondary u-block-padding--xl u-block--white c-background--relative">

                <div class="o-container">

                    <div class="o-row align-items-center-md">

                        <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5 o-col--offset-lg-1">

                            <div class="c-cta-secondary__content">

                                <?php if ( $block_5_title ): ?>
                                
                                    <h1 class="c-page__title">
                                        <?php echo $block_5_title; ?>
                                    </h1>

                                <?php endif; ?>

                                <?php if ( $block_5_subtitle ): ?>

                                    <h3 class="u-text--accent-3">
                                        <?php echo $block_5_subtitle; ?>
                                    </h3>

                                <?php endif; ?>

                                <?php if ( $block_5_content ): ?>

                                    <?php echo $block_5_content; ?>

                                <?php endif; ?>
                            
                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-6 o-col--lg-5">

                            <?php if ( $block_5_content_secondary ): ?>

                                <div class="c-cta-secondary__content">

                                    <?php echo $block_5_content_secondary; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_6_reviews' ): 

            $block_6_quote = get_sub_field('block_6_reviews_quote');
            $block_6_author = get_sub_field('block_6_reviews_author');
            $block_6_title = get_sub_field('block_6_reviews_title');
            $block_6_subtitle = get_sub_field('block_6_reviews_subtitle');
            $block_6_bg = get_sub_field('block_6_reviews_background');
            $block_6_link = get_sub_field('block_6_reviews_link');

        ?>

        <!-- Section -->

        <div class="c-reviews u-block--accent-2 c-background--relative">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-4">

                        <?php if ( $block_6_title ): ?>
                        
                            <h2 class="c-reviews__title u-h3 u-text--white">
                                <?php echo $block_6_title; ?>
                            </h2>

                        <?php endif; ?>

                        <?php if ( $block_6_subtitle ): ?>
                        
                            <h3 class="u-text--accent-3">
                                <?php echo $block_6_subtitle; ?>
                            </h3>

                        <?php endif; ?>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-6 o-col--offset-md-2">

                        <?php if( get_sub_field('block_6_reviews_blocks') ): ?>

                            <div class="c-carousel__reviews">

                                <?php while( has_sub_field('block_6_reviews_blocks') ): 

                                    $block_6_quote = get_sub_field('block_6_reviews_quote');
                                    $block_6_author = get_sub_field('block_6_reviews_author');
                                    $block_6_platform = get_sub_field('block_6_reviews_platform');

                                ?>

                                <div class="c-carousel__item">

                                    <?php if ( $block_6_quote ): ?>
                                    
                                        <div class="c-reviews__block">

                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_dist/img/img-stars.jpg">
                                            
                                            <blockquote class="u-reset--blockquote">

                                                <div class="c-reviews__quote"><?php echo $block_6_quote; ?></div>

                                                <?php if ( $block_6_author ): ?>
                                                    <cite class="c-reviews__author"><?php echo $block_6_author; ?></cite>
                                                <?php endif; ?>

                                            </blockquote>

                                            <?php if ( $block_6_platform ): ?>

                                                <div class="c-reviews__logo">
                                                    <img class="u-reset--margin"
                                                         data-lazy="<?php echo $block_6_platform['url']; ?>"
                                                         alt="<?php echo $block_6_platform['alt']; ?>"
                                                         width="<?php echo $block_6_platform['width']; ?>"
                                                         height="<?php echo $block_6_platform['height']; ?>">
                                                </div>

                                            <?php endif; ?>

                                        </div>

                                    <?php endif; ?>

                                </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                        <span class="c-reviews__counter"></span>

                        <?php if ( $block_6_link ): ?>

                            <div class="u-text--center">
                                
                                <a class="c-btn c-btn--secondary" href="<?php echo $block_6_link['url']; ?>"><?php echo $block_6_link['title']; ?></a>
                                
                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_6_bg ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_6_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_7_featured_review' ): 

            $block_7_img = get_sub_field('block_7_featured_review_image');
            $block_7_quote = get_sub_field('block_7_featured_review_quote');
            $block_7_author = get_sub_field('block_7_featured_review_author');
            $block_7_show_rating = get_sub_field('block_7_featured_review_show_rating');

        ?>

        <!-- Section -->

        <div class="c-featured-review u-block-padding--xl u-block--white">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--lg-10 o-col--offset-lg-1">

                        <?php if ( $block_7_img ): ?>

                            <img class="u-img--full u-reset--margin b-lazy"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-original="<?php echo $block_7_img['url']; ?>"
                                 alt="<?php echo $block_7_img['alt']; ?>"
                                 width="<?php echo $block_7_img['width']; ?>"
                                 height="<?php echo $block_7_img['height']; ?>">

                        <?php endif; ?>

                        <div class="c-featured-review__content">

                            <?php if ( $block_7_show_rating === 'yes' ): ?>

                                <ul class="c-featured-review__rating c-list--inline">
                                    <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                </ul>

                            <?php endif; ?>

                            <?php if ( $block_7_quote ): ?>

                                <blockquote class="c-featured-review__quote u-reset--blockquote">
                                    <p><?php echo $block_7_quote; ?></p>

                                    <?php if ( $block_7_author ): ?>
                                        <cite><?php echo $block_7_author; ?></cite>
                                    <?php endif; ?>
                                </blockquote>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_8_cta_tertiary' ): 

            $block_8_content_primary = get_sub_field('block_8_cta_tertiary_content_primary');
            $block_8_content_secondary = get_sub_field('block_8_cta_tertiary_content_secondary');
            $block_8_title_secondary = get_sub_field('block_8_cta_tertiary_title_secondary');
            $block_8_subtitle_secondary = get_sub_field('block_8_cta_tertiary_subtitle_secondary');
            $block_8_bg = get_sub_field('block_8_cta_tertiary_background');
            $block_8_bg_secondary = get_sub_field('block_8_cta_tertiary_background_secondary');

        ?>

        <!-- Section -->

        <div class="c-cta-tertiary c-background--gradient-2 u-block--white u-block-padding--lg">

            <div class="o-container">

                <div class="o-row">
                    
                    <div class="o-col--xxs-12 o-col--md-6">

                        <div class="c-cta-tertiary__block">

                            <div class="c-cta-tertiary__bg c-background--relative">

                                <?php if ( $block_8_bg ): ?>

                                    <div class="c-background c-background--base c-background--position-top c-background--cover b-lazy" data-original="<?php echo $block_8_bg; ?>"></div>

                                <?php endif; ?>

                                <?php if ( $block_8_content_primary ): ?>

                                    <div class="c-cta-tertiary__content-primary u-text--white">
                                        
                                        <?php echo $block_8_content_primary; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-6">

                        <div class="c-cta-tertiary__block">

                            <div class="c-cta-tertiary__bg c-background--relative">

                                <?php if ( $block_8_bg_secondary ): ?>

                                    <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_8_bg_secondary; ?>"></div>

                                <?php endif; ?>

                                <?php if ( $block_8_content_secondary ): ?>

                                    <div class="c-cta-tertiary__content-secondary u-text--white">
                                        
                                        <?php echo $block_8_content_secondary; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-12">

                        <div class="u-block-padding--lg">
                            
                            <?php if ( $block_8_title_secondary ): ?>

                                <h2 class="c-cta-tertiary__title_secondary u-text--center u-text--xl u-text--accent-3">
                                    
                                    <?php echo $block_8_title_secondary; ?>

                                </h2>

                            <?php endif; ?>

                            <?php if ( $block_8_subtitle_secondary ): ?>

                                <h3 class="c-cta-tertiary__subtitle_secondary u-text--center u-text--accent-1">
                                    
                                    <?php echo $block_8_subtitle_secondary; ?>

                                </h3>

                            <?php endif; ?>

                        </div>

                        <?php if( get_sub_field('block_8_cta_tertiary_blocks') ): ?>

                            <ul class="c-accordion c-list--unstyled" role="tablist" aria-multiselectable="true">

                                <?php while( has_sub_field('block_8_cta_tertiary_blocks') ): 

                                    $block_8_title = get_sub_field('block_8_cta_tertiary_blocks_title');
                                    $block_8_content = get_sub_field('block_8_cta_tertiary_blocks_content');

                                ?>

                                    <li class="c-accordion__panel">

                                        <?php if ( $block_8_title ): ?>

                                            <button class="c-accordion__title"><?php echo $block_8_title; ?></button>

                                        <?php endif; ?>

                                        <?php if ( $block_8_content ): ?>
                                        
                                            <div class="c-accordion__content" role="tabpanel">

                                                <?php echo $block_8_content; ?>

                                            </div>

                                        <?php endif; ?>

                                    </li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_9_cases' ): 

            $block_9_title     = get_sub_field('block_9_cases_title');
            $block_9_subtitle  = get_sub_field('block_9_cases_subtitle');
            $block_9_content   = get_sub_field('block_9_cases_content');
            $block_9_show_info = get_sub_field('block_9_cases_show_contact_info');
            $block_9_bg        = get_sub_field('block_9_cases_background');

        ?>

        <!-- Section -->

        <div class="c-cases u-block--accent-2 u-block-padding--xl c-background--relative">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">
                        
                        <div class="c-cases__content u-text--center u-text--white">

                            <?php if ( $block_9_title ): ?>

                                <h2 class="c-cases__title u-text--center"><?php echo $block_9_title; ?></h2>

                                <hr class="u-block-hr--narrow u-block-hr--accent-1">

                            <?php endif; ?>

                            <?php if ( $block_9_subtitle ): ?>

                                <p class="c-cases__subtitle u-reset-font--secondary"><?php echo $block_9_subtitle; ?></p>

                            <?php endif; ?>


                            <?php if ( $block_9_content ): ?>

                                <div class="c-cases__text">
                                    
                                    <?php echo $block_9_content; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if( have_rows('block_9_cases_blocks') ): ?>
                        
                            <div class="c-carousel__cases">

                                <?php while( have_rows('block_9_cases_blocks') ): the_row(); 

                                    $block_9_revenue     = get_sub_field('block_9_cases_revenue');
                                    $block_9_date        = get_sub_field('block_9_cases_date');
                                    $block_9_status      = get_sub_field('block_9_cases_status');
                                    $block_9_description = get_sub_field('block_9_cases_description');

                                ?>

                                    <div class="c-carousel__item">

                                        <div class="c-cases__item">
                                            
                                            <?php if ( $block_9_revenue ): ?>

                                                <p class="c-cases__revenue">
                                                    <?php echo $block_9_revenue; ?>
                                                </p>

                                            <?php endif; ?>

                                            <?php if ( $block_9_status ): ?>

                                                <p class="c-cases__status u-reset--margin">
                                                    <?php echo $block_9_status; ?>
                                                </p>

                                            <?php endif; ?>

                                            <?php if ( $block_9_date ): ?>

                                                <p class="c-cases__date u-reset--margin">
                                                    <?php echo $block_9_date; ?>
                                                </p>

                                            <?php endif; ?>

                                            <?php if ( $block_9_description ): ?>

                                                <p class="c-cases__description">
                                                    <?php echo $block_9_description; ?>
                                                </p>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                        <?php if ( $block_9_show_info === 'yes' ): ?>

                            <div class="u-text--center">
                                
                                <p class="c-cases__msg u-reset-font--secondary u-text--accent-1">
                                    24/7 Live Answering <span>Call us to get started</span>
                                </p>

                                <?php

                                    $phone = get_field('phones', 'options');

                                    if ( $phone ): ?>

                                        <a class="c-cases__phone u-reset-font--secondary u-text--white" href="tel:<?php echo preg_replace('~[^\d]+~', '', $phone[0]['phone_number']); ?>">
                                            <?php echo $phone[0]['phone_number']; ?> 
                                        </a>

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_9_bg ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_9_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_10_info_secondary' ): 

            $block_10_title    = get_sub_field('block_10_info_secondary_title');
            $block_10_subtitle = get_sub_field('block_10_info_secondary_subtitle');
            $block_10_content  = get_sub_field('block_10_info_secondary_content');
            $block_10_image    = get_sub_field('block_10_info_secondary_image');

        ?>

        <!-- Section -->

        <div class="c-info-secondary u-block--accent-2 u-block-padding--xl c-background--relative">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                        <div class="u-text--center u-block-padding--lg u-reset--padding-top">

                            <?php if ( $block_10_title ): ?>
                    
                                <h2 class="c-info-secondary__title u-text--white">
                                    <?php echo $block_10_title; ?>
                                </h2>

                            <?php endif; ?>

                            <?php if ( $block_10_subtitle ): ?>
                        
                                <h3>
                                    <?php echo $block_10_subtitle; ?>
                                </h3>

                                <hr class="u-block-hr--narrow u-block-hr--accent-1">

                            <?php endif; ?>

                            <?php if ( $block_10_content ): ?>

                                <div class="c-info-secondary__content">

                                    <?php echo $block_10_content; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <div class="o-row">

                    <?php if( get_sub_field('block_10_info_secondary_blocks') ): ?>

                        <div class="o-col--xxs-12">

                            <div class="c-info-secondary__blocks">

                                <?php while( has_sub_field('block_10_info_secondary_blocks') ): 

                                    $block_10_title    = get_sub_field('block_10_info_secondary_blocks_title');
                                    $block_10_subtitle = get_sub_field('block_10_info_secondary_blocks_subtitle');
                                    $block_10_content  = get_sub_field('block_10_info_secondary_blocks_content');
                                    $block_10_icon     = get_sub_field('block_10_info_secondary_blocks_icon');

                                ?>

                                        
                                        <div class="c-info-secondary__block u-text--center">
                                            
                                            <?php if ( $block_10_icon ): ?>

                                                <img class="c-info-secondary__icon u-reset--margin b-lazy"
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     data-original="<?php echo $block_10_icon['url']; ?>"
                                                     alt="<?php echo $block_10_icon['alt']; ?>"
                                                     width="<?php echo $block_10_icon['width']; ?>"
                                                     height="<?php echo $block_10_icon['height']; ?>">

                                            <?php endif; ?>

                                            <div class="c-info-secondary__info">
                                                
                                                <?php if ( $block_10_title ): ?>

                                                    <h3 class="u-reset-font--primary-bold u-reset--margin u-text--accent-1">
                                                        <?php echo $block_10_title; ?>
                                                    </h3>

                                                <?php endif; ?>

                                                <?php if ( $block_10_subtitle ): ?>

                                                    <h4 class="u-reset-font--secondary-bold u-reset--margin u-text--accent-2">
                                                        <?php echo $block_10_subtitle; ?>
                                                    </h4>

                                                <?php endif; ?>

                                                <?php if ( $block_10_content ): ?>

                                                    <p>
                                                        <?php echo $block_10_content; ?>
                                                    </p>

                                                <?php endif; ?>

                                            </div>

                                        </div>


                                <?php endwhile; ?>

                            </div>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_11_services' ): 

            $block_11_title = get_sub_field('block_11_services_title');
            $block_11_subtitle = get_sub_field('block_11_services_subtitle');
            $block_11_content = get_sub_field('block_11_services_content');

        ?>

        <!-- Section -->

        <div class="c-services u-block--white u-block-padding--lg">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                        <div class="c-services__content u-text--center">

                            <?php if ( $block_11_title ): ?>

                                <h2><?php echo $block_11_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_11_subtitle ): ?>

                                <h3><?php echo $block_11_subtitle; ?></h3>

                                <hr class="u-block-hr--narrow u-block-hr--accent-4">

                            <?php endif; ?>

                            <?php if ( $block_11_content ): ?>

                                <div><?php echo $block_11_content; ?></div>

                            <?php endif; ?> 

                        </div>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if( have_rows('block_11_services_blocks') ): ?>
                        
                            <ul class="c-services__list c-list--unstyled">

                                <?php while( have_rows('block_11_services_blocks') ): the_row(); 

                                    $block_11_img = get_sub_field('block_11_services_image');
                                    $block_11_description = get_sub_field('block_11_services_description');
                                    $block_11_title = get_sub_field('block_11_services_title');
                                    $block_11_link = get_sub_field('block_11_services_link');

                                ?>

                                    <li class="c-services__item">

                                        <div class="c-services__link">

                                            <?php if ( $block_11_img ): ?>

                                                <div class="c-services__img c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_11_img; ?>"></div>

                                                <div class="c-services__block u-text--white">
                                                    
                                                    <?php if ( $block_11_title ): ?>

                                                        <h3 class="c-services__title"><?php echo $block_11_title; ?></h3>

                                                    <?php endif; ?>

                                                    <div class="c-services__description u-text--accent-4">

                                                        <?php if ( $block_11_description ): ?>

                                                            <?php echo $block_11_description; ?>

                                                        <?php endif; ?>

                                                        <?php if ( $block_11_link ): ?>

                                                            <a class="c-btn c-btn--primary" href="<?php echo $block_11_link['url']; ?>"><?php echo $block_11_link['title']; ?></a>

                                                        <?php endif; ?>

                                                    </div>

                                                </div>

                                            <?php endif; ?>

                                        </div>

                                    </li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_12_form' ): 

            $block_12_title   = get_sub_field('block_12_form_title');
            $block_12_subtitle   = get_sub_field('block_12_form_subtitle');
            $block_12_content   = get_sub_field('block_12_form_content');
            $block_12_link   = get_sub_field('block_12_form_link');
            $block_12_form   = get_sub_field('block_12_form_snippet');
            $block_12_bg   = get_sub_field('block_12_form_background');

        ?>

        <!-- Section -->

         <div class="c-hero-form u-block-padding--xl u-block--accent-2 c-background--relative">

            <div class="o-container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8">

                        <?php if ( $block_12_title ): ?>

                            <h1 class="u-text--white">
                                <?php echo $block_12_title; ?>
                            </h1>

                        <?php endif; ?>

                        <?php if ( $block_12_subtitle ): ?>

                            <h2 class="u-text--white">
                                <?php echo $block_12_subtitle; ?>
                            </h2>

                        <?php endif; ?>

                        <?php if ( $block_12_content ): ?>

                            <div class="c-hero__text u-text--white">
                                <?php echo $block_12_content; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ( $block_12_link ): ?>
                        
                            <a href="<?php echo $block_12_link['url']; ?>" class="c-btn c-btn--secondary">
                                <?php echo $block_12_link['title']; ?>
                            </a>

                        <?php endif; ?>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-4">

                        <div class="c-hero__form">

                            <?php echo $block_12_form; ?>

                        </div>

                    </div>

                </div>

            </div>

            <?php if ( $block_12_bg ): ?>

                <div class="c-hero__bg c-background c-background--base c-background--position-right c-background--cover b-lazy" data-original="<?php echo $block_12_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_13_google_reviews' ): 

            $block_13_content = get_sub_field('block_13_content');

        ?>

            <!-- Section -->

            <div class="c-google-reviews u-block-padding--lg">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if ( $block_13_content ): ?>

                                <div><?php echo $block_13_content; ?></div>

                            <?php endif; ?> 

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_14_content' ): 

            $block_14_content = get_sub_field('block_14_content_block');

        ?>

            <!-- Section -->

            <div class="c-content-block u-block-padding--xl">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if ( $block_14_content ): ?>

                                <div><?php echo $block_14_content; ?></div>

                            <?php endif; ?> 

                        </div>

                    </div>

                </div>

            </div>

            <?php endif;

        endwhile;

    else : ?>

    <div class="u-block-gradient--left u-block-padding--xl">

        <div class="o-container">

            <div class="o-row">

                <div class="o-col--md-10 o-col--offset-md-1 o-col--lg-8 o-col--offset-lg-2 u-text--center">

                    <h4>No content blocks</h4>

                    <?php
                        if( is_user_logged_in()) : ?>

                        <a class="c-btn c-btn--purple" href="<?php echo get_edit_post_link(); ?>">
                            Add content
                        </a>

                    <?php else: ?>

                        <a class="c-btn c-btn--purple" href="<?php bloginfo('url'); ?>/wp-admin">
                            Login to add content
                        </a>

                     <?php endif;?>

                </div>

            </div>

        </div>

    </div>

<?php endif; ?>