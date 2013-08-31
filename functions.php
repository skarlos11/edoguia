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
		
		'orderby'                  => 'id',
		'order'                    => 'ASC',
		
	);
	
	$categories = get_categories( $args );

	$output .='	<div id="cat-content">
			  		<ul id="cat-muestra" class="row">';

	foreach ($categories as $cat) {

		$output	.=	'<li class="span3">
						<div url="'.get_category_link( $cat->cat_ID ).'">
							<img src="'. get_bloginfo( template_url ).'/img/'.$cat->slug.'.png"><br/>
							<span>'.$cat->name.'</span>
							<p>'.$cat->description.'</p>
						</div>
					</li>';
	}
		
	$output	.=' 	</ul>
			  	</div>';
	echo $output;

}