<?php 

// Template Name: Media

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
            <p class="white-text para-18 wow fadeIn" data-wow-delay="0.9s"><?php the_field('news_and_events_banner_heading');?></p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="pt-120 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row product-row">
            <?php 
                    $args = array( 
                        'post_type' => 'News and Events', 
                        'posts_per_page' => -1,
                        'order' => 'ASC', );
                    $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product-card">
                    <div class="image-wrapper">
                        <img src="<?php echo $featured_img_url ; ?>" alt="event-image">
                    </div>
                    <h3 class="title"><?php the_title(); ?></h3>
                </div>
            </div>
            <?php wp_reset_postdata();?>
            <?php endwhile;?>
            <?php endif;?>
        </div> 
    </div>
</section>

<section class="pt-120 pb-120 mt-120 mb-120 bg-lightblue wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row product-row">
            <?php $productvideo = get_field("products_videos"); 
                $counter = 0; // Initialize the counter variable
				foreach($productvideo as $videosection){
                $counter++; // Increment the counter for each iteration
                $modal_id = "videoModal" . $counter; // Generate a unique modal ID
		    ?>
            <div class="col-lg-6 col-md-6">
                <div class="product-card video">
                    <div class="image-wrapper">
                        <img src="<?php echo $videosection['products_video_image'];?>" alt="video-image">
                        <div class="content">
                            <p class="date"><?php echo $videosection['products_video_date'];?></p>
                            <h4 class="desc"><?php echo $videosection['products_video_title'];?></h4>
                        </div>
                        <div class="play-btn" data-bs-toggle="modal" data-bs-target="#<?php echo $modal_id; ?>">
                            <img src="<?php echo $videosection['products_video_play_image'];?>" alt="play-btn">
                        </div>
                        <!-- Modal -->
                        <div class="modal vedio-modal fade" id="<?php echo $modal_id; ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="close video-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-body">
                                        <video id="playVedio" width="100%" height="100%" controls>
                                            <source src="<?php echo $videosection['products_video_link'];?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="title"><?php echo $videosection['products_video_title'];?></h3>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer();?>