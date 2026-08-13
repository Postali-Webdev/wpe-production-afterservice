<?php if ( $wp_query->max_num_pages > 1 ) : ?>

	<div class="u-block--fl-left"><?php previous_posts_link( 'Previous Page' ); ?></div>
	<div class="u-block--fl-right"><?php next_posts_link( 'Next Page' ); ?></div>

	<div class="u-block--clearfix"></div>

<?php endif; ?>
