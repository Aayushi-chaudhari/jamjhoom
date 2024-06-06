<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jamjoom-pharma
 */

get_header();
?>
<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text"><?php echo the_title();?></h1>
            <p class="white-text para-18"><?php the_field('banner_heading');?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		// the_post_navigation(
		// 	array(
		// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jamjoom-pharma' ) . '</span> <span class="nav-title">%title</span>',
		// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jamjoom-pharma' ) . '</span> <span class="nav-title">%title</span>',
		// 	)
		// );

		// If comments are open or we have at least one comment, load up the comment template.
		// if ( comments_open() || get_comments_number() ) :
		// 	comments_template();
		// endif;

	endwhile; // End of the loop.
	?>
<?php
// get_sidebar();
get_footer();
