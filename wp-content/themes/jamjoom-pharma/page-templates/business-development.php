<?php 

// Template Name: Business development

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('business_development_banner_heading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="grid-wrapper pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('business_development_image');?>" alt="business-main-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="primary-text title"><?php the_field('business_development_title');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('business_development_image');?>" alt="business-main-image">
                        </div>
                        <?php the_field('business_development_description');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-wrapper bg-lightblue mt-100 pt-100 pb-100 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="primary-text title"><?php the_field('scope_title');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('scope_image');?>" alt="business-main-image">
                        </div>
                        <?php the_field('scope_description');?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('scope_image');?>" alt="business-main-image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-wrapper pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('purpose_section_image');?>" alt="business-main-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="primary-text title"><?php the_field('purpose_section_title');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('purpose_section_image');?>" alt="business-main-image">
                        </div>
                        <div class="title">
                        <?php the_field('purpose_section_description');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-3"><?php the_field('purpose_section_info');?></p>
    </div>
</section>

<section class="pt-100 pb-100 cta wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <h3><?php the_field('business_development_inner_banner_title');?></h3>
        </div>
    </div>
</section>

<!-- <section class="grid-wrapper-rtl pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('quality_standards_image');?>" alt="about-image">
                        </div>
                        <?php the_field('quality_standards_section_description');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('quality_standards_image');?>" alt="about-image">
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php 
get_footer();
?>