<?php 

// Template Name: Products

get_header();
?>
<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text wow fadeIn" data-wow-delay="0.6s"><?php echo the_title();?></h1>
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('therapeutic_banner_subheading');?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="product-category-list pt-60 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-search">
                    <!-- <?php get_search_form(); ?> -->
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                </div>
            </div>
            <div class="col-lg-12 pt-60">
                <h2 class="primary-text page-title"><?php the_field('therapeutic_categories_heading');?></h2>
            </div>
        </div>
        <div class="row product-row">
            <?php
    $categories = get_categories(array(
        'taxonomy' => 'category', // Taxonomy name for categories
        'hide_empty' => false,    // Set to false to include even empty categories
        'orderby' => 'name', 
        'order' => 'DESC', 
    ));

    foreach ($categories as $category) {
        if ($category->term_id === 1) {
            continue; // Skip the Uncategorized category
        }
        $category_image = get_field('category_image', 'category_' . $category->term_id);
        ?>
            <div class="col-lg-4 col-md-6 col-sm-6 product-category-col">
                    <!-- Add the category link to make the product card clickable -->
                    <div class="product-card">  
                    <a href="<?php echo get_category_link($category->term_id); ?>"> </a>                     
                        <div class="image-wrapper">
                            <?php if ($category_image) { ?>
                            <img src="<?php echo esc_url($category_image['url']); ?>"
                                alt="<?php echo esc_attr($category->name); ?>">
                            <?php } else { ?>
                            <!-- Add a default image if no category image is available -->
                            <img src="<?php echo esc_url($category_image['url']); ?>"
                                alt="<?php echo esc_attr($category->name); ?>">
                            <?php } ?>
                        </div>
                        <h3 class="title"><?php echo $category->name; ?></h3>
                    </div>             
            </div>
            <?php
    }
    ?>
        </div>
    </div>
</section>
<?php get_footer();?>