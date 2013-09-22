<?php get_header() ?>

	<div id="content" class="row">

		<div class="title-cat span12" style="margin-left: 0px" ><h2><?php page_title(); ?></h2></div>
	 		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		    <div class="info" >
		        <h2 class="pag-title"><?php the_title();?></h2>
		        <div>
		            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
		        </div>
		    </div>
		    <?php endwhile; endif; ?>
		</div>

	</div>


<?php get_footer() ?>