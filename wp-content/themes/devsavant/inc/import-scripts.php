<?php

add_action( 'wp_enqueue_scripts', 'vete_enqueue_styles',11 );
function vete_enqueue_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.2' ); 
	wp_enqueue_script('fontawesome-js', 'https://kit.fontawesome.com/7169fa7825.js', array(), '1.0.0', true);
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap' );
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array(), '1.0.0', true );
} 
add_action('enqueue_block_editor_assets','add_block_editor_assets', 12);
function add_block_editor_assets(){
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.2' ); 
}