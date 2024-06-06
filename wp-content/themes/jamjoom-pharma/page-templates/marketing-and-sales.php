<?php 

// Template Name: Marketing and Sales

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('marketing_and_sales_banner_heading');?></p>
        </div>
    </div>
    <?php include 'sale-distribution-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="manufacturing-facility grid-wrapper-rtl pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none">
                <img src="<?php the_field('sales_operations_image');?>" alt="sales-operations-image">
            </div>
            <h2 class="title primary-text"><?php the_field('sales_operations_heading');?></h2>
            <div class="image-wrapper tablet-block">
                <img src="<?php the_field('sales_operations_image');?>" alt="sales-operations-image">
            </div>
            <?php the_field('sales_operations_description');?>
        </div>
    </div>
</section>

<section class="pt-120 cta wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <?php the_field('marketing_inner_banner_heading_one');?>
        </div>
    </div>
</section>

<section class="grid-wrapper pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 tablet-none">
                <div class="image-wrapper mr-0">
                    <img src="<?php the_field('sales_competencies_image');?>" alt="sales-operations-image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="title primary-text"><?php the_field('sales_competencies_heading');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('sales_competencies_image');?>" alt="sales-operations-image">
                        </div>
                        <?php the_field('sales_competencies_description');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-30">
                <?php the_field('international_operations_details');?>
            </div>
        </div>
    </div>
</section>

<section class="pt-120 cta wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <?php the_field('marketing_inner_banner_heading_two');?>
        </div>
    </div>
</section>

<section class="manufacturing-facility grid-wrapper-rtl pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none ml-30">
                <img src="<?php the_field('sales_success_image');?>" alt="marketing-sales-success">
            </div>
            <h2 class="title primary-text"><?php the_field('sales_success_heading');?></h2>
            <div class="image-wrapper tablet-block">
                <img src="<?php the_field('sales_success_image');?>" alt="marketing-sales-success">
            </div>
            <?php the_field('sales_success_description');?>
        </div>
    </div>
</section>

<section class="pt-120 pb-120 cta wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <?php the_field('marketing_inner_banner_heading_three');?>
        </div>
    </div>
</section>

<?php 
get_footer();
?>