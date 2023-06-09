<?php
/**
 * wp_rentals functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rentals
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
function wp_rentals_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp_rentals, use a find and replace
		* to change 'wp_rentals' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp_rentals', get_template_directory() . '/languages' );

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
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'wp_rentals' ),
	// 	)
	// );

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
			'wp_rentals_custom_background_args',
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
add_action( 'after_setup_theme', 'wp_rentals_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_rentals_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_rentals_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_rentals_content_width', 0 );

/**
 * Register widget area.
 *


 * Enqueue scripts and styles.
 */


// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

//scripts and styles
function apply_styles()
{
	
	wp_enqueue_style("new_styles", get_stylesheet_directory_uri().'/assets/css/styles.css', []);
	wp_enqueue_style("new_styles1", get_stylesheet_directory_uri().'/slick/slick.css', []);
	wp_enqueue_style("new_styles2", get_stylesheet_directory_uri().'/slick/slick-theme.css', []);
	wp_enqueue_script("script3",  '//code.jquery.com/jquery-1.11.0.min.js',array( 'jquery' ),1.0,true);
	wp_enqueue_script("script4",  '//code.jquery.com/jquery-migrate-1.2.1.min.js',array( 'jquery' ),1.0,true);
	wp_enqueue_script("script5",  get_stylesheet_directory_uri().'/slick/slick.min.js',array( 'jquery' ),1.0,true);
	wp_enqueue_script("script6",   get_stylesheet_directory_uri().'/assets/js/script.js',array( 'jquery','script3' ),1.0,true);
	
	
	
}
add_action('wp_enqueue_scripts','apply_styles');
