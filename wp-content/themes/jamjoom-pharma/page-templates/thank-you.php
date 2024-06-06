<?php 

// Template Name: Thank You

get_header();?>
<!-- Common Banner -->
<section class="site-banner page-not-found thank-you">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text"><?php echo the_title();?></h1>
            <h4 class="sub-title"><?php the_field('thank_you_message');?></h4>
            <?php the_field('thank_you_details');?>
        </div>
    </div>
</section>
<!-- End Common Banner -->
<?php get_footer();?>