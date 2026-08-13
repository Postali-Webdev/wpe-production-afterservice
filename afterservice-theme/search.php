<?php get_header(); ?>

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--sm-8 o-col--offset-sm-2">

                <section class="o-content">

					<?php if (isset($_GET['s']) && empty($_GET['s'])) : ?>

						<p class="u-h4">Sorry, but nothing matched your search criteria. </p>
						<p>Please try again with some different keywords.</p>

					<?php get_search_form(); ?>

					<?php else: ?>

						<h1>
							Results for:
							<?php printf( __( '%s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
						</h1>

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<article>

								<div class="o-row">

                                	<div class="o-col--sm-12">

										<h2>
											<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
											<small> - <?php echo ucwords(get_post_type()) ?></small>
										</h2>

										<?php the_excerpt(); ?>

										<?php if( get_post_type() == 'page') { ?>

											<a href="<?php the_permalink() ?>" class="c-btn">View Page</a>

										<?php  } elseif( get_post_type() == 'post') { ?>

											<a href="<?php the_permalink() ?>" class="c-btn">Read Post</a>

										<?php  } elseif( get_post_type() == 'procedure') { ?>

											<a href="<?php the_permalink() ?>" class="c-btn">Learn More</a>

										<?php } ?>

									</div>

	                            </div>

								<hr>

							</article>

						<?php endwhile; ?>

						<?php get_template_part('_inc/pager'); ?>

						<?php else: ?>

							<p>Sorry, no posts matched your criteria.</p>

							<?php get_search_form(); ?>

						<?php endif; ?>

					<?php endif; ?>

					<?php get_template_part('_inc/search-lists'); ?>

                </section>

            </div>

        </div>

    </div>

<?php get_footer(); ?>


