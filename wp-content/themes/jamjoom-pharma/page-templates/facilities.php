<?php 

// Template Name: Facilities

get_header();
?>
<!-- Common Banner -->
<section class="site-banner sub-menu-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text wow fadeIn" data-wow-delay="0.6s"><?php echo the_title();?></h1>
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('banner_heading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->
<section class="manufacturing-facility grid-wrapper-rtl pt-120 wow fadeIn" data-wow-delay="1s">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none">
                <img src="<?php the_field('manufacturing_facility_image');?>" alt="manufacturing-facility">
            </div>
            <h2 class="title primary-text"><?php the_field('manufacturing_facility_heading');?></h2>
            <div class="image-wrapper tablet-block">
                <img src="<?php the_field('manufacturing_facility_image');?>" alt="manufacturing-facility">
            </div>
            <?php the_field('manufacturing_facility_description');?>
        </div>
    </div>
</section>

<section class="content pt-120 pb-120 wow fadeIn" data-wow-delay="1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image-wrapper tablet-none">
                    <img src="<?php the_field('pharma_consultants_image');?>" alt="manufacturing-facility">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title-wrapper">
                    <h2 class="title primary-text"><?php the_field('pharma_consultants_heading');?></h2>
                    <div class="image-wrapper tablet-block">
                        <img src="<?php the_field('pharma_consultants_image');?>" alt="manufacturing-facility">
                    </div>                   
                    <?php the_field('pharma_consultants_description');?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php 
get_footer();
?>