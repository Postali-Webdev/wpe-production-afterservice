<?php
/*
 * Template Name: Results
 */
?>

<?php get_header();?>

<div class="c-content">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-12">

                <div class="o-content">

                    <h1 class="c-page__title"><?php the_title(); ?></h1>

                </div>

            </div>

        </div>

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-6">

                <div class="o-content">

                    <?php if( have_rows('results_left_column') ): ?>

                        <?php while( has_sub_field('results_left_column') ): 

                            $result_header = get_sub_field('result_header');
                            $result_content = get_sub_field('result_content');
                            $result_author = get_sub_field('result_author');

                        ?>

                            <div class="result-item">

                                <?php if ( $result_header ): ?>

                                    <h2 class="u-text--accent-3 u-reset--margin"><?php echo $result_header; ?></h2>

                                <?php endif; ?>

                                <?php if ( $result_author ): ?>

                                    <p class="u-h3 u-text--accent-1 u-reset-font--secondary"><?php echo $result_author; ?></p>

                                <?php endif; ?>

                                <?php if ( $result_content ): ?>

                                    <div class="result-item-content">
                                        <?php echo $result_content; ?>
                                    </div>

                                <?php endif; ?>

                                <hr>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--md-6">

                <div class="o-content">
                    
                    <?php if( have_rows('results_right_column') ): ?>

                        <?php while( has_sub_field('results_right_column') ): 

                            $result_header = get_sub_field('result_header');
                            $result_content = get_sub_field('result_content');
                            $result_author = get_sub_field('result_author');

                        ?>

                            <div class="result-item">

                                <?php if ( $result_header ): ?>

                                    <h2 class="u-text--accent-3 u-reset--margin"><?php echo $result_header; ?></h2>

                                <?php endif; ?>

                                <?php if ( $result_author ): ?>

                                    <p class="u-h3 u-text--accent-1 u-reset-font--secondary"><?php echo $result_author; ?></p>

                                <?php endif; ?>

                                <?php if ( $result_content ): ?>

                                    <div class="result-item-content">
                                        <?php echo $result_content; ?>
                                    </div>

                                <?php endif; ?>

                                <hr>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

<?php get_footer();?>