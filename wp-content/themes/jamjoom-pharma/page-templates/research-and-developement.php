<?php 

// Template Name: Research and Developement

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('research_&_development_banner_subheading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="content pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('innovative_force_section_image');?>" alt="r-and-d">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="primary-text"><?php the_field('innovative_force_section_heading');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('innovative_force_section_image');?>" alt="r-and-d">
                        </div>
                        <?php the_field('innovative_force_section_description');?>
                        <!-- <a href="<?php the_field('innovative_force_read_more_link');?>" class="solid-btn" ><?php the_field('innovative_force_read_more');?></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-wrapper-rtl pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="primary-text"><?php the_field('r&d_department_heading');?></h4>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('r&d_department_image');?>" alt="core-r-and-d">
                        </div>
                        <ul class="common-list">
                            <?php if( have_rows('r&d_department_detail') ): ?>
                            <?php while( have_rows('r&d_department_detail') ): the_row(); 
                                   
                                    ?>
                            <li><?php the_sub_field('r&d_department_list');?></li>
                            <?php endwhile;?>
                            <?php endif; ?>
                        </ul>
                        <p class="mt-3"><?php the_field('r&d_department_description');?></p>
                        <!-- <a href="<?php the_field('core_strengths_read_more_link');?>" class="solid-btn" ><?php the_field('core_strengths_read_more');?></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper m-0">
                    <img src="<?php the_field('core_strengths_image');?>" alt="core-r-and-d">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>