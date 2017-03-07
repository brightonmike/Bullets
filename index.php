<?php get_header(); ?>			

    <main id="main" role="main">
    
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'archive' ); ?>
		    
		<?php endwhile; ?>	

			<?php bullets_page_navi(); ?>
			
		<?php else : ?>
									
			<?php get_template_part( 'parts/content', 'missing' ); ?>
				
		<?php endif; ?>
																						
    </main>
    
    <?php get_sidebar(); ?>

<?php get_footer(); ?>