<?php
/**
 * Greenfield functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Greenfield 1.0
 */


if ( ! function_exists( 'greenfield_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Greenfield 1.0
	 *
	 * @return void
	 */
	function greenfield_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'greenfield_support' );

if ( ! function_exists( 'greenfield_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Greenfield 1.0
	 *
	 * @return void
	 */
	function greenfield_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'greenfield-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'greenfield-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'greenfield_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
