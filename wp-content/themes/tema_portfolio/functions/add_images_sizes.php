<?php 
	function dl_image_sizes( $sizes ) {
		$addsizes = array(
			"index" => __( "Tamaño de imagen del Index"),
		);

		return array_merge($sizes, $addsizes);
	}

	if ( function_exists( 'add_theme_support' ) ) {
		add_image_size( 'index', 800, 600, true);
		add_filter('image_size_names_choose', 'dl_image_sizes');
	}
 ?>