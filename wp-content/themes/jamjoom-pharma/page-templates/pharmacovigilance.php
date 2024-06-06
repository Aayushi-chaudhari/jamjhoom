<?php 

// Template Name: Pharmacovigilance

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('pharmacovigilance_banner_heading');?></p>
        </div>
    </div>
    <?php include 'facilities-banner-submenu.php';?>
</section>
<!-- End Common Banner -->

<section class="grid-wrapper pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="title-wrapper">
            <img class="title" src="<?php the_field('pharmacovigilance_main_image');?>" alt="business-main-image">
        </div>

        <div class="title-wrapper">
            <h3 class="primary-text title"><?php the_field('pv_responsibilities_heading');?></h3>
        </div>
        <ul class="common-list">
            <?php if( have_rows('pv_responsibilities_details') ): ?>
            <?php while( have_rows('pv_responsibilities_details') ): the_row(); 
                                   
                                    ?>
            <li><?php the_sub_field('pv_responsibilities_list');?></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <?php the_field('pv_responsibilities_description');?>
    </div>
</section>

<section class="bg-lightblue mt-100 pt-100 pb-100 right-image wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="title-wrapper">
                        <h4 class="primary-text title"><?php the_field('benefits_heading');?></h4>
                        <ul class="common-list">
                            <?php if( have_rows('benefits_details') ): ?>
                            <?php while( have_rows('benefits_details') ): the_row();                                   
                                    ?>
                            <li><?php the_sub_field('benefits_list');?></li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <div class="image-wrapper tablet-block">
                            <img src="<?php the_field('benefits_image');?>" alt="business-main-image">
                        </div>
                        <?php the_field('benefits_description');?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 tablet-none">
                <div class="image-wrapper m-0">
                    <img src="<?php the_field('benefits_image');?>" alt="business-main-image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 right-image download-wrap wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <?php
                if( have_rows('download_file') ):
                while( have_rows('download_file') ) : the_row();
                $download_link_english = get_sub_field('download_link_english');
                $download_link_arabic = get_sub_field('download_link_arabic');
                ?>
            <div class="col-lg-6">
                <div class="border-box">
                    <div class="title-wrapper">
                        <h3 class="title"><?php the_sub_field('download_form_heading');?></h3>
                        <div class="download-wrapper">
                            <a href="<?php echo $download_link_english; ?>" class="download-btn english-btn" download>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M55.3168 26.3752C56.783 24.8208 59.2317 24.7492 60.7861 26.2154C62.3405 27.6816 62.4121 30.1303 60.9459 31.6848L34.5566 59.6622C33.9634 61.0374 32.5953 62 31.0024 62C29.4124 62 28.0465 61.041 27.4515 59.6698L1.05506 31.6848C-0.411139 30.1303 -0.339606 27.6816 1.21483 26.2154C2.76926 24.7492 5.21796 24.8208 6.68415 26.3752L27.1334 48.0551L27.1334 3.97357C27.1334 1.83676 28.8656 0.104525 31.0024 0.104525C33.1392 0.104525 34.8715 1.83676 34.8715 3.97357L34.8714 48.051L55.3168 26.3752Z"
                                            fill="#015DA7" />
                                    </svg>
                                </div>
                                <div class="btn-content">
                                    <h3><?php the_sub_field('download_now_title');?> </h3>
                                    <span><?php the_sub_field('file_description');?></span>
                                </div>
                            </a>
                            <a href="<?php echo $download_link_arabic; ?>" class="download-btn arabic-btn" download>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M55.3168 26.3752C56.783 24.8208 59.2317 24.7492 60.7861 26.2154C62.3405 27.6816 62.4121 30.1303 60.9459 31.6848L34.5566 59.6622C33.9634 61.0374 32.5953 62 31.0024 62C29.4124 62 28.0465 61.041 27.4515 59.6698L1.05506 31.6848C-0.411139 30.1303 -0.339606 27.6816 1.21483 26.2154C2.76926 24.7492 5.21796 24.8208 6.68415 26.3752L27.1334 48.0551L27.1334 3.97357C27.1334 1.83676 28.8656 0.104525 31.0024 0.104525C33.1392 0.104525 34.8715 1.83676 34.8715 3.97357L34.8714 48.051L55.3168 26.3752Z"
                                            fill="#015DA7" />
                                    </svg>
                                </div>
                                <div class="btn-content">
                                    <h3><?php the_sub_field('download_now_title');?> </h3>
                                    <span><?php the_sub_field('file_description_arabic');?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="pt-100 pb-100 text-center wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="section-content">
            <div class="title-wrapper">
                <h3 class="title"><?php the_field('adverse_drug_heading');?></h3>
                <div class="download-wrapper">
    
                    <a href="<?php the_field('adverse_drug_download_file_enlglish'); ?>" class="download-btn english-btn" download ><?php the_field('adverse_drug_download_text');?><div
                            class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect width="24" height="24" fill="white" style="mix-blend-mode:multiply" />
                                <path
                                    d="M19.5 17.75H19.25V18V20.75H4.75V18V17.75H4.5H3H2.75V18V21C2.75 21.4641 2.93437 21.9092 3.26256 22.2374C3.59075 22.5656 4.03587 22.75 4.5 22.75H19.5C19.9641 22.75 20.4092 22.5656 20.7374 22.2374C21.0656 21.9092 21.25 21.4641 21.25 21V18V17.75H21H19.5ZM19.6768 10.6768L19.8536 10.5L19.6768 10.3232L18.6193 9.26572L18.4426 9.08906L18.2658 9.26561L13 14.5245V1.5V1.25H12.75H11.25H11V1.5V14.5245L5.73416 9.26561L5.55738 9.08906L5.38072 9.26572L4.32322 10.3232L4.14645 10.5L4.32322 10.6768L11.8232 18.1768L12 18.3536L12.1768 18.1768L19.6768 10.6768Z"
                                    fill="#015DA7" stroke="#015DA7" stroke-width="0.5" />
                            </svg>
                        </div></a>
                    <!-- <a href="<?php the_field('adverse_drug_download_file_arabic'); ?>" class="download-btn arabic-btn" download ><?php the_field('adverse_drug_download_text');?><div
                            class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect width="24" height="24" fill="white" style="mix-blend-mode:multiply" />
                                <path
                                    d="M19.5 17.75H19.25V18V20.75H4.75V18V17.75H4.5H3H2.75V18V21C2.75 21.4641 2.93437 21.9092 3.26256 22.2374C3.59075 22.5656 4.03587 22.75 4.5 22.75H19.5C19.9641 22.75 20.4092 22.5656 20.7374 22.2374C21.0656 21.9092 21.25 21.4641 21.25 21V18V17.75H21H19.5ZM19.6768 10.6768L19.8536 10.5L19.6768 10.3232L18.6193 9.26572L18.4426 9.08906L18.2658 9.26561L13 14.5245V1.5V1.25H12.75H11.25H11V1.5V14.5245L5.73416 9.26561L5.55738 9.08906L5.38072 9.26572L4.32322 10.3232L4.14645 10.5L4.32322 10.6768L11.8232 18.1768L12 18.3536L12.1768 18.1768L19.6768 10.6768Z"
                                    fill="#015DA7" stroke="#015DA7" stroke-width="0.5" />
                            </svg>
                        </div></a> -->
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
get_footer();
?>