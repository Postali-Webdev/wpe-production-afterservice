<div id="footer" class="c-contact u-block--accent-1 u-block-padding--xl c-background--relative">

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                <div class="c-contact__form">

                    <?php

                        $contact_title = get_field('contact_title', 'options');

                        if ( $contact_title ): ?>

                            <h2 class="c-contact__title u-text--white">
                                <?php echo $contact_title; ?>
                            </h2>

                    <?php endif; ?>

                    <?php

                        $contact_form = get_field('contact_form', 'options');

                        if ( $contact_form ): ?>

                            <?php echo $contact_form; ?>

                    <?php endif; ?>


                    <div class="c-contact__cta">

                        <?php

                        $contact_process = get_field('contact_process', 'options');

                            if ( $contact_process ): ?>

                                <p class="c-contact__cta-title u-text--white">
                                    <?php echo $contact_process; ?>
                                </p>

                        <?php endif; ?>

                        <?php 

                        $contact_link = get_field('contact_link', 'options');

                        if ( $contact_link ): ?>
                                
                            <a href="<?php echo $contact_link['url']; ?>" class="c-btn c-btn--secondary c-contact__btn">
                                <?php echo $contact_link['title']; ?>
                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php bloginfo('template_url'); ?>/_dist/img/img-flag.svg"></div>

</div>
