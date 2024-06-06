<?php 

// Template Name: Saudi arabia

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('saudi_arabia_banner_sub_heading');?></p>
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
                            <img src="<?php the_field('saudi_arabia_main_image');?>" alt="mahmoud-yousuf" />
                        </div>
                        <h2 class="title primary-text"><?php the_field('saudi_arabia_offices_heading');?></h2>
                        <?php the_field('saudi_arabia_offices_details');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('saudi_arabia_main_image');?>" alt="mahmoud-yousuf" />
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
            <?php the_field('saudi_arabia_banner_heading');?>
        </div>
    </div>
</section>

<section class="pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper pb-60">
            <h2 class="title primary-text"><?php the_field('medicine_stores_heading');?></h2>
            <p><?php the_field('medicine_stores_subheading');?></p>
        </div>
        <div class="row product-row">
            <div class="col-xxl-4 col-lg-6 col-12">
                <div class="stores-card">
                    <h3><?php the_field('medicine_stores_city_name');?></h3>
                    <div class="stores-details">
                        <div class="stores-details-top">
                        <?php the_field('medicine_stores_address');?>
                        </div>                       
                        <ul class="contact-us-detail contact-link">
                            <li>
                                <a href="tel:<?php the_field('phone_number_one');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image');?>" alt="calling">
                                    <?php the_field('phone_number_one');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('website_url');?>" target="_blank" class="site-flex">
                                    <img src="<?php the_field('website_image');?>" alt="global">
                                    <?php the_field('website_url');?>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?php the_field('phone_number_two');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image_two');?>" alt="folder">
                                    <?php the_field('phone_number_two');?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php the_field('mail_id');?>" target="_blank" class="site-flex">
                                    <img src="<?php the_field('mail_image');?>" alt="icon-message-black">
                                    <?php the_field('mail_id');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
                <div class="stores-card">
                    <h3><?php the_field('saudi_arabia_second_heading');?></h3>
                    <div class="stores-details">
                        <ul class="contact-us-detail contact-link">
                            <li>
                                <a href="tel:<?php the_field('saudi_arabia_second_phone_one');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image');?>" alt="calling">
                                    <?php the_field('saudi_arabia_second_phone_one');?>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?php the_field('saudi_arabia_second_phone_two');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image_two');?>" alt="folder">
                                    <?php the_field('saudi_arabia_second_phone_two');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-12">
                <div class="stores-card">
                    <h3><?php the_field('khamis_mushait_branch_heading');?></h3>
                    <div class="stores-details">
                    <p><?php the_field('khamis_mushait_branch_address');?></p>
                        <ul class="contact-us-detail contact-link">
                            <li>
                                <a href="tel: <?php the_field('khamis_mushait_branch_phone_one');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image');?>" alt="calling">
                                    <?php the_field('khamis_mushait_branch_phone_one');?>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?php the_field('khamis_mushait_branch_phone_two');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image_two');?>" alt="folder">
                                    <?php the_field('khamis_mushait_branch_phone_two');?>
                                </a>
                            </li>
                        </ul>
                        <ul class="contact-us-detail contact-link">
                            <li>
                                <a href="tel:<?php the_field('khamis_mushait_branch_phone_three');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image');?>" alt="calling">
                                    <?php the_field('khamis_mushait_branch_phone_three');?>
                                </a>
                            </li>
                            <li>
                                <a href="tel: <?php the_field('khamis_mushait_branch_phone_four');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image_two');?>" alt="folder">
                                    <?php the_field('khamis_mushait_branch_phone_four');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper pb-60">
            <h2 class="title primary-text"><?php the_field('tamer_group_heading');?></h2>
            <p><?php the_field('tamer_group_subheading');?></p>
        </div>
        <div class="row product-row">
            <div class="col-xxl-4 col-lg-6 col-12">
                <div class="stores-card">
                    <h3><?php the_field('tamer__store_data_heading');?></h3>
                    <div class="stores-details">
                        <div class="stores-details-top"> 
                        <?php the_field('tamer_store_data_address');?>
                        </div>
                        <ul class="contact-us-detail contact-link">
                            <li>
                                <a href="tel:<?php the_field('tamer_store_data_phone_one');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image');?>" alt="calling">
                                    <?php the_field('tamer_store_data_phone_one');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('tamer_store_data_website');?>" target="_blank" class="site-flex">
                                    <img src="<?php the_field('website_image');?>" alt="global">
                                    <?php the_field('tamer_store_data_website');?>
                                </a>
                            </li>
                            <li>
                                <a href="tel: <?php the_field('tamer_store_data_phone_two');?>" class="site-flex">
                                    <img src="<?php the_field('phone_image_two');?>" alt="folder">
                                    <?php the_field('tamer_store_data_phone_two');?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php the_field('tamer_store_data_mail');?>" target="_blank" class="site-flex">
                                    <img src="<?php the_field('mail_image');?>" alt="icon-message-black">
                                    <?php the_field('tamer_store_data_mail');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
get_footer();
?>