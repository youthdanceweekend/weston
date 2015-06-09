<?php
require_once('wp-bootstrap-navwalker.php');
require_once('shortcodes/ydw-list-posts.php');
require_once('shortcodes/clearfix.php');

function weston_setup() {
	add_theme_support('automatic-feed-links');

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'weston-full-width', 1038, 576, true );

	// Header images:
	add_theme_support('custom-header', array(
		'width'         => 980,
		'height'        => 60,
		'default-image' => '%s/images/headers/dance.jpg',
		'random-default'=> true,
		'uploads'       => true,
	));
	register_default_headers(array(
		'acro' => array(
			'url'           => '%s/images/headers/acro.jpg',
			'thumbnail_url' => '%s/images/headers/acro.jpg',
			'description'   => "Frisbee"
		),
		'techno' => array(
			'url'           => '%s/images/headers/techno.jpg',
			'thumbnail_url' => '%s/images/headers/techno.jpg',
			'description'   => "Techno"
		),
		'dance' => array(
			'url'           => '%s/images/headers/dance.jpg',
			'thumbnail_url' => '%s/images/headers/dance.jpg',
			'description'   => "Techno"
		),
		'dance2' => array(
			'url'           => '%s/images/headers/dance2.jpg',
			'thumbnail_url' => '%s/images/headers/dance2.jpg',
			'description'   => "Techno"
		),
		'mary' => array(
			'url'           => '%s/images/headers/mary.jpg',
			'thumbnail_url' => '%s/images/headers/mary.jpg',
			'description'   => "Techno"
		),
	));

	// Menus:
	register_nav_menu( 'primary', "Primary Navigation" );
	register_nav_menu( 'footer1', "Footer Column 1" );
	register_nav_menu( 'footer2', "Footer Column 2" );
	register_nav_menu( 'footer3', "Footer Column 3" );
	register_nav_menu( 'footer4', "Footer Column 4" );

	// Shortcodes:
	add_shortcode('ydw-list-posts', 'ydw_list_posts');
	add_shortcode('clearfix', 'clearfix');

}
add_action( 'after_setup_theme', 'weston_setup' );


function weston_scripts() {
	wp_enqueue_style('weston-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
	wp_enqueue_style('weston-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('weston-style', get_stylesheet_uri());

	// Adobe Edge Fonts: Montserrat, Voltaire, Lato
	wp_enqueue_script('weston-fonts', '//use.edgefonts.net/montserrat;voltaire;lato:n3,i3,n4,i4.js', array(), '20150315', false);
	wp_enqueue_script('weston-jquery', 'http://code.jquery.com/jquery-1.11.3.min.js', array(), '1.11.3', false);
	wp_enqueue_script('weston-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '3.3.4', false);
	wp_enqueue_script('weston-sliding-nav', get_template_directory_uri() . '/js/weston.slidingNav.js', array(), '20150601', false);
	wp_enqueue_script('weston-modernizr', get_template_directory_uri() . '/lib/modernizr.js', array(), '20150602', false);
}
add_action( 'wp_enqueue_scripts', 'weston_scripts' );

function weston_widgets_init() {
	register_sidebar(array(
		'name'          => __( 'Main Sidebar', 'westonvt' ),
		'id'            => 'sidebar-main',
		'description'   => __( 'Appears on the right side of the site.', 'westonvt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar(array(
		'name'          => __( 'Homepage Sidebar', 'westonvt' ),
		'id'            => 'sidebar-homepage',
		'description'   => __( 'Appears on the right side of the homepage.', 'westonvt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	));
}
add_action('widgets_init', 'weston_widgets_init');
