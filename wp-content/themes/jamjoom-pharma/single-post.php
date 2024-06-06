<?php 

// Template Name: single-details

get_header();
?>
<!-- Common Banner -->
<section class="site-banner">
    <div class="image-wrapper">
        <img src="<?php the_field('common_banner_image','options');?>" alt="banner-image">
    </div>
    <div class="banner-content">
        <div class="container">
            <h1 class="white-text">Product details</h1>
            <p class="white-text para-18">Brimo is Excellent choice as an adjunctive therapy for Open-angle glaucoma.</p>
        </div>
    </div>
</section>
<!-- End Common Banner -->

<section class="product-details pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="product-image-grid">
					<!-- Left column with three thumbnail images -->
					<div class="thumbnail-container">
						<div class="thumbnail-image">
							<img class="thumbnail" src="<?php the_field('product_detail_image_one');?>" alt="Image 1">
						</div>
						<div class="thumbnail-image">
							<img class="thumbnail" src="<?php the_field('product_detail_image_two');?>" alt="Image 2">
						</div>
						<div class="thumbnail-image">
							<img class="thumbnail" src="<?php the_field('product_detail_image_three');?>" alt="Image 3">
						</div>
					</div>
					<!-- Right column with the selected image -->
					<div class="image-viewer">
						<img id="selected-image" src="<?php the_field('product_detail_image_one');?>" alt="Selected Image">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product-content">
					<h3><?php echo the_title();?></h3>
					<div class="desc mb-60"><?php echo the_content();?></div>
					<h4 class="primary-text"><?php the_field('description_title');?></h4>
					<div class="product-content-group">
						<h4><?php the_field('composition_title');?></h4>
						<h4><?php the_field('composition_description');?></h4>
					</div>
					<div class="product-content-group">
						<h4><?php the_field('indications_title');?></h4>
						<h4><?php the_field('indications_description');?></h4>
					</div>
					<div class="product-content-group">
						<h4><?php the_field('pack_title');?></h4>
						<h4><?php the_field('pack_description');?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="shareTopdetailwrap">
								<p>Share this post</p>
								<ul class="socials-icon">
									<li>
										<a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="Linkedin">
											<i class="icon-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" title="Facebook">
											<i class="icon-facebook"></i>
										</a>
									</li>

									<li>
										<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" title="Twitter">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php the_title(); ?>" target="_blank" title="Pinterest">
											<i class="icon-pinterest"></i>
										</a>
									</li>
								</ul>
							</div>

<?php get_footer();?>