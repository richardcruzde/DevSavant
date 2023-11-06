<?php
/**
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */


defined( 'ABSPATH' ) || exit;

remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_headline' );
remove_filter( 'genesis_attr_author-archive-description', 'genesis_attributes_author_archive_description' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_before_content', 'dev_author_top_page' );
//add_action( 'genesis_loop', 'dev_author_loop' );

$author_id = get_the_author_ID();


function  dev_author_top_page() {

    $base_url = get_stylesheet_directory_uri();
    get_template_part('template-parts/content', 'breadcrumbs'); 
}


function dev_author_loop() {
    ?>

    <?php
}
?>



<?php
genesis();

