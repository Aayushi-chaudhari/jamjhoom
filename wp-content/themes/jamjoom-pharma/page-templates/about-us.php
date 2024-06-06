<?php 

// Template Name: About us

get_header();
?>
<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text wow fadeIn" data-wow-delay="0.6s"><?php echo the_title();?></h1>
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('banner_heading');?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<!-- Efficacy & Excellence -->
<section class="excellence  pt-40 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="title primary-text"><?php the_field('excellence_heading');?></h2>
            <?php the_field('excellence_description');?>
            <ul class="common-list mb-30">
                <?php if( have_rows('excellence_strategy_list') ): ?>
                <?php while( have_rows('excellence_strategy_list') ): the_row();             
                                    ?>
                <li><?php the_sub_field('excellence_strategy_list_item');?></li>
                <?php endwhile; ?>
                <?php endif;?>
            </ul>
            <p><?php the_field('excellence_strategy_info'); ?></p>
        </div>
    </div>
</section>


<!-- End Efficacy & Excellence -->

<!-- client section -->
<section class="client pt-100 pb-100 mt-120  grid-wrapper-rtl  bg-lightblue wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('chairman_image');?>" alt="mahmoud-yousuf" />
                        </div>
                        <h4 class="top-title"><?php the_field('chairman_main_heading');?></h4>
                        <h3 class="title primary-text"><?php the_field('chairman_heading');?></h3>
                        <h4 class="title"><?php the_field('chairman_sub_heading');?></h4>
                        <?php the_field('chairman_description');?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper">
                    <img src="<?php the_field('chairman_image');?>" alt="mahmoud-yousuf" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End client section -->

<!-- client section -->
<section class="client pt-120 pb-120 grid-wrapper wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 tablet-none">
                <div>
                    <img src="<?php the_field('ceo_image');?>" alt="tarek-hosni" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('ceo_image');?>" alt="tarek-hosni" />
                        </div>
                        <h4 class="top-title"><?php the_field('ceo_main_heading');?></h4>
                        <h3 class="title primary-text"><?php the_field('ceo_heading');?></h3>
                        <h4 class="title"><?php the_field('ceo_sub_heading');?></h4>
                        <?php the_field('ceo_description');?>
                        <!-- <a href="<?php the_field('ceo_watch_now_button_link');?>" class="solid-btn"><?php the_field('ceo_watch_now_button');?></a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End client section -->
<?php get_footer();?>