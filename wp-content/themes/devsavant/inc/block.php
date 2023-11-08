<?php

add_action('acf/init', 'ther_init_blocks');
function ther_init_blocks() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
/*         acf_register_block_type(array(
            'name'              => 'dev/gallery',
            'title'             => __('Block-Gallery'),
            'description'       => __('Gallery.'),
            'render_template'   => 'template-parts/blocks/gallery.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'gallery', 'content' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
 */
 
    }
}
/* 
 
function custom_block_category( $categories ) {
    return array_merge(
        array(
            array(
                'slug' => 'dev-ca-1',
                'title' => __( 'Plain Block dev', 'dev-innner' ),
            ),
            array(
                'slug' => 'dev-ca-2',
                'title' => __( 'Full Block dev', 'dev-innner' ),
            ),
        ),
        $categories
    );
}
add_filter( 'block_categories', 'custom_block_category', 10, 2 );
 */



 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings Footer',
		'menu_title'	=> 'Theme Settings Footer',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
