<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/_dist/img/site-image.png" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta property="og:image:alt" content="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>" />

		<!--
			// Enqueue Typekit fonts in functions.php file using wp_enqueue_script();
			// Enqueue Google fonts in functions.php file using wp_enqueue_style();
		-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Rufina:wght@400;700&display=swap" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-16x16.png">
		<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<?php echo get_field('analytics_code', 'option'); ?>



		<?php 

			// Global Schema
			$global_schema = get_field('global_schema','options');
			if ( !empty($global_schema) ) {
				echo '<script type="application/ld+json">' . $global_schema . '</script>';
			}

			$single_schema = get_field('single_schema');
			if ( !empty($single_schema) ) {
				echo '<script type="application/ld+json">' . $single_schema . '</script>';
			}

		?>

	</head>

	<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G6K5VQ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<a id="skip-content" href="#content" class="u-visibility--sr-only">Skip to main content</a>

		<header class="c-header u-block--sticky u-block--fixed-top u-block--white">

			<div class="o-container--wide">

				<div class="c-header__inner c-block--flex c-block--flex-between">

					<button class="c-nav__icon c-nav__open js-toggle" aria-label="Open Menu">
						<i class="fas fa-bars c-nav__icon--open" aria-hidden="true"></i>
					</button>

					<a class="c-logo" href="<?php echo esc_url( home_url() ); ?>">
						<img class="u-reset--margin" 
							 src="<?php bloginfo('template_url'); ?>/_dist/img/img-logo.svg" alt="<?php echo esc_url( bloginfo('name') ); ?>"  width="289" height="61">
					</a>


					<nav class="c-nav">

						<button class="c-nav__icon c-nav__icon--padding js-toggle" aria-label="Close Menu">
							<i class="fas fa-times c-nav__icon--close" aria-hidden="true"></i>
						</button>

						<a class="c-logo__nav u-visibility-hidden-sm--up" href="<?php echo esc_url( home_url() ); ?>">
							<img class="u-reset--margin" 
								 src="<?php bloginfo('template_url'); ?>/_dist/img/img-logo.svg" 
								 alt="<?php echo esc_url( bloginfo('name') ); ?>" 
								 width="672" 
								 height="72">
						</a>

						 <?php

							$headerConfig = array(
								'theme_location'  => 'main_nav',
								'menu'            => 'main_nav',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'c-nav__list',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => new wp_bootstrap_navwalker()
								);

							wp_nav_menu( $headerConfig );

						?>

						<div class="u-text--center u-visibility-hidden-sm--up u-block-padding--md">

							<?php if ( get_field('phones', 'options') ): ?>

								<ul class="c-list--unstyled">

									<?php while( has_sub_field('phones', 'options') ): 

										$name = get_sub_field('phone_name');
										$phone = get_sub_field('phone_number');

										?>

										<li>

											<?php

											if ( $phone ): ?>

												<a class="u-text--block u-reset--link" href="tel:<?php echo preg_replace('~[^\d]+~', '', $phone); ?>">
													<span class="u-reset-font--secondary u-text--uppercase u-text--accent-3"><?php echo $name; ?></span> <?php echo $phone; ?>

												</a>

											<?php endif; ?>

										</li>

									<?php endwhile; ?>

								</ul>

							<?php endif; ?>

							<?php get_template_part('_inc/content', 'social'); ?>

						</div>

					</nav>

					<div class="c-nav__mask js-toggle"></div>

					<?php

						$phone = get_field('phones', 'options');

						if ( $phone ): ?>

						<a class="c-header__phone" href="tel:<?php echo preg_replace('~[^\d]+~', '', $phone[0]['phone_number']); ?>">

							<img class="c-header__icon u-visibility-hidden-xs--down" 
								 src="<?php bloginfo('template_url'); ?>/_dist/img/img-phone.svg" 
								 alt="<?php echo esc_url( bloginfo('name') ); ?>" 
								 width="70" 
								 height="70">

							<span>
								
								<span class="c-header__number"><?php echo $phone[0]['phone_number']; ?></span>

								<span class="c-header__msg u-text--accent-1">Free Phone <span class="u-text--white">Consultations</span></span>

								<span class="c-header__call u-text--accent-6">24/7<span class="u-text--white"> Live Call Answering</span></span></span>

							</span>

						</a>

					<?php endif; ?>

				</div>

			</div><!-- /.container -->

		</header><!-- /.header -->

		<main id="content" class="o-main">

			<?php 

				$default_hero = get_field('default_hero')?: 'no';

				if ( $default_hero === 'yes' ): ?>

				<?php get_template_part('_inc/content', 'title'); ?>

			<?php endif; ?>