<div class="o-col--xxs-12 o-col--md-4">

	<aside class="c-sidebar">

		<?php 

			$form = get_field('sidebar_contact_form', 'options');

			if ( $form ): ?>

			<div class="c-sidebar__form">

				<?php 

					$form_title = get_field('sidebar_contact_title', 'options');

					if ( $form_title ): ?>

						<h3 class="u-h2 u-text--white u-text--center u-reset--margin-bottom"><?php echo $form_title; ?></h3>

				<?php endif; ?>

				<?php 

					$form_subtitle = get_field('sidebar_contact_subtitle', 'options');

					if ( $form ): ?>

						<p class="u-text--white u-text--center u-reset-font--primary-italic-bold"><?php echo $form_subtitle; ?></p>

				<?php endif; ?>

		        <?php echo $form; ?>
		            
		    </div>

	    <?php endif; ?>

	    <div class="c-sidebar__nav">

	    	<h3 class="u-h2 u-text--accent-3 u-text--center">Practice Areas</h3>

	    	<hr class="u-block-hr--accent-1">

            <?php

                $sidebarConfig = array(
                    'theme_location'  => 'sidebar_nav',
                    'menu'            => 'sidebar_nav',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'c-sidebar__list c-list--unstyled',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                    );

                wp_nav_menu( $sidebarConfig );

            ?>

	    </div>

        <div class="c-sidebar__reviews c-background--relative">
			
			<?php

                $reviews_title = get_field('reviews_title', 'options');

                if ( $reviews_title ): ?>

                    <h3 class="u-h2 u-text--accent-1 u-text--center">
                        <?php echo $reviews_title; ?>
                    </h3>

                    <hr class="u-block-hr--accent-1">

            <?php endif; ?>
			
			<?php

                $reviews_img = get_field('reviews_image', 'options');

                if ( $reviews_img ): ?>

                     <div class="c-background c-background--base c-background--position-left c-background--cover b-lazy" data-original="<?php echo $reviews_img; ?>"></div>

            <?php endif; ?>

            <?php

                $reviews_subtitle = get_field('reviews_subtitle', 'options');

                if ( $reviews_subtitle ): ?>

                    <p class="c-lead u-text--white">
                        <?php echo $reviews_subtitle; ?>
                    </p>

                    <hr>

            <?php endif; ?>


			<?php if ( get_field('reviews', 'options') ): ?>

            	<div class="c-carousel__reviews-sidebar">

                    <?php while ( has_sub_field('reviews', 'options') ): 

                        $author = get_sub_field('reviews_author');
                        $count  = get_sub_field('reviews_count');
                        $rating = get_sub_field('reviews_rating');
                        $quote  = get_sub_field('reviews_quote');

                    ?>

	                    <div class="c-carousel__item">

	                        <?php if ( $quote ): ?>

                                <blockquote class="u-reset--blockquote u-text--center u-text--white">

                                    <?php if ( $author ): ?>

                                        <cite class="c-carousel__reviews-sidebar__author"><?php echo $author; ?></cite>

                                    <?php endif; ?>

                                    <?php if ( $quote ): ?>

                                    	<div class="c-carousel__reviews-sidebar__quote"><?php echo $quote; ?></div>

                                    <?php endif; ?>

                                </blockquote>

	                        <?php endif; ?>

	                    </div>

                	<?php endwhile; ?>

                </div>

            <?php endif; ?>

            <img class="u-block--center" src="<?php bloginfo('template_url'); ?>/_dist/img/img-rating.jpg" alt="rating" width="150" height="33">

			<?php 

			$reviews_link = get_field('reviews_link', 'options');

			if ( $reviews_link ): ?>
                                
                <a href="<?php echo $reviews_link['url']; ?>" class="c-btn c-btn--block c-btn--primary">
                    <span><?php echo $reviews_link['title']; ?></span>
                </a>

            <?php endif; ?>
					
		</div>

		<?php

        $about_title = get_field('about_title', 'options');

        if ( $about_title ): ?>	

    		<div class="c-sidebar__cta c-background--relative">

                <h3 class="u-reset-font--secondary u-text--white u-text--center">
                    <?php echo $about_title; ?>
                </h3>

                <hr class="u-block-hr--narrow u-block-hr--accent-4">

	            <?php 

	            	$about_img = get_field('about_image', 'options');

	            	if ( $about_img ): ?>

	                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $about_img; ?>"></div>

	            <?php endif; ?>

	            <?php 

	            	$about_content = get_field('about_content', 'options');

	            		if ( $about_content ): ?>

	                	<div class="c-sidebar__cta-content u-text--white"><?php echo $about_content; ?></div>

	            <?php endif; ?>
				
				<?php 

					$about_link = get_field('about_link', 'options');

					if ( $about_link ): ?>
	                                
		                <a href="<?php echo $about_link['url']; ?>" class="c-btn c-btn--block c-btn--primary">
		                    <span><?php echo $about_link['title']; ?></span>
		                </a>

	            <?php endif; ?>
				
			</div>

		<?php endif; ?>

		<div class="c-sidebar__info">
			
			<h3 class="u-h2 u-text--accent-10 u-reset--margin-bottom">Contact</h3>
			
			<p class="u-h2 u-reset-font--secondary u-text--uppercase">Gregory M. Rada, Attorney at Law</p>

			<hr class="u-block-hr--white">
 
            <h3 class="u-h2 u-text--accent-10 u-reset--margin-bottom">Phone</h3>
            
            <?php if ( get_field('phones', 'options') ): ?>

                <ul class="c-list--unstyled">
                    
                    <?php while( has_sub_field('phones', 'options') ): 
                        
                        $phone = get_sub_field('phone_number');
                        $name = get_sub_field('phone_name');

                    ?>

                        <li>
                            
                            <?php if ( $phone ): ?>

                                <a class="u-text--md u-text--block u-reset--link u-reset-font--secondary u-text--uppercase u-text--white" href="tel:<?php echo preg_replace('~[^\d]+~', '', $phone); ?>">
                                    <?php echo $name; ?> <?php echo $phone; ?>
                                </a>

                            <?php endif; ?>

                        </li>

                    <?php endwhile; ?> 

                </ul>

            <?php endif; ?>

             <h3 class="u-h2 u-text--accent-10 u-reset--margin-bottom">Office</h3>
                    
            <?php

                $address = get_field('address', 'options');

                if ( $address ): ?>

                <p class="u-h2 u-reset-font--secondary u-text--uppercase">
                    <?php echo $address; ?>
                </p>

            <?php endif; ?>


		</div>

	    <!-- Checks if a specific sidebar has widgets -->
		<?php if ( is_active_sidebar('sidebar') ) : ?>
			<div class="c-widgets">
				<?php dynamic_sidebar('sidebar'); ?>
			</div>
		<?php endif; ?>

	</aside>

</div>