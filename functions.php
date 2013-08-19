<?php
function add_scripts(){
/* Cargar Primero jQuery */
	wp_deregister_script('jquery');
	wp_register_script('jquery',get_template_directory_uri() . '/js/jquery-1.8.3.min.js');
	wp_register_script('bootstrap-min-js',get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_register_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.js');
	wp_register_script('edoguia-js',get_template_directory_uri() . '/js/edoguia.js');
	wp_register_style( 'style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.min.css');
    
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-min-js');
	wp_enqueue_script('bootstrap-js');
	wp_enqueue_script('edoguia-js');
	wp_enqueue_style( 'style');
	wp_enqueue_style( 'bootstrap');
	wp_enqueue_style( 'bootstrap-responsive');
	define('CONCATENATE_SCRIPTS', false);
}  
add_action('init', 'add_scripts'); 
add_action( 'wp_enqueue_script', 'add_scripts' );  


register_nav_menu( 'menu_header', 'EDO guia' );

function cat_muestra(){
	
	$args = array(
		'show_option_all'    => '',
		'orderby'            => 'ID',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => __( '' ),
		'show_option_none'   => __('No categories'),
		'number'             => null,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => null
	);

	$categories = wp_list_categories( $args );

}