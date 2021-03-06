<?php
/**
 * Codeilo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Codeilo
 */

if ( ! function_exists( 'codeilo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function codeilo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Codeilo, use a find and replace
	 * to change 'codeilo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'codeilo', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'codeilo' ),
		'menu-2' => esc_html__( 'Secondary', 'codeilo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'codeilo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'codeilo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codeilo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'codeilo_content_width', 640 );
}
add_action( 'after_setup_theme', 'codeilo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codeilo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'codeilo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'codeilo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'codeilo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function codeilo_scripts() {
	wp_enqueue_style( 'codeilo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'codeilo-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'codeilo-owl', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'codeilo-theme', get_template_directory_uri() . '/assets/css/style.css' );

	// 
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'codeilo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'codeilo-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'codeilo-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'codeilo-masonry', '//masonry.desandro.com/masonry.pkgd.js', array(), time(), true );
	wp_enqueue_script( 'codeilo-imagesloaded', '//imagesloaded.desandro.com/imagesloaded.pkgd.js', array(), time(), true );
	wp_enqueue_script( 'codeilo-theme', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'codeilo-contact-jq-min', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array());
	wp_enqueue_script( 'codeilo-contact-custom', get_template_directory_uri() . 'assets/js/custom.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'codeilo-contact-map', get_template_directory_uri() . '/assets/js/map.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'codeilo-contact-map-key', '//maps.googleapis.com/maps/api/js?key=AIzaSyDRlJ1-uvSWHRlqHvQgXovaoNCugIRSWww&callback=initMap', array(), time(), true );


}
add_action( 'wp_enqueue_scripts', 'codeilo_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function codeilo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'codeilo_pingback_header' );

/**
 * Load extras.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
