<?php 

// Template Name: Enviornmental safety

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('environmental_health_banner_subheading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="grid-wrapper pt-120 right-image wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h2 class="primary-text title"><?php the_field('environmental_section_heading_');?></h2>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('environmental_section_image');?>" alt="business-main-image">
                        </div>
                        <?php the_field('environmental_section_description');?>

                        <ul class="common-list">
                            <?php if( have_rows('environmental_section_details') ): ?>
                            <?php while( have_rows('environmental_section_details') ): the_row();             
                                    ?>
                            <li><?php the_sub_field('environmental_section_list');?></li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('environmental_section_image');?>" alt="business-main-image">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-lightblue mt-100 pt-100 pb-100 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('ehs_initiatives_image');?>" alt="business-main-image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="primary-text title"><?php the_field('ehs_initiatives_heading');?></h4>
                        <ul class="common-list">
                            <?php if( have_rows('ehs_initiatives_details') ): ?>
                            <?php while( have_rows('ehs_initiatives_details') ): the_row();             
                                    ?>
                            <li><?php the_sub_field('ehs_initiatives_list');?></li>
                            <?php endwhile ;?>
                            <?php endif ;?>
                        </ul>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('ehs_initiatives_image');?>" alt="business-main-image">
                        </div>
                        <p class="mt-3"><?php the_field('ehs_initiatives_description');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-wrapper pt-120 right-image wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="primary-text title"><?php the_field('ehs_program_heading');?></h4>
                        <ul class="common-list">
                            <?php if( have_rows('ehs_program_details') ): ?>
                            <?php while( have_rows('ehs_program_details') ): the_row();             
                                    ?>
                            <li><?php the_sub_field('ehs_program_list');?></li>
                            <?php endwhile ;?>
                            <?php endif ;?>
                        </ul>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('ehs_program_image');?>"
                                alt="business-main-image">
                        </div>
                        <p class="mt-3">
                        <?php the_field('ehs_program_description');?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('ehs_program_image');?>"
                        alt="business-main-image">
                </div>
            </div>

        </div>
        <!-- <p class="mt-3"><?php the_field('purpose_section_info');?></p> -->
    </div>
</section>

<!-- <section class="pt-100 pb-100 cta">
    <div class="container">
        <div class="common-card-section">
            <img src="<?php the_field('common_banner_image','options');?>" alt="hero-about-image">
            <h3><?php the_field('business_development_inner_banner_title');?></h3>
        </div>
    </div>
</section> -->

<section class="content pt-100  pb-100 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="title">
                <h3 class="primary-text"><?php the_field('csr_heading');?></h3>
                <?php the_field('csr_description');?>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php the_field('csr_image');?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title-wrapper">
                    <div class="title">
                        <h4 class="primary-text"><?php the_field('csr_sub_heading');?></h4>
                    </div>
                </div>
                <ul class="common-list">
                    <?php if( have_rows('csr_list_items') ): ?>
                    <?php while( have_rows('csr_list_items') ): the_row();             
                                    ?>
                    <li><?php the_sub_field('csr_list');?></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <p class="mt-3"><?php the_field('csr_info');?></p>
            </div>

        </div>
    </div>
</section>

<section class="custom-content bg-lightblue pt-100  pb-100 mb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center custom-row">
            <div class="col-lg-6">
                <div class="title-wrapper">
                    <div class="title">
                        <h4 class="primary-text"><?php the_field('csr_example_subheading');?></h4>
                    </div>
                </div>
                <ul class="common-list">
                    <?php if( have_rows('csr_example_list_items') ): ?>
                    <?php while( have_rows('csr_example_list_items') ): the_row();             
                                    ?>
                    <li><?php the_sub_field('csr_example_list');?></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <p class="mt-3"><?php the_field('csr_example_info');?></p>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php the_field('csr_example_image');?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
get_footer();
?>