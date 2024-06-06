<?php 

// Template Name: Quality System

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('quality_system_banner_subheading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="grid-wrapper pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 tablet-none">
                <div class="image-wrapper mr-0">
                    <img src="<?php the_field('quality_control_image');?>" alt="methods-utilized">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="title primary-text"><?php the_field('quality_control_heading');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('quality_control_image');?>" alt="methods-utilized">
                        </div>
                        <?php the_field('quality_control_description');?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="quality-system-list pt-60">
            <ul class="common-list ">
                <?php if( have_rows('quality_control_method') ): ?>
                <?php while( have_rows('quality_control_method') ): the_row(); 
                                    
            ?>
                <li><?php the_sub_field('quality_control_method_list');?></li>
                <?php endwhile; ?>
                <?php endif;?>
            </ul>
        </div>
        <div class="pt-120">
            <h2 class="primary-text"><?php the_field('microbiology_laboratory_heading');?></h2>
            <?php the_field('microbiology_laboratory_description');?>
        </div> -->
    </div>
</section>

<section class="content pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center custom-row">
            <div class="col-lg-6">
                <div class="title-wrapper">
                    <div class="title">
                        <h4 class="primary-text"><?php the_field('quality_assurance_heading');?></h4>
                    </div>
                </div>
                <ul class="common-list">
                    <?php if( have_rows('quality_assurance_description') ): ?>
                    <?php while( have_rows('quality_assurance_description') ): the_row();             
                                    ?>
                    <li><?php the_sub_field('quality_assurance_detail');?></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php the_field('quality_assurance_image');?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content quality-content bg-lightblue pt-100  pb-100 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="title">
                <h4 class="primary-text"><?php the_field('quality_control_elements_heading');?>
                </h4>
            </div>
        </div>
        <ul class="common-list">
            <?php if( have_rows('quality_control_elements_details') ): ?>
            <?php while( have_rows('quality_control_elements_details') ): the_row();             
                                    ?>
            <li><?php the_sub_field('quality_control_elements_description');?></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <p class="mt-3"><?php the_field('quality_control_elements_info');?></p>
    </div>
</section>

<!-- <section class="validation grid-wrapper-rtl bg-lightblue pt-60  pb-60 mt-60 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h3 class="primary-text"><?php the_field('validation_heading');?></h3>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('validation_image');?>" alt="validation-image">
                        </div>
                        <?php the_field('validation_description');?>
                        <ul class="common-list">
                            <?php if( have_rows('validation_list_items') ): ?>
                            <?php while( have_rows('validation_list_items') ): the_row();                                     
                            ?>
                            <li><?php the_sub_field('validation_list');?></li>
                            <?php endwhile;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('validation_image');?>" alt="validation-image">
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php 
get_footer();
?>