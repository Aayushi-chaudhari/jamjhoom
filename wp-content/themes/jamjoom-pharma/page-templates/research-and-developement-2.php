<?php

// Template Name: Research and Developement 2

get_header();
?>
<!-- Common Banner -->
<section class="site-banner sub-menu-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text"><?php echo the_title();?></h1>
            <p class="white-text para-18"><?php the_field('research_&_development_banner_subtitle');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="manufacturing-facility grid-wrapper-rtl pt-120 pb-120">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none">
                <img src="<?php the_field('research_and_development_image');?>"
                    alt="sustained-growth">
            </div>
            <h2 class="title primary-text"><?php the_field('research_and_development_heading');?></h2>
            <div class="image-wrapper tablet-block">
                <img src="<?php the_field('research_and_development_image');?>"
                    alt="sustained-growth">
            </div>
            <?php the_field('research_and_development_description');?>
        </div>
    </div>
</section>

<?php 
get_footer();
?>