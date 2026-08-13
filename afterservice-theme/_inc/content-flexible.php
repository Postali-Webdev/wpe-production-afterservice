<?php

    // check if the flexible subpage field has rows of data
    if( have_rows('subpage') ):

        // loop through the rows of data
        while ( have_rows('subpage') ) : the_row();


        if( get_row_layout() == 'block_2_awards' ): 

            $block_2_title = get_sub_field('block_2_awards_title');

        ?>

            <!-- Section -->

            <div class="c-awards u-block-padding--md">

                <?php if ( $block_2_title ): ?>
                
                    <h2 class="u-text--center">
                        <?php echo $block_2_title; ?>
                    </h2>

                <?php endif; ?>

                <?php if( get_sub_field('block_2_awards_blocks') ): ?>

                    <div class="c-awards__content c-block--flex c-block--flex-v-center c-block--flex-around u-text--center">

                        <?php while( has_sub_field('block_2_awards_blocks') ): 

                            $block_2_img = get_sub_field('block_2_awards_image');
                            $block_2_link = get_sub_field('block_2_awards_link');

                        ?>

                        <div class="c-awards__img">
                            
                            <?php if ( $block_2_img ): ?>

                                <?php if ( $block_2_link ): ?>

                                    <a href="<?php echo $block_2_link['url']; ?>">

                                <?php endif; ?>

                                <img class="u-reset--margin b-lazy"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                     data-original="<?php echo $block_2_img['url']; ?>"
                                     alt="<?php echo $block_2_img['alt']; ?>"
                                     width="<?php echo $block_2_img['width']; ?>"
                                     height="<?php echo $block_2_img['height']; ?>">

                                <?php if ( $block_2_link ): ?>

                                    </a>

                                <?php endif; ?>

                            <?php endif; ?>

                        </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>

        <?php elseif( get_row_layout() == 'block_3_content' ): 

            $title = get_sub_field('block_3_content_title');
            $content = get_sub_field('block_3_content');

        ?>

            <!-- Section -->

            <div class="c-content-primary">

                <?php if ( $title ): ?>
                            
                    <h2><?php echo $title; ?></h2>

                <?php endif; ?>

                <?php if ( $content ): ?>
                            
                    <?php echo $content; ?>

                <?php endif; ?>

            </div>

        <?php elseif( get_row_layout() == 'block_4_info' ): 

            $title = get_sub_field('block_4_info_title');
            $content = get_sub_field('block_4_info_content');


        ?>

            <!-- Section -->

            <div class="c-info-cta">

                <?php if ( $title ): ?>
                            
                    <div class="c-info-cta__title">
                        
                        <h3 class="u-reset-font--secondary u-reset--margin"><?php echo $title; ?></h3>

                    </div>

                <?php endif; ?>

                <?php if ( $content ): ?>

                    <div class="c-info-cta__content">
                        
                        <?php echo $content; ?>

                    </div>

                <?php endif; ?>

            </div>

        <?php elseif( get_row_layout() == 'block_5_cases' ): 

            $title = get_sub_field('block_5_cases_title');
            $link = get_sub_field('block_5_cases_link');

        ?>

            <!-- Section -->

            <div class="c-cases-block">

                <div class="o-container">
                    
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12">

                            <?php if ( $title ): ?>
                                        
                                <h3><?php echo $title; ?></h3>

                            <?php endif; ?>

                            <?php if( get_sub_field('block_5_cases_blocks') ): ?>

                                <div class="c-cases-block__items">

                                    <?php while( has_sub_field('block_5_cases_blocks') ): 

                                        $block_5_revenue = get_sub_field('block_5_cases_revenue');
                                        $block_5_description = get_sub_field('block_5_cases_description');
                                        $block_5_type = get_sub_field('block_5_cases_type');

                                    ?>

                                        <div class="c-cases-block__item">

                                            <div class="u-text--center">
                                                
                                                <?php if ( $block_5_revenue ): ?>

                                                    <h3 class="c-cases-block__title u-text--bold"><?php echo $block_5_revenue; ?></h3>

                                                <?php endif; ?>

                                                <?php if ( $block_5_type ): ?>

                                                    <p class="c-cases-block__type"><?php echo $block_5_type; ?></p>

                                                <?php endif; ?>

                                            </div>

                                            <?php if ( $block_5_description ): ?>

                                                <div class="c-cases-block__description">
                                                    
                                                    <?php echo $block_5_description; ?>

                                                </div>

                                            <?php endif; ?>

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                            <?php if ( $link ): ?>
                                            
                                <a href="<?php echo $link['url']; ?>" class="c-btn--text">
                                    <?php echo $link['title']; ?>
                                </a>

                            <?php endif; ?>

                        </div>


                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_6_team' ): 

                $title = get_sub_field('block_6_team_title');
                $content = get_sub_field('block_6_team_content');

            ?>

            <!-- Section -->

            <div class="c-team">

                <?php if ( $title ): ?>
                            
                    <h2><?php echo $title; ?></h2>

                <?php endif; ?>

                <?php echo $content; ?>

                <?php if( get_sub_field('block_6_team_blocks') ): ?>

                    <div class="c-team__blocks">

                        <?php while( has_sub_field('block_6_team_blocks') ): 

                            $block_6_img  = get_sub_field('block_6_team_image');
                            $block_6_title = get_sub_field('block_6_team_title');
                            $block_6_subtitle = get_sub_field('block_6_team_subtitle');
                            $block_6_link = get_sub_field('block_6_team_link');

                        ?>

                        <div class="c-team__block u-text--center">
                            
                            <?php if ( $block_6_img ): ?>
							
                                <img class="u-reset--margin b-lazy"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                     data-original="<?php echo $block_6_img['url']; ?>"
                                     alt="<?php echo $block_6_img['alt']; ?>"
                                     width="<?php echo $block_6_img['width']; ?>"
                                     height="<?php echo $block_6_img['height']; ?>">

                            <?php endif; ?>

                            <div class="c-team__info">
                                            
                                <?php if ( $block_6_title ): ?>

                                    <h3 class="u-reset-font--secondary u-text--uppercase u-reset--margin">
                                        <?php echo $block_6_title; ?>
                                    </h3>

                                <?php endif; ?>

                                <?php if ( $block_6_subtitle ): ?>

                                    <p>
                                        <?php echo $block_6_subtitle; ?>
                                    </p>

                                <?php endif; ?>
								
								<?php if ( $block_6_link ): ?>

                                    <a class="c-btn c-btn--primary" href="<?php echo $block_6_link['url']; ?>"><?php echo $block_6_link['title']; ?></a>

                                <?php endif; ?>

                            </div>

                        </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>

            <?php elseif( get_row_layout() == 'block_7_video' ): 

                $title = get_sub_field('block_7_video_title');
                $content = get_sub_field('block_7_video_content');
                $image = get_sub_field('block_7_video_image');
                $link = get_sub_field('block_7_video_link');

            ?>

            <!-- Section -->

            <div class="c-video">

                <?php if ( $title ): ?>
                            
                    <h3><?php echo $title; ?></h3>

                <?php endif; ?>

                <?php echo $content; ?>

                <?php if ( $image ): ?>

                    <div class="c-video__block">

                        <div class="c-video--line"></div>

                        <?php if ( $link ): ?>
                                        
                            <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" class="c-video__link">

                        <?php endif; ?>
                        
                            <img class="c-video__image u-reset--margin b-lazy"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-original="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>"
                                 width="<?php echo $image['width']; ?>"
                                 height="<?php echo $image['height']; ?>">

                            <span class="c-video__icon"><i class="fa fa-play" aria-hidden="true"></i></span>

                        <?php if ( $link ): ?>

                            </a>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>
                      
            </div>

            <?php elseif( get_row_layout() == 'block_8_cta' ): 

                $title = get_sub_field('block_8_cta_title');
                $content = get_sub_field('block_8_cta_content');

            ?>

            <!-- Section -->

            <div class="c-cta-info">

                <?php if ( $title ): ?>
                            
                    <h2 class="u-text--black"><?php echo $title; ?></h2>

                <?php endif; ?>

                <?php echo $content; ?>

            </div>

        <?php elseif( get_row_layout() == 'block_9_services' ): 

                $block_9_title = get_sub_field('block_9_services_title');
                $block_9_subtitle = get_sub_field('block_9_services_subtitle');
                $block_9_content = get_sub_field('block_9_services_content');

            ?>

            <!-- Section -->

            <div class="c-services">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                            <div class="c-services__content u-text--center">

                                <?php if ( $block_9_title ): ?>

                                    <h2><?php echo $block_9_title; ?></h2>

                                <?php endif; ?>

                                <?php if ( $block_9_subtitle ): ?>

                                    <h3><?php echo $block_9_subtitle; ?></h3>

                                    <hr class="u-block-hr--narrow u-block-hr--accent-4">

                                <?php endif; ?>

                                <?php if ( $block_9_content ): ?>

                                    <div><?php echo $block_9_content; ?></div>

                                <?php endif; ?> 

                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-12">

                            <?php if( have_rows('block_9_services_blocks') ): ?>
                            
                                <ul class="c-services__list c-list--unstyled">

                                    <?php while( have_rows('block_9_services_blocks') ): the_row(); 

                                        $block_9_img = get_sub_field('block_9_services_image');
                                        $block_9_description = get_sub_field('block_9_services_description');
                                        $block_9_title = get_sub_field('block_9_services_title');
                                        $block_9_link = get_sub_field('block_9_services_link');

                                    ?>

                                        <li class="c-services__item">

                                            <div class="c-services__link">

                                                <?php if ( $block_9_img ): ?>

                                                    <div class="c-services__img c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_9_img; ?>"></div>

                                                    <div class="c-services__block u-text--white">
                                                        
                                                        <?php if ( $block_9_title ): ?>

                                                            <h3 class="c-services__title"><?php echo $block_9_title; ?></h3>

                                                        <?php endif; ?>

                                                        <div class="c-services__description">

                                                            <?php if ( $block_9_description ): ?>

                                                                <?php echo $block_9_description; ?>

                                                            <?php endif; ?>

                                                            <?php if ( $block_9_link ): ?>

                                                                <a class="c-btn c-btn--primary" href="<?php echo $block_9_link['url']; ?>"><?php echo $block_9_link['title']; ?></a>

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

            <?php elseif( get_row_layout() == 'block_10_reviews' ): 

                $block_10_title = get_sub_field('block_10_reviews_title');
                $block_10_subtitle = get_sub_field('block_10_reviews_subtitle');
                $block_10_content = get_sub_field('block_10_reviews_content');

            ?>

            <!-- Section -->

            <div class="c-reviews">

                <div class="o-container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                            <div class="c-reviews__content u-text--center">

                                <?php if ( $block_10_title ): ?>

                                    <h2><?php echo $block_10_title; ?></h2>

                                <?php endif; ?>

                                <?php if ( $block_10_subtitle ): ?>

                                    <h3><?php echo $block_10_subtitle; ?></h3>

                                    <hr class="u-block-hr--narrow u-block-hr--accent-4">

                                <?php endif; ?>

                                <?php if ( $block_10_content ): ?>

                                    <div><?php echo $block_10_content; ?></div>

                                <?php endif; ?> 

                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-12">

                            <?php if( have_rows('block_10_reviews_blocks') ): ?>
                            
                                <div class="c-reviews__list">

                                    <?php while( have_rows('block_10_reviews_blocks') ): the_row(); 

                                        $block_10_author = get_sub_field('block_10_reviews_author');
                                        $block_10_quote = get_sub_field('block_10_reviews_quote');

                                    ?>

                                        <div class="c-reviews__item">

                                            <blockquote class="u-reset--blockquote">

                                                <?php if ( $block_10_quote ): ?>

                                                    <?php echo $block_10_quote; ?>

                                                <?php endif; ?>

                                                <?php if ( $block_10_author ): ?>

                                                    <cite class="c-reviews__title"><?php echo $block_10_author; ?></cite>

                                                <?php endif; ?>

                                            </blockquote>

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

           <?php endif;

        endwhile; ?>

<?php endif; ?>