<div class="o-col--xxs-12 o-col--md-4 c-block--flex">

	<aside class="c-sidebar-blog">

	     <!-- Checks if a specific sidebar has widgets -->
		<?php if ( is_active_sidebar('sidebar-blog') ) : ?>
			<div class="c-widgets">
				<?php dynamic_sidebar('sidebar-blog'); ?>
			</div>
		<?php endif; ?>

	</aside>

</div>