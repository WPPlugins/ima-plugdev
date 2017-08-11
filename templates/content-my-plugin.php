<div class="plugin-directory-plugin">
	<?php if ( have_ima_plugdev_plugin_banner() ) : ?>
		<div class="plugin-banner">
			<?php the_ima_plugdev_plugin_banner(); ?>
		</div>
	<?php endif; ?>

	<?php if ( true === get_ima_plugdev_plugin_retired() ) : ?>
		<p class="retired-plugin"><?php _e( 'This plugin has been retired. It is recommended that you stop using it.', 'ima-plugdev' ); ?></p>
	<?php endif; ?>

	<p><a href="<?php echo esc_attr( get_ima_plugdev_plugin_zip() ); ?>">
			<?php
			/* Translators: The two replacements are plugin name (%1$s), and plugin version (%2$s). */
			echo sprintf( esc_html__( 'Download %1$s version %2$s', 'ima-plugdev' ), get_the_title(), get_ima_plugdev_plugin_version() ); ?>
		</a></p>

	<div>
		<?php the_ima_plugdev_plugin_description(); ?>
	</div>
</div>
