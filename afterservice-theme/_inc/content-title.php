<?php

    // Custom feature image loader
    $default_img = get_template_directory_uri() . '/_dist/img/img-subpage-hero.jpg';

    if ( is_page() || is_singular('attorneys') || is_home() || is_category() || is_singular('post') || is_search() ) {

        if ( has_post_thumbnail( $post->ID ) ) {

            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            $image = $image[0];

        } else {

            $image = $default_img;

        }

    }  ?>

<?php if( !is_page_template('page-ppc.php') ) : ?>
<div class="c-hero-subpage u-block--black c-background--relative">

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-7">
                    
                <?php if ( is_singular('post') ): ?>

                    <p class="c-hero__date u-text--white"><?php echo get_the_date("F d, Y", get_the_ID()) ?></p>

                <?php else: ?>

                    <h1 class="c-hero__title u-text--xl u-text--white"><?php page_title(); ?></h1>

                    <?php 

                        $subtitle = get_field('subtitle');

                        if ( $subtitle ): ?>

                        <p class="c-hero__subtitle u-text--white"><?php echo $subtitle; ?></p>

                    <?php endif; ?>

                <?php endif; ?>
                
            </div>

        </div>

    </div>

    <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $image; ?>"></div>

</div>
<?php endif; ?>