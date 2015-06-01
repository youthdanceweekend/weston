<?php

function weston_setup() {
	add_theme_support('automatic-feed-links');

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'weston-full-width', 1038, 576, true );

	add_theme_support('custom-header', array(
		'width'         => 980,
		'height'        => 60,
		'default-image' => '%s/images/headers/frisbar.jpg',
		'random-default'=> true,
		'uploads'       => true,
	));

	register_default_headers(array(
		'frisbee' => array(
			'url'           => '%s/images/headers/frisbar.jpg',
			'thumbnail_url' => '%s/images/headers/frisbar.jpg',
			'description'   => _x('Frisbee', 'header image description', 'westonvt')
		),
		'techno' => array(
			'url'           => '%s/images/headers/techno.jpg',
			'thumbnail_url' => '%s/images/headers/techno.jpg',
			'description'   => _x('Frisbee', 'header image description', 'westonvt')
		),
	));
}
add_action( 'after_setup_theme', 'weston_setup' );


function weston_scripts() {
	wp_enqueue_style('weston-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
	wp_enqueue_style('weston-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('weston-style', get_stylesheet_uri());

	// Adobe Edge Fonts: Montserrat, Voltaire, Lato
	wp_enqueue_script('weston-fonts', '//use.edgefonts.net/montserrat;voltaire;lato:n3,i3,n4,i4.js', array(), '20150315', false);
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
