<?php 

// Template Name: International

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('international_banner_subheading');?></p>
        </div>
    </div>
    <?php include 'sale-distribution-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<!-- client section -->
<section class="client pt-100  grid-wrapper-rtl wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('international_offices_image');?>" alt="mahmoud-yousuf" />
                        </div>
                        <h2 class="title primary-text"><?php the_field('international_offices_heading');?></h2>
                        <?php the_field('international_offices_details');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('international_offices_image');?>" alt="mahmoud-yousuf" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End client section -->


<section class="pt-120 cta wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <?php the_field('international_offices_banner_heading');?>
        </div>
    </div>
</section>

<section class="pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row product-row">
            <?php if( have_rows('international_offices_flag','options') ): ?>
            <?php while( have_rows('international_offices_flag','options') ): the_row(); 
                                    $image = get_sub_field('international_offices_flag_images','options');
                                    $image2 = get_sub_field('international_offices_arrow_icon', 'options');
                                    ?>
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="flage-card">
                    <img src="<?php the_sub_field('international_offices_flag_images','options');?>"
                        alt="flage-antigua-and-barbuda">
                    <div class="content">
                        <h4 class="title"><?php the_sub_field('international_offices_country_name','options');?></h4>
                        <img src="<?php the_sub_field('international_offices_arrow_icon','options');?>"
                            alt="right-arrow" />
                    </div>

                </div>
            </div>
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</section>

<section class="pb-100 text-center wow fadeIn" data-wow-delay="0.4s">
    <a href="" class="solid-btn">Load More</a>
</section>
<?php 
get_footer();
?>