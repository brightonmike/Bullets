<div id="sidebar1" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'gunnertheme' );  ?></p>
	</div>

	<?php endif; ?>

</div>