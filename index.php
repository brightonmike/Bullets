<?php get_header(); ?>			

    <main id="main" role="main">
    
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	    	<div class="row">
	    		<div class="column">
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				</div>
			</div>
		    
		<?php endwhile; ?>	

			<?php bullets_page_navi(); ?>
			
		<?php else : ?>

	    	<div class="row">
	    		<div class="column column--20">
					<?php get_template_part( 'parts/content', 'missing' ); ?>
				</div>
			</div>			
				
		<?php endif; ?>
																						
    </main>
    
    <?php get_sidebar(); ?>

<?php get_footer(); ?>