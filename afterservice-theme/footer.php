<?php if( !is_page_template('page-ppc.php') ) : ?>

        <?php if ( get_field('awards', 'options') ): ?>

            <div class="c-footer__awards">

                <?php while( has_sub_field('awards', 'options') ): 

                    $image = get_sub_field('image');

                ?>

                    <?php if ( $image ): ?>

                        <div class="c-footer__award">
                            <img class="u-reset--margin"
                                 src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>"
                                 width="<?php echo $image['width']; ?>"
                                 height="<?php echo $image['height']; ?>">
                        </div>

                    <?php endif; ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>


        <?php get_template_part('_inc/content', 'contact'); ?>

        <?php if ( !is_page_template('_templates/template-contact.php') ): ?>

            <?php get_template_part('_inc/content', 'info'); ?>

        <?php endif; ?>

    </main>

    <footer class="c-footer u-block--accent-5 u-block-padding--lg">

        <div class="o-container">

            <div class="o-row">
                
                <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                     <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-1') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-1'); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                     <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-2') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-2'); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                     <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-3') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-3'); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                     <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-4') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-4'); ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

            <div class="o-row">

                <div class="o-col--xxs-12 u-text--center">

                    <p class="c-footer__credits u-reset--margin"><?php echo bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>. All Rights Reserved.</p> <br>

                    <?php if ( get_field('links', 'options') ): ?>

                        <ul class="c-footer__links c-list--inline">

                            <?php while( has_sub_field('links', 'options') ): 

                                $link = get_sub_field('link');

                                ?>

                                <?php if ( $link ): ?>

                                    <li>
                                        <a href="<?php echo $link['url']; ?>">
                                            <?php echo $link['title']; ?>
                                        </a>
                                    </li>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </footer>

	<?php wp_footer(); ?>

    <?php echo get_field('footer_code', 'option'); ?>

    </body>

</html>

<?php else : ?>
    <footer>
        <?php wp_footer(); ?>
            <div class="ppc-footer">
                <div class="col1">
                    Attorney Gregory M. Rada © <?php echo get_the_date('Y'); ?>. All Rights Reserved.
                </div>
                <div class="col2">
                    <a href="/disclaimer/">Disclaimer</a>
                </div>
            </div>
            </body>

</html>
    </footer>

<?php endif; ?>

<script type="text/javascript" src="//cdn.callrail.com/companies/539721619/a4067c96086cebee191b/12/swap.js"></script> 