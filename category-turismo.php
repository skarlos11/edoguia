<?php get_header() ?>


<div id="content" class="row">

<div class="title-cat span12" style="margin-left: 0px" ><h2><?php single_cat_title(); ?></h2></div>

	<?php echo do_shortcode('[rev_slider turismo]'); ?>

	<br />

	<div class="span8" style="margin-left: 0px; margin-top: -10px;">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <div class="single-post-turi">	
			 	<h4 ><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>

					<div class="entry">
						<div class="span2">
							 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail();	?></a>
						</div>

						<div class="span5">
							<p>
								<?php
									$string = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $post->post_content);
									$link = get_permalink();
									post_reducido($string, 400, $link); 
								?>
							</p>
						</div>
					
					</div>
				
			</div>


	 <?php endwhile; else: ?>

	 <p>Lo sentimos pero aun no hay registors en esta categoria</p>

	 <?php endif; ?>
		
	</div>

	<div class="span4">

		<?php related_post(); ?>

		<?php contacto_post(); ?>

	</div>

</div>




<?php get_footer() ?>