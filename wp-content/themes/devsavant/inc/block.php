<?php

add_action('acf/init', 'ther_init_blocks');
function ther_init_blocks() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'dev/hero_block',
            'title'             => __('Hero'),
            'description'       => __('Hero.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'hero' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
 
        acf_register_block_type(array(
            'name'              => 'dev/tabs_service',
            'title'             => __('Tabs Services'),
            'description'       => __('Tabs Services.'),
            'render_template'   => 'template-parts/blocks/tabs_service.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'tabs', 'service' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
 
        acf_register_block_type(array(
            'name'              => 'dev/logo_list',
            'title'             => __('Logo list'),
            'description'       => __('Logo List.'),
            'render_template'   => 'template-parts/blocks/logo_list.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Logo', 'list' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));

        acf_register_block_type(array(
            'name'              => 'dev/counter_box',
            'title'             => __('Counter Square List'),
            'description'       => __('counter square list.'),
            'render_template'   => 'template-parts/blocks/counter_box.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'counter', 'square', 'list' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'dev/contact_us_prefooter',
            'title'             => __('Contact Us'),
            'description'       => __('Contact Us.'),
            'render_template'   => 'template-parts/blocks/contact_us_prefooter.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Contact', 'Us' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'dev/separated-element',
            'title'             => __('Separated Element'),
            'description'       => __('Separated Element.'),
            'render_template'   => 'template-parts/blocks/separated-element.php',
            'category'          => 'dev-ca-1',
            'icon'              => 'format-aside',
            'keywords'          => array( 'separated','element' ),
            'mode'            => 'preview',
            'render_callback' => 'template_acf_block_render_callback',
            'align'           => 'full',
            'supports'        => array(
                'align'        => array('full'),
                'align'        => true,
            ),
        ));
/*         acf_register_block_type(array(
            'name'              => 'dev/bg_row-image',
            'title'             => __('Conta'),
            'description'       => __('Contact Us.'),
            'render_template'   => 'template-parts/blocks/bg_row-image.php',
            'category'          => 'dev-ca-2',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Contact', 'Us' ),
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
