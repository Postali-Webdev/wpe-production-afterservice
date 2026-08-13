<?php get_header(); ?>

<?php get_template_part('_inc/page', 'hero'); ?>

<div class="c-content">

	<div class="o-container--wide">

	    <div class="o-row u-reset--gutter">

	        <div class="o-col--xxs-12 o-col--md-8">

	            <div class="o-content">

	            	<?php if ( has_post_thumbnail() ) { ?>
                        <div class="c-content-image">
                            <?php the_post_thumbnail('full', array()); ?>
                        </div>
                    <?php } ?>

	            	<?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                        	<h1 class="c-page__title"><?php page_title(); ?></h1>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
	            	
	            	<?php get_template_part('_inc/content', 'flexible'); ?>
	            	
	            </div>

	        </div>

	        <?php get_sidebar(); ?>

	    </div>

	</div>

</div>

<?php get_footer(); ?>


