<?php
/**
 * site
 *
 * @package site
 * @author  site
 * @license GPL-2.0-or-later
 * @link    https://www.site.org/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';
// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';
// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';
// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';
// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';
// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';
// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';
// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

//Theme functios
require_once get_stylesheet_directory() . '/inc/config-theme.php';
require_once get_stylesheet_directory() . '/inc/import-scripts.php';
require_once get_stylesheet_directory() . '/inc/shortcodes.php';
require_once get_stylesheet_directory() . '/inc/post-types.php';
require_once get_stylesheet_directory() . '/inc/block.php';
require_once get_stylesheet_directory() . '/inc/hook.php';
 

// Layout
require_once get_stylesheet_directory() . '/template-parts/header.php';
require_once get_stylesheet_directory() . '/template-parts/footer.php';







