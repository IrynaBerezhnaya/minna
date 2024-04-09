<?php
/**
 * Clean up WordPress and Storefront defaults
 *
 * @package Storefront Child
 */

/**
 * Remove functions
 */
function ib_remove_functions() {
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
//	remove_action( 'storefront_homepage', 'storefront_homepage_header', 10 );
//	remove_action( 'homepage', 'storefront_product_categories', 20 );
//	remove_action( 'homepage', 'storefront_featured_products', 40 );
//	remove_action( 'homepage', 'storefront_on_sale_products', 60 );
//	remove_action( 'homepage', 'storefront_best_selling_products', 70 );
//	remove_action( 'homepage', 'storefront_popular_products', 50 );
//	remove_action( 'homepage', 'storefront_recent_products', 30 );
	remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'init', 'ib_remove_functions' );
