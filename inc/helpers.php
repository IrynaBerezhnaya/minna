<?php
/**
 * Helper functions
 *
 * @package Storefront Child
 */

/**
 * Add acf options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/**
 * Write log
 */
if ( ! function_exists( 'write_log' ) ) {
	function write_log( $variable, $text_before = '' ) {

		if ( ini_get( 'log_errors' ) === 'On' ) {
			error_log( '------' . $text_before . '------' );
			error_log( gettype( $variable ) );
			if ( is_array( $variable ) || is_object( $variable ) ) {
				error_log( print_r( $variable, true ) );
			} else {
				error_log( $variable );
			}
		}
	}
}

/**
 * Var dump
 */
function ib_var_dump( $variable, $text_before = '' ) {
	$text_before = ! empty ( $text_before ) ? $text_before . ': ' : '';

	echo '<pre class="' . $text_before . '">' . $text_before;
	var_dump( $variable );
	echo '</pre>';
}