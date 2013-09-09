<?php get_header() ?>

<div id="content" class="row">
	<div class="span12" style="margin-left: 0px;">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		  
		    <?php the_content(); ?>
		   
		<?php endwhile; endif; ?>

	</div>
	    
		    

</div>
<?php get_footer() ?>