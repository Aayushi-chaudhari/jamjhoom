<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jamjoom-pharma
 */

get_header();
?>

<!-- Common Banner -->
<section class="site-banner page-not-found">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text">404</h1>
            <p class="white-text para-18">Oops! That page can’t be found.</p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<?php
get_footer();
