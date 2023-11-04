<?php
// Create category.php file & put this code
/**
 * Custom Category Template
**/
// Remove default loop
//remove_action( 'genesis_loop', 'genesis_do_loop' );
function wps_category_loop_args() {
	return array(
		'category_name' => get_query_var( 'category_name' ),
		'paged'         => get_query_var( 'paged' ),
	);
}

add_action( 'genesis_before_content', 'vets_top_page' );

function  vets_top_page() {
    get_template_part('template-parts/content', 'breadcrumbs'); 
}


remove_action('genesis_entry_content', 'genesis_do_post_image', 8);
//remove_action( 'genesis_loop', 'genesis_do_loop' );
//add_action( 'genesis_loop', 'wps_category_do_loop_intro', 5 );


/**
 * Custom Loop Intro
 *
 */
function wps_category_do_loop_intro() {
  
   
    ?>

<?php

}

/* function add_genesis_before_entry () {
    echo '<div class="before-entry">genesis_before_entry </div>';
};
add_action('genesis_before_entry ', 'add_genesis_before_entry '); */


// Remove Title
remove_action( 'genesis_post_title ', 'genesis_do_post_title' );
remove_action( 'genesis_post_content ', 'genesis_do_post_content' );
 
 
/* remove_action( 'generate_archive_title', 'generate_archive_title' );
remove_action( 'generate_archive_description', 'generate_archive_description' );
 */

//* Remove custom headline and / or description to category / tag / taxonomy archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );

//* Remove custom headline and description to blog template pages.

remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );

//* Remove custom headline and description to date archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_date_archive_title' );

//* Remove custom headline and description to author archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_author_title_description', 15 );

//* Remove custom headline and description to relevant custom post type archive pages.

/* remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );
 
remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );
remove_action( 'genesis_after_entry', 'genesis_adjacent_entry_nav' );
remove_action( 'genesis_after_entry', 'genesis_get_comments_template' );

remove_action('genesis_before_post_content','genesis_post_info');
remove_action('genesis_after_post_content','genesis_post_meta');
  */

/*  remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 ); */
remove_action( 'genesis_entry_content', 'genesis_do_post_content' ,8);
remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );
 
genesis();
?>

 