<?php
/*
 * Template Name: Practice Areas Grid
 */
?>

<?php get_header();?>

<div class="c-content">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-12">

                <div class="o-content">

                    <h1 class="c-page__title c-practice__title">Practice <span>Areas</span></h1>
        			
                    <div class="u-block-padding--sm">

                        <?php

                            $practiceConfig = array(
                                'theme_location'  => 'practice_nav',
                                'menu'            => 'practice_nav',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'c-practice__list c-list--columns c-list--unstyled',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                                );

                            wp_nav_menu( $practiceConfig );

                        ?>

                   </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php get_footer();?>