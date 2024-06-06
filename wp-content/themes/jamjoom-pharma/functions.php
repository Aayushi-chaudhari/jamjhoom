<?php
/**
 * jamjoom-pharma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jamjoom-pharma
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jamjoom_pharma_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on jamjoom-pharma, use a find and replace
		* to change 'jamjoom-pharma' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jamjoom-pharma', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'jamjoom-pharma' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'jamjoom_pharma_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jamjoom_pharma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jamjoom_pharma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jamjoom_pharma_content_width', 640 );
}
add_action( 'after_setup_theme', 'jamjoom_pharma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jamjoom_pharma_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jamjoom-pharma' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jamjoom-pharma' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jamjoom_pharma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jamjoom_pharma_scripts() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'wow', get_stylesheet_directory_uri() .'/assets/css/wow.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/assets/css/style.css', array(), '1.0', 'all' );

	wp_enqueue_script('jquery-js',get_template_directory_uri().'/assets/js/jquery.min.js',array(),1.1,true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),1.1,true);
	wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js',array(),1.1,true);
	wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js',array(),1.1,true);

}
add_action( 'wp_enqueue_scripts', 'jamjoom_pharma_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));       
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
	acf_add_options_sub_page(array(
        'page_title'    => 'Theme Common Settings',
        'menu_title'    => 'Common Banner',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// function tg_include_custom_post_types_in_search_results( $query ) {

// 	if (is_search() && !is_admin()) {
//         // Modify the post types to include in the search
//         $post_types = array('post', 'page','products', 'popular_category', 'popular_courses', 'latest-news');
//         $query->set('post_type', $post_types);
//     }
// }
// add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_search_results' );


/*
* Creating a function to create our CPT (Custome Post Function.php code)
*/
// Our custom post type function for Services
/*
* Creating a function to create our CPT

*/
function custom_post_type() {

		// Set other options for Custom Post Type (Coming Soon Books CPT)
		$args = array(
			'label'               => __( 'News and Events', 'twentytwenty' ),
			'description'         => __( 'News and Events and reviews', 'twentytwenty' ),
			'all_items'           => __('All News', 'twentytwenty'),
			'labels'              => $labels,
			'menu_icon' => 'dashicons-welcome-write-blog',
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array('category', 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
			'rewrite'               => array('slug' => 'news-and-evets'),
		
		);
			
		// Registering your Custom Post Type (Coming Soon Books CPT)
		register_post_type( 'News and Events', $args );
}
	 
add_action( 'init', 'custom_post_type', 0 );


//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// After Submit contact form redirect to Thank You page

function handle_form_submission() {
	if (isset($_POST['submit'])){
		global $wpdb,$table_prefix;
		$wp_contact_table = $table_prefix.'contact_form';
		$firstname = $wpdb->escape($_POST['firstname']);
		$lastname = $wpdb->escape($_POST['lastname']);
		$emailid = $wpdb->escape($_POST['emailid']);
		$subject = $wpdb->escape($_POST['subject']);
		$message = $wpdb->escape($_POST['message']);
	
		// Insert data to database
		$contact_data = array(
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email' => $emailid,
			'subject' => $subject,
			'message' => $message,
		);
		$wpdb->insert($wp_contact_table, $contact_data);
        
       // Get the URL of the "Thank You" page dynamically
        $thank_you_page_url = get_permalink(get_page_by_path('thank-you')); // Replace with your page slug

        // Redirect to the "Thank You" page
        wp_redirect($thank_you_page_url);
        exit;
    }
}

add_action('init', 'handle_form_submission');

function replace_placeholder_search_text( $form ) {
    $pattern = '/(placeholder=")[^"]*"/';
    $replacement = '$1' . 'Search Product"';
    $form = preg_replace( $pattern, $replacement, $form );
    return $form;
}
add_filter( 'get_search_form', 'replace_placeholder_search_text' );




// function custom_breadcrumbs() {
//     // Define the separator between breadcrumb items
//     $separator = ' 	&frasl; ';

//     // Home page
//     echo '<a href="' . home_url() . '">Home</a>' . $separator;

//     // Check if it's a single post
//     if (is_single()) {
//         // Get the category of the post
//         $categories = get_the_category();
//         if ($categories) {
//             $category = $categories[0];
//             echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>' . $separator;
//         }

//         // Display the post title
//         echo get_the_title();

//     } elseif (is_page()) {
//         // Display the page title
//         echo get_the_title();

//     } elseif (is_category()) {
//         // Display the category title
//         echo single_cat_title();

//     } elseif (is_tag()) {
//         // Display the tag title
//         echo single_tag_title();

//     } elseif (is_archive()) {
//         // Display the archive title
//         echo get_the_archive_title();

//     } elseif (is_search()) {
//         // Display the search result title
//         echo 'Search Results';

//     } elseif (is_404()) {
//         // Display the 404 error title
//         echo '404 Not Found';

//     }

//     // If it's a paged archive, add the page number
//     if (get_query_var('paged')) {
//         echo ' (' . __('Page', 'text-domain') . ' ' . get_query_var('paged') . ')';
//     }
// }
