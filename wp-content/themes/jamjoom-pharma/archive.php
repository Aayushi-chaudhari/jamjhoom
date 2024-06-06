<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <h1 class="white-text">Therapeutic Categories</h1>
            <p class="white-text para-18">Ophtha, Derma, GIT, CVD, General Medicine, CNS</p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="product-list pt-60 pb-120">
	<div class="container">
		<?php if ( have_posts() ) : ?>
		<?php
		the_archive_title( '<h3 class="page-title">', '</h3>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
        
        <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="9" scroll="false" archive="true"]'); ?>

        <?php endif;?>
        
	</div>
</section>

<?php
get_footer();