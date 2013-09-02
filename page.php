<?php get_header() ?>

<div id="content" class="row">
	<div class="span7" style="margin-left: 0px;">	    
		    <?php if (have_posts()) : while (have_posts()) : the_post();?>
		    <div class="info" >
		        <h2 class="pag-title"><?php the_title();?></h2>
		        <div>
		            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
		        </div>
		    </div>
		    <?php endwhile; endif; ?>
	</div>
	<div class="span4">

		<?php related_post(); ?>

		<?php dynamic_sidebar('sidebar-info'); ?>

		<?php contacto_post(); ?>
		
	</div>
</div>
<?php get_footer() ?>