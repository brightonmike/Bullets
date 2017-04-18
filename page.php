<?php get_header(); ?>

	<main id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container">
				<div class="row">
					<div class="column">
						<?php get_template_part( 'parts/loop', 'page' ); ?>
					</div>
				</div>			    	
			</div>
		<?php endwhile; endif; ?>							
						
	</main>

<?php get_footer(); ?>