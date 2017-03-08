<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header>	
		<h1 itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header>
					
    <section itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section>
						
	<footer>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bullets' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'bullets' ) . '</span> ', ', ', ''); ?></p>	
	</footer>
													
</article>