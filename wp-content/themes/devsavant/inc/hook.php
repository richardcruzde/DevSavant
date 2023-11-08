<?php 
//hook logo
add_action( 'add_attachment', 'my_set_image_meta_upon_image_upload' );
function my_set_image_meta_upon_image_upload( $post_ID ) {
	if ( wp_attachment_is_image( $post_ID ) ) {
		$my_image_title = get_post( $post_ID )->post_title;
		$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );
		$my_image_title = ucwords( strtolower( $my_image_title ) );
		$my_image_meta = array(
			'ID'		=> $post_ID,		
			'post_title'	=> $my_image_title,		
		//	'post_excerpt'	=> $my_image_title,		
		//	'post_content'	=> $my_image_title,
		);
		update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );
		wp_update_post( $my_image_meta );
	} 
}

//add alt logo
function ther_custom_logo_url ( $ther_logo_html ) {
    $ther_custom_logo_id = get_theme_mod( 'custom_logo' );
    // Make sure to replace your updated site URL
    $ther_new_url = get_home_url();
    $ther_logo_html = sprintf( '<a href="%1$s" alt="dev" title="dev" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
        esc_url( $ther_new_url ),
        wp_get_attachment_image( $ther_custom_logo_id, 'full', false, array(
            'class'    => 'custom-logo',
        ) )
    );
    return $ther_logo_html;
}
// get_custom_logo: Returns a custom logo, linked to home unless the theme supports removing the link on the home page.
add_filter( 'get_custom_logo',  'ther_custom_logo_url' );

add_filter('genesis_skip_links_output','remove_nav_skiplink');
function remove_nav_skiplink( $links ) {
	unset( $links['genesis-nav-primary'] );
}

remove_action( 'genesis_site_title', 'genesis_seo_site_title' );

//footer
function dev_custom_menus() {
	register_nav_menu('menu-1-footer',__( 'Footer Menu 1' ));
	register_nav_menu('menu-2-footer',__( 'Footer Menu 2' ));
	register_nav_menu('menu-3-footer',__( 'Footer Menu 3' ));
	register_nav_menu('menu-4-footer',__( 'Footer Menu 4' ));
}
add_action( 'init', 'dev_custom_menus' );