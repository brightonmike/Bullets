<?php get_header(); ?>
	
	<main role="main">
		<header>
			<h1><?php _e( 'Search Results for:', 'bullets' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
		</header>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'archive' ); ?>
		    
		<?php endwhile; ?>	

			<?php bullets_page_navi(); ?>
			
		<?php else : ?>
		
			<?php get_template_part( 'parts/content', 'missing' ); ?>
				
	    <?php endif; ?>

    </main>
		
<?php get_footer(); ?>
