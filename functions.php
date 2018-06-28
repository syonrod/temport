<?php 


function wpb_adding_styles() {
	wp_register_style('my_stylesheet', plugins_url('assets/css/styles.css', __FILE__));
	wp_enqueue_style('my_stylesheet');
}


add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );  






 ?>