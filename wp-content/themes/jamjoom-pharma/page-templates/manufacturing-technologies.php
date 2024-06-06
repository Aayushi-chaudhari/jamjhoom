<?php 

// Template Name: Manufacturing Techologies

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('banner_heading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="manufacturing-facility grid-wrapper-rtl pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <div class="image-wrapper tablet-none">
                <img src="<?php the_field('manufacturing_facility_image');?>" alt="manufacturing-facility">
            </div>
            <h2 class="title primary-text"><?php the_field('manufacturing_facility_heading');?></h2>
            <div class="image-wrapper tablet-block">
                <img src="<?php the_field('manufacturing_facility_image');?>" alt="manufacturing-facility">
            </div>
            <?php the_field('manufacturing_facility_details');?>
        </div>
    </div>
</section>

<section class="manufacturing-capability bg-lightblue pt-100  pb-100 mt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="title-wrapper">
        <h2 class="title  primary-text text-center"><?php the_field('manufacturing_capabilities_heading');?></h2>
    </div>
    <div class="container">
        <div class="capability-wrapper">
            <div class="row justify-content-center">
                <?php if( have_rows('manufacturing_capabilities__details') ): ?>
                <?php while( have_rows('manufacturing_capabilities__details') ): the_row();             
                                    ?>
                <div class="col-lg-4 custom-flex">
                    <div class="box">
                        <h4><?php the_sub_field('manufacturing_capabilities_details_heading');?></h4>
                        <p><?php the_sub_field('manufacturing_capabilities_details_subdetail');?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>

<section class="grid-wrapper-rtl pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="title primary-text"><?php the_field('manufacturing_team_heading');?></h4>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('manufacturing_team_image');?>" alt="manufacturing-team" />
                        </div>
                        <?php the_field('manufacturing_team_description');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper  m-0">
                    <img src="<?php the_field('manufacturing_team_image');?>" alt="manufacturing-team" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-wrapper pt-120 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper mr-0">
                    <img src="<?php the_field('machinery_&_equipment_image');?>" alt="machinery-equipment" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="title primary-text"><?php the_field('manufacturing_team_phases_three_heading');?>
                        </h4>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('manufacturing_team_phases_three_image');?>"
                                alt="machinery-equipment" />
                        </div>
                        <?php the_field('manufacturing_team_phases_three_description');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-box pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="gray-box">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="image-wrapper">
                        <img src="<?php the_field('expansion_potential_gelatin_image');?>">
                    </div>
                </div>
                <div class="col-lg-8">
                    <h4 class="primary-text"><?php the_field('expansion_potential_gelatin_heading');?></h4>
                    <?php the_field('expansion_potential_gelatin_description');?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-box wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="gray-box">
            <div class="row align-items-center custom-row">
                <div class="col-lg-8">
                    <h3><?php the_field('expansion_potential_invested_heading');?></h3>
                </div>

                <div class="col-lg-4">
                    <div class="image-wrapper">
                        <img src="<?php the_field('expansion_potential_invested_image');?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="client  pt-120 pb-120 custom-content wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center  custom-row">
            <div class="col-lg-6">
                <div class="title-wrapper">
                    <?php if( have_rows('jeddah_details') ): ?>
                    <?php while( have_rows('jeddah_details') ): the_row();             
                                    ?>
                    <div class="title">
                        <h4 class=" primary-text"><?php the_sub_field('jeddah_details_heading');?></h4>
                        <?php the_sub_field('jeddah_details_description');?>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?php the_field('jeddah_details_image');?>">
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>