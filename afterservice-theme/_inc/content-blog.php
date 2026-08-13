<?php 

    // the query
    $the_query = new WP_Query( array(
       'posts_per_page' => 3,
    )); 

if ( $the_query->have_posts() ) : ?>

    <div class="u-block--white u-block-padding--xl">

        <div class="o-container">

            <div class="o-row">

                <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                    <div class="u-text--white u-block-padding--lg u-reset--padding-top u-text--center">
						
						<?php

							$blog_title = get_field('blog_title', 'options');

							if ( $blog_title ): ?>

								<h2 class="u-text--center">
									<?php echo $blog_title; ?>
								</h2>

						<?php endif; ?>
						
						<?php

							$blog_subtitle = get_field('blog_subtitle', 'options');

							if ( $blog_subtitle ): ?>

								<h3 class="u-text--accent-3">
									<?php echo $blog_subtitle; ?>
								</h3>

						<?php endif; ?>
						
                        <hr class="u-block-hr--narrow u-block-hr--accent-4">

                        <?php

							$blog_content = get_field('blog_content', 'options');

							if ( $blog_content ): ?>

								<?php echo $blog_content; ?>

						<?php endif; ?>

                    </div>

                </div>

            </div>

            <div class="o-row">

                <div class="o-col--xxs-12">

                    <div class="c-blog__items">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <article class="c-blog__item">

                                <h3 class="c-blog__title u-text--accent-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                <hr>

                                <div class="c-blog__excerpt">
                                    
                                    <?php the_excerpt() ?>

                                </div>

                                <a href="<?php the_permalink(); ?>"
                                 title="Read Article: <?php the_title(); ?>" 
                                 class="c-btn--arrow">Read More</a>

                            </article>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php else : ?>

  <p><?php __('No News'); ?></p>

<?php endif; ?>