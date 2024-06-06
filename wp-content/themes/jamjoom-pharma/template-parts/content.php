<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jamjoom-pharma
 */

?>

<div class="col-lg-4 col-md-6 col-sm-6 categories-col">
		<div class="product-list-card">
			<div class="images-wrapper">
				<?php jamjoom_pharma_post_thumbnail(); ?>
			</div>
			<div class="product-detail">
				<?php
				if ( is_singular() ) :
					the_title( '<h3>', '</h3>' );
				else :
					the_title( '<h4>', '</h4>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
				<?php endif; ?>

			
				<div class="desc">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jamjoom-pharma' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jamjoom-pharma' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>

				<?php
				if ( is_singular() ) :
					the_title( '<h2 class="d-none">', '</h2>' );
				else :
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"  class="solid-btn w-100"><span>Product details</span>', '</a>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<!-- <div class="entry-meta">
						<?php
						jamjoom_pharma_posted_on();
						jamjoom_pharma_posted_by();
						?>
					</div> -->
				<?php endif; ?>
			</div>
		</div>
</div>	