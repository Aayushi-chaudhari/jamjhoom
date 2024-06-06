<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jamjoom-pharma
 */

?>

</main>
<footer class="site-footer">
    <div class="footer-top bg-lightblue">
        <div class="container">
            <div class="footer-detail site-flex">
                <div class="footer-col">
                    <h3><?php the_field('contact_main_title','option');?></h3>
                    <p><?php the_field('contact_sub_title','option');?></p>
                </div>
                <div class="footer-col">
                    <h5 class="green-text"><?php the_field('company_name','option');?></h5>
                    <p class="location small-16"><?php the_field('address','option');?></p>
                </div>
                <div class="footer-col">
                    <h5 class="green-text"><?php the_field('head_office_name','option');?></h5>
                    <p class="location small-16"><?php the_field('head_office_address','option');?></p>
                </div>
                <div class="footer-col">
                    <h5 class="green-text"><?php the_field('contact_title','option');?></h5>
                    <ul class="contact-list">
                        <li><a href="<?php the_field('website_link','option');?>" class="site-flex para-18"><span
                                    class="site-flex"><img src="<?php the_field('website_image','option'); ?>"
                                        alt="www" /></span><?php the_field('website_link','option');?></a></li>
                        <li><a href="tel:00966126081222" class="site-flex para-18"><span class="site-flex"><img
                                        src="<?php the_field('phone_one_image','option');?>"
                                        alt="www" /></span><?php the_field('phone_one','option');?></a></li>
                        <li><a href="tel:00966-12-6081111" class="site-flex para-18"><span class="site-flex"><img
                                        src="<?php the_field('phone_two_image','option');?>"
                                        alt="www" /></span><?php the_field('phone_two','option');?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-detail site-flex">
                <a href="<?php echo site_url(); ?>" class="logo"><img src="<?php the_field('footer_logo','option');?>"
                        alt="logo" /></a>
                <div class="footer-center site-flex">
                    <p class="white-text small-16"><?php the_field('footer_copyrights_text','option');?></p>
                    <!-- WP Menu -->
                    <?php
                            wp_nav_menu(array(
                                'menu' => 'footer-menu', 
                                'menu_class' => 'nav-menu'
                            ));
                        ?>
                    <!-- End WP Menu -->
                </div>
                <ul class="social-media site-flex">
                    <?php if( have_rows('footer_social_section','option') ): ?>
                    <?php while( have_rows('footer_social_section', 'option') ): the_row(); 
                                    $image = get_sub_field('footer_social_image', 'option');
                                    ?>
                    <li><a href="<?php the_sub_field('footer_social_links','option');?>" target="_blank"><img
                                src="<?php the_sub_field('footer_social_image','option');?>" alt="linkedin"></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>