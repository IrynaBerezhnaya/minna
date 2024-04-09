<?php
/**
 * Enqueue all styles and scripts.
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style}
 *
 * @package Storefront Child
 */

if ( ! function_exists( 'storefrontchild_scripts' ) ) :
	/**
	 * storefrontchild_scripts
	 *
	 * @return void
	 */
	function storefrontchild_scripts() {
		// Enqueue the main JS file.
		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );

		// Throw variables from back to front end.
		$theme_vars = array(
			'home'   => get_home_url(),
			'isHome' => is_front_page(),
		);
		wp_localize_script( 'main-javascript', 'themeVars', $theme_vars );

	}

	add_action( 'wp_enqueue_scripts', 'storefrontchild_scripts' );
endif;

/**
 * Add version to file
 */
if ( ! function_exists( 'add_version' ) ) {
	function add_version($file)
	{
		$file = get_template_directory() . $file;
		if (!file_exists($file)) {
			return '1.0.0';
		}

		return	filemtime($file);
	}
}