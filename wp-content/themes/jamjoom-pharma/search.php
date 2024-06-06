<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jamjoom-pharma
 */

get_header();
?>

<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-about-image.png" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text">Search Results</h1>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="pt-60 pb-120">
	<div class="container">
		<div class="row product-row">
			<h3 class="mb-30">
			<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'jamjoom-pharma' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h3>
			<div class="col-lg-12">
				<div class="product-search mb-3">
					<!-- <?php get_search_form(); ?>  -->
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
				</div>
			</div>
			<?php
// Get the current language of the page
$current_language = get_locale(); // This gets the current locale

// Define an array of language codes that correspond to Arabic
$arabic_languages = array('ar', 'ar_AR', 'ar_SA'); // You might need to adjust these based on your specific setup

// Get the search query parameter
$search_query = get_search_query();

// Check if the current language is Arabic
if (!in_array($current_language, $arabic_languages)) {
    // Proceed with the search only if the page is not in Arabic

    // Check if the search query matches a category name
    $category = get_term_by('name', $search_query, 'category');

    // Start the Loop
    if ($category) :
        $category_id = $category->term_id;
        $args = array(
            'post_type' => 'post',
            'cat' => $category_id,
        );
    else:
        $args = array(
            'post_type' => 'post',
            's' => $search_query,
        );
    endif;

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part('template-parts/content', 'search');

        endwhile;

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;

    // Restore original post data
    wp_reset_postdata();
}
?>

		</div>
	</div>
</section>


<?php
// get_sidebar();
get_footer();
?>