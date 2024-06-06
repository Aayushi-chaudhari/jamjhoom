<?php 

// Template Name: Sales and Distribution

get_header();
?>
<!-- Common Banner -->
<section class="site-banner sub-menu-banner distribution-menu-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text wow fadeIn" data-wow-delay="0.6s"><?php echo the_title();?></h1>
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('sales_and_distribution_banner_subheading');?></p>
        </div>
    </div>
    <?php include 'sale-distribution-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="manufacturing-facility-right grid-wrapper pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none mr-30">
                <img src="<?php the_field('sales_and_distribution_image');?>" alt="mahmoud-yousuf">
            </div>
            <h2 class="title primary-text"><?php the_field('sales_and_distribution_heading');?></h2>
            <div class="image-wrapper tablet-block mr-30">
                <img src="<?php the_field('sales_and_distribution_image');?>" alt="mahmoud-yousuf">
            </div>
            <?php the_field('sales_and_distribution_description');?>
        </div>
    </div>
</section>

<?php get_footer();?>