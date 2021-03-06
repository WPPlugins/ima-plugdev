<?php
function ima_plugdev_fetch_readme_by_slug( $slug ) {
	$readme = get_transient( '_ima_plugdev_readme_' . $slug );
	if ( $readme ) {
		return $readme;
	}

	require_once( ABSPATH . '/wp-admin/includes/plugin-install.php' );
	$readme = plugins_api( 'plugin_information', array( 'slug'   => $slug,
	                                                    'fields' => array( 'short_description' => true )
	) );
	if ( is_wp_error( $readme ) ) {
		return false;
	}

	$readme->banners = array();
	foreach ( array( '1544x500', '772x250' ) as $size ) {
		foreach ( array( 'png', 'jpg' ) as $extension ) {
			$url    = "https://plugins.svn.wordpress.org/{$slug}/assets/banner-{$size}.{$extension}";
			$result = wp_remote_head( $url );
			if ( ! is_wp_error( $result ) && 200 == $result['response']['code'] ) {
				$readme->banners[ $size ] = $url;
			}
		}
	}
	$readme->logos = array();
	foreach ( array( '256x256', '128x128' ) as $size ) {
		foreach ( array( 'png', 'jpg' ) as $extension ) {
			$url    = "https://plugins.svn.wordpress.org/{$slug}/assets/icon-{$size}.{$extension}";
			$result = wp_remote_head( $url );
			if ( ! is_wp_error( $result ) && 200 == $result[ 'response' ][ 'code' ] ) {
				$readme->logos[ $size ] = $url;
			}
		}
	}

	$cache[ $slug ] = $readme;
	set_transient( '_ima_plugdev_readme_' . $slug, $readme, 86400 );

	return $readme;
}
function ima_plugdev_fetch_readme( $post_id = 0 ) {
	if ( 0 === $post_id ) {
		$post_id = get_the_ID();
	}

	$slug = ima_plugdev_get_slug( $post_id );

	return ima_plugdev_fetch_readme_by_slug( $slug );
}
