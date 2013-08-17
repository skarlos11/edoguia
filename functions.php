<?php
function add_scripts(){
/* Cargar Primero jQuery */
	wp_deregister_script('jquery');
	wp_register_script('jquery',get_template_directory_uri() . '/js/jquery-1.8.3.min.js');
	wp_register_style( 'style', get_template_directory_uri() . '/style.css');
    
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'style');
	define('CONCATENATE_SCRIPTS', false);
}  
add_action('init', 'add_scripts'); 
add_action( 'wp_enqueue_script', 'add_scripts' );  


register_nav_menu( 'menu_header', 'EDO guia' );