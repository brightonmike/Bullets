<?php get_header(); ?>			

	<main role="main">

		<article>
		
			<header>
				<h1><?php _e( 'Epic 404 - Article Not Found', 'bullets' ); ?></h1>
			</header>
	
			<section>
				<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bullets' ); ?></p>
			</section>

			<section>
			    <p><?php get_search_form(); ?></p>
			</section>
	
		</article>

	</main>

<?php get_footer(); ?>