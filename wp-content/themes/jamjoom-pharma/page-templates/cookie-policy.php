<?php 
/** 
 * Template Name: Cookie Policy
 *
 */
get_header();
?>
<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text"><?php echo the_title();?></h1>
            <p class="white-text para-18"><?php the_field('banner_cookie_policy_sub_heading'); ?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->
<section class="policy-content pt-60 pb-120">
    <div class="container">
        <div class="title-wrapper">
            <h2><?php the_field('cookie_policy_title'); ?></h2>
            <p><?php the_field('cookie_policy_description'); ?></p>
        </div>
    </div>
</section>

<?php get_footer();?>