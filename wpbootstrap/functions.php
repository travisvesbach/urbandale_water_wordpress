<?php
	
	require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'wpbootstrap' ),
	) );	

	function reg_scripts() {
		wp_enqueue_script( 'bootstrap-jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js' );
    	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
	}
	add_action('wp_enqueue_scripts', 'reg_scripts');

?>