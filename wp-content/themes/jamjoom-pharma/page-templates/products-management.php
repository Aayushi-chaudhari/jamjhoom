<?php 

// Template Name: Product Management

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
            <p class="white-text para-18"><?php the_field('products_management_banner_heading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="grid-wrapper pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('products_management_image');?>" alt="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('products_management_image');?>"
                                alt="about-image">
                        </div>
                        <?php the_field('products_management_description');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-120">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>"
                alt="hero-about-image">
            <h3><?php the_field('quality_standards_banner_content');?></h3>
        </div>
    </div>
</section>

<section class="grid-wrapper-rtl pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('quality_standards_image');?>"
                                alt="about-image">
                        </div>
                        <?php the_field('quality_standards_section_description');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('quality_standards_image');?>"
                        alt="about-image">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>