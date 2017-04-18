<div class="column column-m-12 column-t-5 column-d-4" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'bullets' );  ?></p>
	</div>

	<?php endif; ?>

</div>