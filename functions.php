<?php
/**
 * storefront child theme functions.php file.
 *
 * @package storefront-child
 */

// DO NOT REMOVE THIS FUNCTION AS IT LOADS THE PARENT THEME STYLESHEET
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Add any custom PHP below this line of text */

/**
 * Load IMGD Framework compatibility file.
 */
//require get_template_directory() . '/imgd/imgd_funciones.php';


/**
* Override theme default specification for product # per row
* https://docs.woocommerce.com/document/change-number-of-products-per-row/
*/
function loop_columns() {
return 4; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);


/**
* https://w3guy.com/customizing-woocommerce-storefront-child-themes/
*/
add_filter( 'storefront_recent_products_args', 'w3guy_storefront_recent_products', 199 );
 
function w3guy_storefront_recent_products( $args ) {
 $args['limit']   = 6;
 $args['columns'] = 4;
 
 return $args;
}
