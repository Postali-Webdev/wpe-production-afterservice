<div class="c-details u-block--white u-block-padding--xl">

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-4">

                <div class="c-details__item u-text--center">

                    <img class="c-details__icon" src="<?php bloginfo('template_url'); ?>/_dist/img/img-footer-icon-1.svg" alt="Phone" width="51" height="66">

                    <h3 class="c-details__title u-h2">Phone</h3>
                    
                    <?php if ( get_field('phones', 'options') ): ?>

                        <ul class="c-list--unstyled">
                            
                            <?php while( has_sub_field('phones', 'options') ): 
                                
                                $phone = get_sub_field('phone_number');
                                $name = get_sub_field('phone_name');

                            ?>

                                <li>
                                    
                                    <?php if ( $phone ): ?>

                                        <a class="u-text--block u-reset--link" href="tel:<?php echo preg_replace('~[^\d]+~', '', $phone); ?>">
                                            <span class="u-reset-font--secondary u-text--uppercase u-text--accent-3"><?php echo $name; ?></span> <?php echo $phone; ?>
                                        </a>

                                    <?php endif; ?>

                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                    <?php

                        $email = get_field('email', 'options');

                        if ( $email ): ?>

                        <a class="" href="mailto:<?php echo $email; ?>">
                            <?php echo $email; ?>
                        </a>

                    <?php endif; ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--md-4">

                <div class="c-details__item u-text--center">

                    <img class="c-details__icon" src="<?php bloginfo('template_url'); ?>/_dist/img/img-footer-icon-2.svg" alt="Office" width="85" height="66">

                    <h3 class="c-details__title u-h2">Office</h3>
                    
                    <?php

                        $address = get_field('address', 'options');

                        if ( $address ): ?>

                        <p class="u-text--center u-text--uppercase u-text--semibold">
                            <?php echo $address; ?>
                        </p>

                    <?php endif; ?>

                    <?php

                        $map = get_field('map', 'options');

                        if ( $map ): ?>

                        <div class="c-contact__map">
                            <?php echo $map; ?>
                        </div>

                    <?php endif; ?>

                    <?php

                        $disclaimer = get_field('disclaimer', 'options');

                        if ( $disclaimer ): ?>

                        <p class="u-text--accent-3 u-h5">
                            <?php echo $disclaimer; ?>
                        </p>

                    <?php endif; ?>
                

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--md-4">

                <div class="c-details__item u-text--center">

                    <img class="c-details__icon" src="<?php bloginfo('template_url'); ?>/_dist/img/img-footer-icon-3.svg" alt="Social" width="85" height="66">

                    <h3 class="c-details__title u-h2">Social</h3>

                    <?php get_template_part('_inc/content', 'social'); ?>

                </div>

            </div>

        </div>

    </div>

</div>
