<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jamjoom-pharma
 */

?>


		

	<div class="title-wrapper product-search">
		<div class="product-search-content">
			<h3 class="mb-30"><?php esc_html_e( 'Nothing Found', 'jamjoom-pharma' ); ?></h3>
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jamjoom-pharma' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p class="m-0"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jamjoom-pharma' ); ?></p>
				<?php
				// get_search_form();

				else :
				?>

				<p class="m-0"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jamjoom-pharma' ); ?></p>
				<?php
				// get_search_form();

				endif;
				?>
		</div>
	</div>
</section>
