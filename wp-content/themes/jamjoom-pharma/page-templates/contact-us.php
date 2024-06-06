<?php 

// Template Name: Contact Us

get_header();
?>

<!-- custom contact form -->

<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text wow fadeIn" data-wow-delay="0.6s"><?php echo the_title();?></h1>
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('banner_sub_heading'); ?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="get-in-touch pt-60 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div id="get-in-touch" class="head site-flex">
            <h2><?php the_field('get_in_touch_heading'); ?></h2>
            <ul class="social-media-contact site-flex tablet-none">
                <?php $social_icon = get_field("contact_social_icons"); 
                            foreach($social_icon as $socialicon){
                        ?>
                <li><a href="<?php echo $socialicon['icon_url']; ?>" target="_blank"><img
                            src="<?php echo $socialicon['icon_image']; ?>" alt="fb"></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <form method="POST" id="contactForm" class="contact-form white-card">
                    <h4><?php the_field('contact_form_title'); ?></h4>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="input-group">
                                <input type="text" id="fname" name="firstname" placeholder="First Name">
                                <span class="error-message" id="fnameError"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="input-group">
                                <input type="text" id="lname" name="lastname" placeholder="Last Name">
                                <span class="error-message" id="lnameError"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="input-group">
                                <input type="text" id="email" name="emailid" placeholder="Enter Email Address">
                                <span id="emailError" class="error-message"></span>
                            </div>                            
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="input-group">
                                <input type="text" id="subject" name="subject" placeholder="Subject"> 
                                <span class="error-message" id="subjectError"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <textarea id="subject" rows="3" name="message"
                                    placeholder="Enter Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn-group site-flex">
                                <input type="submit" id="submitButton" value="Send Email" name="submit" class="solid-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details white-card">
                    <p class="desc"><?php the_field('contact_section_description'); ?></p>
                    <ul class="contact-us-detail">
                        <li class="site-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact-location.svg"
                                alt="location"><?php the_field('contact_address'); ?></li>
                        <li class="site-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact-send.svg"
                                alt="send"><?php the_field('head_office_address'); ?></li>
                    </ul>
                    <ul class="contact-us-detail contact-link">
                        <li><a href="tel:<?php the_field('contact_no_1'); ?>" class="site-flex"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact-calling.svg"
                                    alt="calling"><?php the_field('contact_no_1'); ?></a></li>
                        <li><a href="tel:<?php the_field('contact_no_2'); ?>" class="site-flex"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact-folder.svg"
                                    alt="folder"><?php the_field('contact_no_2'); ?></a></li>
                        <li><a href="<?php the_field('website'); ?>" class="site-flex"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact-global.svg"
                                    alt="global"><?php the_field('website'); ?></a></li>
                    </ul>
                    <ul class="social-media-contact site-flex tablet-block">
                        <?php $social_icon = get_field("contact_social_icons"); 
                            foreach($social_icon as $socialicon){
                        ?>
                        <li><a href="<?php echo $socialicon['icon_url']; ?>" target="_blank"><img
                                    src="<?php echo $socialicon['icon_image']; ?>" alt="fb"></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end custom form -->
<?php 
get_footer();
?>