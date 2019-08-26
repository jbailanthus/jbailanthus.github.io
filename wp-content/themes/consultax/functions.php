<?php
/**
 * Consultax functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Consultax
 */

if ( ! function_exists( 'consultax_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function consultax_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change 'consultax' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'consultax', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary Menu', 'consultax' ),
			'footer'  => esc_html__( 'Footer Menu', 'consultax' ),
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

		// Add image sizes
        add_image_size( 'consultax-recent-post-thumbnail', 68, 70, array( 'center', 'center' ) );
        add_image_size( 'consultax-latest-news-thumbnail', 650, 351, array( 'center', 'center' ) );
        add_image_size( 'consultax-latest-news-thumbnail-second', 200, 251, array( 'center', 'center' ) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, and column width.
	 	 */
		add_editor_style( array( 'css/editor-style.css', consultax_fonts_url() ) );
		
	}
endif;
add_action( 'after_setup_theme', 'consultax_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function consultax_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'consultax_content_width', 640 );
}
add_action( 'after_setup_theme', 'consultax_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function consultax_widgets_init() {
	/* Register the 'primary' sidebar. */
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'consultax' ),
		'id'            => 'primary',
		'description'   => esc_html__( 'Add widgets here.', 'consultax' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	/* Register the 'service' sidebar. */
	register_sidebar( array(
		'name'          => esc_html__( 'Service Sidebar', 'consultax' ),
		'id'            => 'service',
		'description'   => esc_html__( 'Add widgets here.', 'consultax' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	/* Register the 'shop' sidebar. */
	register_sidebar( array(
		'name'          => esc_html__( 'Product Sidebar', 'consultax' ),
		'id'            => 'product',
		'description'   => esc_html__( 'Add widgets here.', 'consultax' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	/* Repeat register_sidebar() code for additional sidebars. */

	register_sidebar( array(
		'name'          => __( 'Footer First Widget Area', 'consultax' ),
		'id'            => 'footer-area-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'consultax' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Second Widget Area', 'consultax' ),
		'id'            => 'footer-area-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'consultax' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Third Widget Area', 'consultax' ),
		'id'            => 'footer-area-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'consultax' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Fourth Widget Area', 'consultax' ),
		'id'            => 'footer-area-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'consultax' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'consultax_widgets_init' );

/**
 * Register custom fonts.
 */
if ( ! function_exists( 'consultax_fonts_url' ) ) :
/**
 * Register Google fonts for Blessing.
 *
 * Create your own consultax_fonts_url() function to override in a child theme.
 *
 * @since Blessing 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function consultax_fonts_url() {
    
    $protocol = is_ssl() ? 'https' : 'http';
	$fonts_url = '';
	$font_families     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'consultax' ) ) {
		$font_families[] = 'Montserrat:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i';
	}
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'consultax' ) ) {
		$font_families[] = 'Open Sans:400,400i,600,600i,700,700i';
	}

	if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( $subsets ),
		), $protocol.'://fonts.googleapis.com/css' );
	}
	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Enqueue scripts and styles.
 */
function consultax_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'consultax-fonts', consultax_fonts_url(), array(), null );

	/** All frontend css files **/ 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.0', 'all');

	/** load fonts icons **/
    wp_enqueue_style( 'awesome-font', get_template_directory_uri().'/css/font-awesome.css');
    wp_enqueue_style( 'ionicon-font', get_template_directory_uri().'/css/ionicon.css');

    /** Slick slider **/
    wp_enqueue_style( 'slick-slider', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css');

    /** Magnific Popup **/
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');

    if( consultax_get_option('preload') != false ){
		wp_enqueue_style( 'consultax-preload', get_template_directory_uri().'/css/royal-preload.css');
	}

	/** Theme stylesheet. **/
	wp_enqueue_style( 'consultax-style', get_stylesheet_uri() );	

	if( consultax_get_option('preload') != false ){
		wp_enqueue_script("consultax-royal-preloader", get_template_directory_uri()."/js/royal_preloader.min.js",array('jquery'), '1.0', false); 
	} 

    wp_enqueue_script( 'countto', get_template_directory_uri() . '/js/countto.min.js', array( 'jquery' ), '20180910', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array( 'jquery' ), '20180910', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), '20180910', true );
    wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '20190221', true );
	wp_enqueue_script( 'consultax-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20190221', true );

	// Move scripts to scripts.js file.
	wp_enqueue_script( 'custom-header-scripts', get_template_directory_uri() . '/js/header-footer.js', array('jquery'), '20190221', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'consultax_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/frontend/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/frontend/template-functions.php';

/**
 * Custom Page Header for this theme.
 */
require get_template_directory() . '/inc/frontend/breadcrumbs.php';
require get_template_directory() . '/inc/frontend/page-header.php';

/**
 * Functions which add more to backend.
 */
require get_template_directory() . '/inc/backend/admin-functions.php';

/**
 * Custom metabox for this theme.
 */
require get_template_directory() . '/inc/backend/meta-boxes.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/backend/customizer.php';
require get_template_directory() . '/inc/backend/color.php';

/**
 * Register the required plugins for this theme.
 */
require get_template_directory() . '/inc/backend/plugin-requires.php';

/**
 * Import Demo Content
 */
require_once get_template_directory() . '/inc/backend/importer.php';

/**
 * Custom shortcode plugin visual composer.
 */
require_once get_template_directory() . '/vc-shortcodes/shortcodes.php';
require_once get_template_directory() . '/vc-shortcodes/vc_shortcode.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce/woocommerce.php';
}