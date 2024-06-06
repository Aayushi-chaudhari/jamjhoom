<?php 

// Template Name: Distributor map

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('distributor_map_banner_sub_heading');?></p>
        </div>
    </div>
    <?php include 'sale-distribution-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="distributer-content pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <h2 class="title primary-text"><?php the_field('passion_for_excellence_heading');?></h2>
                    <div class="image-wrapper">
                        <img src="<?php the_field('passion_for_excellence_map_image');?>" alt="distributor-map-image">
                    </div>
                    <!-- <?php the_field('passion_for_excellence_details');?> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="grid-wrapper pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image-wrapper tablet-none m-0">
                    <img src="<?php the_field('passion_for_excellence_image');?>" alt="mahmoud-yousuf">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title-wrapper">
                    <h2 class="title primary-text"><?php the_field('sales_and_distribution_heading');?></h2>
                    <div class="image-wrapper tablet-block mr-30">
                        <img src="<?php the_field('passion_for_excellence_image');?>" alt="mahmoud-yousuf">
                    </div>
                    <div class="mt-3"><?php the_field('passion_for_excellence_details');?></div> 
                </div>
            </div>
        </div>
       <div class="mt-5"><?php the_field('passion_for_excellence_more_details');?></div> 
    </div>
    </div>
</section>

<section class="pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row product-row">
            <?php if( have_rows('international_offices_flag','options') ): ?>
            <?php while( have_rows('international_offices_flag','options') ): the_row(); 
                                    $image = get_sub_field('international_offices_flag_images','options');
                                    $image2 = get_sub_field('international_offices_arrow_icon', 'options');
                                    ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="flage-card">
                    <img src="<?php the_sub_field('international_offices_flag_images','options');?>"
                        alt="flage-antigua-and-barbuda">
                    <div class="content">
                        <h4 class="title"><?php the_sub_field('international_offices_country_name','options');?></h4>
                        <img src="<?php the_sub_field('international_offices_arrow_icon','options');?>"
                            alt="right-arrow">
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</section>

<section class="pb-100 text-center wow fadeIn" data-wow-delay="0.4s">
    <a href="" target="_blank" class="solid-btn">Load More</a>
</section>

<?php 
get_footer();
?>