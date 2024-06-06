<?php 

// Template Name: Home

get_header();
?>

<!-- Home Banner -->
<section class="home-banner">
    <div class="home-banner-top">
        <div class="container">
            <div class="banner-content site-flex">
                <div class="title-wrapper">
                    <h1 class="title white-text wow fadeIn" data-wow-delay="0.6s"><?php the_field('banner_title');?></h1>
                    <p class="white-text wow fadeIn" data-wow-delay="0.9s"><?php the_field('banner_description');?></p>
                </div>
                <!-- <a href="<?php the_field('explore_more_link');?>" class="explore-more-btn"
                    ><?php the_field('explore_more');?></a> -->
            </div>
        </div>
    </div>
    <div class="home-banner-bottom">
        <div class="container">
            <div class="image-wrapper wow fadeIn" data-wow-delay="1s">
                <img src="<?php the_field('banner_image');?>" alt="banner-image">
            </div>
        </div>
    </div>
</section>
<!-- End Home Banner -->

<!-- Regions -->

<section class="regions grid-wrapper pt-120 pb-120 about-content wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="title primary-text mw-100"><?php the_field('welcome_regions_heading');?></h2>
            
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php the_field('welcome_regions_image');?>" alt="regions-image">
                </div>
            </div>
            <div class="col-lg-6">
            <h4 class="title"><?php the_field('welcome_regions_sub_heading');?></h4>
                <div class="section-content">
                    <div class="title-wrapper">
                    <ul class="common-list">
                            <?php if (have_rows('welcome_region_details')) : ?>
                            <?php while (have_rows('welcome_region_details')) : the_row(); ?>
                            <?php $region_detail_text = get_sub_field('welcome_region_detail_text'); ?>
                            <?php $region_full_text = get_sub_field('welcome_region_detail_full_content'); ?>
                            <?php if ($region_detail_text) : ?>
                            <li>
                                <div class="region-detail">
                                    <div class="content">
                                        <?php echo $region_detail_text; ?>
                                    </div>
                                </div>
                            </li>
                            <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                        <div class="full-content" style="display: none;">
                            <?php if (have_rows('welcome_region_details')) : ?>
                            <ul>
                                <?php while (have_rows('welcome_region_details')) : the_row(); ?>
                                <?php $region_full_text = get_sub_field('welcome_region_detail_full_content'); ?>
                                <?php if ($region_full_text) : ?>
                                <li><?php echo $region_full_text; ?></li>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>

                        <a href="#" class="solid-btn read-more-link">Read More</a>
                        <a href="#" class="solid-btn read-less-link" style="display: none;">Read Less</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Regions -->

<!-- News and Events -->
<section class="regions grid-wrapper-rtl mt-60 pt-100 pb-100 bg-lightblue wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="title primary-text"><?php the_field('news_heading');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('event_image');?>" alt="events-image">
                        </div>
                        <h3 class="title"><?php the_field('news_sub_heading');?></h3>
                        <ul class="common-list news-events-list">
                            <?php if( have_rows('news_details') ): ?>
                            <?php while( have_rows('news_details') ): the_row();             
                                    ?>
                            <li><?php the_sub_field('news_details_text');?></li>
                            <?php endwhile; ?>
                            <?php endif;?>
                        </ul>
                        <a href="<?php the_field('news_read_more_button_link');?>"
                            class="solid-btn"><?php the_field('news_read_more_button');?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('event_image');?>" alt="events-image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News and Events -->

<!-- Regions -->
<section class="regions grid-wrapper pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('pharmacovigilance_image');?>" alt="pharmacovigilance-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="title primary-text"><?php the_field('pharmacovigilance_heading');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('pharmacovigilance_image');?>" alt="pharmacovigilance-image">
                        </div>
                        <p><?php the_field('pharmacovigilance_information');?></p>
                        <!-- <ul class="common-list ">
                            <?php if( have_rows('pharmacovigilance_details') ): ?>
                            <?php while( have_rows('pharmacovigilance_details') ): the_row();             
                                    ?>
                            <li><?php the_sub_field('pharmacovigilance_details_text');?></li>
                            <?php endwhile;?>
                            <?php endif;?>
                        </ul> -->
                        <a href="<?php the_field('pharmacovigilance_read_more_link');?>"
                            class="solid-btn"><?php the_field('pharmacovigilance_read_more_button');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Regions -->

<?php get_footer();?>