<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jamjoom-pharma
 */

?>
<!doctype html>
<html  <?php language_attributes(); ?>>
<?php
// $translated_meta_title = get_post_meta(get_the_ID(), 'meta_title_ar', true);

// if (function_exists('translatepress_get_active_language')) {
//     $active_language = translatepress_get_active_language();

//     if ($active_language === 'ar' && !empty($translated_meta_title)) {
//         echo esc_html($translated_meta_title);
//     } else {
//         wp_title('');
//     }
// }
?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <header class="site-header">
            <div class="container">
                <div class="header-boday site-flex">
                    <?php
			               $logoimg=get_header_image();
			            ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo $logoimg; ?>"
                            alt="logo" /></a>
                    <div class="header-right site-flex">
                        <!-- WP Menu -->                       
                                <?php
                            wp_nav_menu(array(
                                'menu' => 'primary-menu', 
                                'menu_class' => 'nav-menu',
                            ));
                        ?>
                        <!-- End WP Menu -->
                        <div class="header-action site-flex">
                            <div class="mobile-toggle"><i></i></div>
                            <a href="javascript:void(0)" class="search-open">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-search-white.svg" alt="icon-search">
                            </a>
                            <div class="search-body">
                                <div class="search-inner">
                                    <!-- <div class="search-close"></div> -->
                                    <!-- <?php get_search_form(); ?>  -->
                                    <div class="product-search">
                                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                                    </div>
                                </div>
                            </div>      
                            <?php echo do_shortcode('[language-switcher]');?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="site-content">