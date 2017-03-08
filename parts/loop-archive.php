<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?> role="article">					
	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header>
					
	<section itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'bullets' ) . '</button>'); ?>
	</section>
						
	<footer>
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bulletstheme') . '</span> ', ', ', ''); ?></p>
	</footer>	    						
</article>