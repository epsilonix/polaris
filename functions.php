<?php

function getStylesheet(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','getStylesheet');

/*-----------------------------------*/

function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function polaris_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'cerealcat' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'cerealcat' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'polaris_widgets_init' );

function load_essentials(){
	wp_enqueue_script( 'jquery.min.js',  get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'polaris.js', get_template_directory_uri() . '/js/polaris.js');
	wp_enqueue_script( 'jssite.js', get_template_directory_uri() . '/js/jssite.js');
	
	
}

add_action('wp_enqueue_scripts','load_essentials');

/*------------------------------------*/

// Load the thumbnails and remove attributes 
function getFeaturedImages(){
	add_theme_support( 'post-thumbnails' );
	add_image_size('small-thumbnail', 150, 150, true);
	add_image_size('indexmain', 640, 400, true);
	
	//Add post format support
	add_theme_support('post-formats', array('aside','gallery','link','image'));
}

add_action('after_setup_theme', 'getFeaturedImages');
/* ------------------------------------*/

function getCommentatorScripts() {
	
	wp_enqueue_script( 'jquery.ui.widget.js',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/jquery.ui.widget.js');
	wp_enqueue_script( 'jquery.fitvids',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/jquery.fitvids.js');
	wp_enqueue_script( 'jquery.fileupload',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/jquery.fileupload.js');
	wp_enqueue_script( 'jquery.iframe-transport.js',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/jquery.iframe-transport.js');
	wp_enqueue_script( 'commentator-admin-script.js',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/commentator-admin-script.js');
	wp_enqueue_script( 'commentator-script.js',  get_template_directory_uri() . '../../../../wp-content/plugins/commentator/js/commentator-script.js');
	
}

add_action('wp_enqueue_scripts','getCommentatorScripts');