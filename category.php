<?php get_header() ?>


<div id="content" class="row">

<div class="title-cat span12" style="margin-left: 0px" ><h2><?php single_cat_title(); ?></h2></div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <div class="single-post span3">	
			 	<h4 ><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>

					<div class="entry">
					 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail();	?></a>
					</div>
				
			</div>


	 <?php endwhile; else: ?>

	 <p>Lo sentimos pero aun no hay registors en esta categoria</p>

	 <?php endif; ?>



</div>
<?php get_footer() ?>