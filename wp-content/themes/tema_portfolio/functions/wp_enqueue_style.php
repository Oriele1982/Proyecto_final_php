<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('GoogleFonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900', null, null, 'screen');
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('flickity', get_parent_theme_file_uri('/assets/css/flickity.css'), null, '2.1.0', 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset', 'GoogleFonts'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('fakeStyle', get_parent_theme_file_uri() . '/assets/css/style_fake.css', null, null, 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('flickity');
		wp_enqueue_style('mainStyle');

		global $post;

		if (is_page() || ($post->post_parent)) {
			wp_enqueue_style('fakeStyle');
		}
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>