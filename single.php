<?php get_header(); ?>
			
    <main id="main" role="main">
		
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    	
	    	<div class="row">
	    		<div class="column column--20">
					<?php get_template_part( 'parts/loop', 'single' ); ?>
				</div>
			</div>	

	    <?php endwhile; else : ?>
	
	   		<?php get_template_part( 'parts/content', 'missing' ); ?>

	    <?php endif; ?>						
	    					
	</main>

<?php get_footer(); ?>