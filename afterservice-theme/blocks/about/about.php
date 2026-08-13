<section class="about-block">
    <div class="row1">
        <?php $bio_img = get_field('about_attorney_image'); if( $bio_img ) :  ?>
            <div class="bio-pic">
                <?php echo wp_get_attachment_image($bio_img['ID'], 'full'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row2">
        <h2><?php the_field('about_eyebrow'); ?></h2>
        <?php the_field('about_quote'); ?>
    </div>
</section>