<?php if ( get_field('social', 'options') ): ?>

	<ul class="c-social__list c-list--unstyled">

	    <?php while( has_sub_field('social', 'options') ): ?>

	        <?php if ( get_sub_field('social_title') ): ?>
		        <li class="c-social__item">
		            <a class="c-social__link"
		               target="_blank"
		               rel="nofollow noopener"
		               aria-label="<?php the_sub_field('social_title'); ?>"
		               title="<?php the_sub_field('social_title'); ?>"
		               href="<?php the_sub_field('social_link'); ?>">
		                	<i class="fab <?php the_sub_field('social_icon'); ?>"></i>
		                	<?php the_sub_field('social_title'); ?>
		                	<span class="u-visibility--sr-only"><?php the_sub_field('social_title'); ?></span>
		            </a>
		        </li>
	        <?php endif; ?>

	    <?php endwhile; ?>

	</ul>

<?php endif; ?>
