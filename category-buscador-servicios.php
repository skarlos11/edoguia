<?php get_header() ?>


<div id="content" class="row">

<div class="title-cat span12" style="margin-left: 0px" ><h2><?php single_cat_title(); ?></h2></div>

	<?php echo do_shortcode('[rev_slider sociedad]'); ?>
	
	<br />

	<?php
		
		$name  = single_cat_title("", false);

		$category = get_term_by('name', $name, 'category' );
		$args = array(
			
			'child_of'                 => $category->term_id,
			'orderby'                  => 'id',
			'order'                    => 'ASC',
			
		);
		
		$categories = get_categories( $args );

		

	foreach ($categories as $cat) {
		
		//var_dump($cat);

		$output .='<div class="single-post2 span4">	
			 		<h4 ><a href="'.get_category_link($cat->term_id).'" title="'.$cat->name.'">'.$cat->name.'</a></h4>

					<div class="entry">
					  <a href="'.get_category_link($cat->term_id).'" title="'.$cat->name.'"><img src="'.z_taxonomy_image_url($cat->term_id).'" /></a>
					  <h4>'.$cat->description.'</h4>
					</div>
				
		</div>';

		

	}

	echo $output;

	?>

	

</div>




<?php get_footer() ?>