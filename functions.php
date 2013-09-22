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

add_theme_support( 'post-thumbnails' ); 

/*-----------------MENU------------------------*/

register_nav_menu( 'menu_header', 'EDO guia' );

/*-------------Categorias Index----------------*/

function cat_muestra(){

	$args = array(
		
		'parent'                 => 0,
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

/*---------------Registro Sidebar------------------*/

register_sidebar(array(
  'name' => ( 'sidebar-info' ),
  'id' => 'sidebar-info',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));


/*------------------Posts--------------------------*/


function related_post(){

	$args = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
	);

	$posts = get_posts($args);

	$output .= '<div class="info">
					<h2 class="related-title">Relacionado</h2>
					<div>';

	foreach ($posts as $post) {
		
		$output .= '<a href="'.$post->guid.'">'.$post->post_title.'</a><br />';


	}



	$output .= '	</div>
				</div>';

	echo $output;

}

function related_post_turi(){

	$args = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
	);

	$posts = get_posts($args);

	$output .= '<div class="info">
					<h2 class="related-title">Relacionado</h2>
					<div>
						<ul>';

	foreach ($posts as $post) {
		
		$output .= '<li><a href="'.$post->guid.'">'.$post->post_title.'</a></li>';

	}

	$output .= '		</ul>
					</div>
				</div>';

	echo $output;

}


function contacto_post(){



	$output .= '<div class="info "style="margin-top: 20px;">
					<h2 class="contacto-title">Contacto</h2>
					<div class="contacto-info">';

		
	$output .= '		<h2>¡Muestra tu negocio a todos y aumenta tus ventas!</h3>
						<h3>Anuncios que se adaptan a cualquier presupuesto</h4>
						<br/><span>Informate y pide una cotización</span>';


	$output .= '	</div>
				</div>';

	echo $output;

}

add_shortcode( 'contacto_post', 'contacto_post' );

function post_single($atts, $content = null){


	//var_dump($content);
	//var_dump($atts);

	if($atts[pos] == 1){
		$style = 'style="margin-left: 0px; margin-bottom: 10px;"';
	}else{
		$style = 'style="margin-bottom: 10px;"';
	}


	$output .='	<div class="span'.$atts[span].'" '.$style.'">	    
					    <div class="info" >
					        <h2 class="pag-title">'.$atts[title].'</h2>
					    <div>
					    	'.$content.'
						</div>
					</div>
				</div>';

	return $output;
}

add_shortcode( 'post_single', 'post_single' );

			
			
		