

<?php if ( has_post_thumbnail() ) : ?>

    <div class="c-sidebar__featured">
        <?php the_post_thumbnail('full', array()); ?>
    </div>

<?php else: ?>

    <?php if ( first_image_as_featured() ): ?>

    <div class="c-sidebar__featured">
        <img class="" src="<?php echo first_image_as_featured(); ?>" />
    </div>

    <?php endif; ?>

<?php endif; ?>