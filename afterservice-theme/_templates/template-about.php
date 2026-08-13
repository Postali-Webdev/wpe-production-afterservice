<?php
/*
 * Template Name: About
 */
?>

<?php get_header();?>

<?php get_template_part('_inc/page', 'hero'); ?>

<div class="c-content c-content-bio">

    <div class="o-container--wide">

        <div class="o-row u-reset--gutter">

            <div class="o-col--xxs-12 o-col--md-7">

                <div class="o-content">

                    <h1 class="c-page__title">Firm <span>overview</span></h1>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--md-5">

                <div class="c-about__right u-text--center">

                    <img class="c-about__icon" src="<?php bloginfo('template_url'); ?>/_dist/img/img-overview-burst.svg" alt="Representing Veterans NationWide" width="285" height="145">

                    <h3 class="u-text--white u-h1">Representing <br> Veterans <br> NationWide</h3>

                     <a href="https://youtu.be/AbefJxhZglY" data-fancybox class="c-btn c-btn--secondary">
                        <span>click to watch</span> our video <i class="fa-regular fa-circle-play"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>

<?php get_footer();?>