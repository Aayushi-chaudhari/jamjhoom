<?php 

// Template Name: Career

get_header();
?>
<!-- Common Banner -->
<!-- End Common Banner -->

<section class="grid-wrapper pt-60 pb-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="title primary-text"><?php the_field('career_section_title'); ?></h4>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('career_section_image'); ?>" alt="<?php the_field('career_section_image_text'); ?>">
                        </div>
                       <?php the_field('career_section_description'); ?>
                        <a href="<?php the_field('apply_job_button_url'); ?>" target="_blank" class="solid-btn mw-460"><?php the_field('apply_job_button_title'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper m-0">
                    <img src="<?php the_field('career_section_image'); ?>" alt="<?php the_field('career_section_image_text'); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>

