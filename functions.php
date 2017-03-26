<?php
define( 'PDXC_STYLE_DIRECTORY', get_stylesheet_directory_uri() . '/css/' );
define( 'PDXC_IMAGE_DIRECTORY', get_stylesheet_directory_uri() . '/images/' );
define( 'PDXC_SCRIPT_DIRECTORY', get_stylesheet_directory_uri() . '/js/' );


function pdxc_content_width() {
  if (! isset( $content_width ) ) {
    $content_width = 640;
  }
  $GLOBALS[ 'content_width' ] = apply_filters( 'pdxc_content_width', 640 );
}

/*Action filters*/

add_action( 'wp_enqueue_scripts', 'pdxc_enqueue_styles' );
add_action ('widgets_init', 'pdxc_widget_init');
add_action( 'after_setup_theme', 'pdxc_register_menu' );
add_action( 'after_setup_theme', 'pdxc_add_support' );
add_action( 'after_setup_theme', 'pdxc_content_width', 0 );

/*Enqueue Scripts and Styles*/

function pdxc_enqueue_styles() {
	wp_enqueue_style( 'pdxc-main-style', PDXC_STYLE_DIRECTORY . 'pdxc-basic-styles.css' );
	wp_enqueue_style( 'pdxc-layout-style', PDXC_STYLE_DIRECTORY . 'layout-styles.css' );
	wp_enqueue_style( 'pdxc-nav-style', PDXC_STYLE_DIRECTORY . 'nav-menu.css' );
	wp_enqueue_style( 'pdxc-wp-required', get_stylesheet_uri() . '/style.css');
	wp_enqueue_script('pdxc-site-nav-script', PDXC_SCRIPT_DIRECTORY . 'menu.js', array( 'jquery', 'jquery-ui-core' ),'', true );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}

/*Register Menus*/
function pdxc_register_menu() {
	register_nav_menu('pdxc-main-menu',__( 'Main Site Navigation', 'pdxchambers-basic' ));
}

/*register widget areas*/

function pdxc_widget_init(){
	register_sidebar ( array(
			'name' => __('Primary Sidebar', 'pdxchambers-basic'),
			'id' => 'site-sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' =>'<h2>',
			'after_title' => '</h2>'
	));
}

/*Add Theme Support for WP Features*/
function pdxc_add_support() {
	$header_args = array (
			'default-image'      => PDXC_IMAGE_DIRECTORY . 'header/train.png',
			'width'              => 1024,
			'height'             => 768,
			'flex-width'         => true,
			'flex-height'        => true,
			'header-text'        => true,
			'default-text-color' => '#000'
	);

	$background_args = array (
		'default-color'         => '#fff'
	);

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', $header_args );
	add_theme_support( 'custom-background', $background_args );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	add_editor_style( '/css/pdxc-basic-styles.css' );

	register_default_headers( array(
		'train' => array(
			'url'           => '%s/images/header/train.png',
			'thumbnail_url' => '%s/images/header/train_thumbnail.png',
			'description'   => __( 'Train', 'pdxchambers-basic' )
		)
	) );

}

function pdxc_add_inline_styles() {
	$image = esc_url( get_header_image() );
	$custom_css = "
	#site-header{
		background: url( $image ) ;
	}";
	wp_add_inline_style( 'pdxc-main-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'pdxc_add_inline_styles' );

