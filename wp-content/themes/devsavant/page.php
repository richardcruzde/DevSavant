<?php

defined( 'ABSPATH' ) || exit;

remove_action( 'genesis_loop', 'genesis_do_loop' );

 
add_action( 'genesis_loop', 'therapetic_page_loop' );


 
function therapetic_page_loop() {
    get_template_part( 'page-templates/page', 'content' );

}


 
 

 
genesis();
