<?php
/**
 * Theme High Life functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package High Life
 * @since 1.0
 */

if ( ! function_exists( 'high_life_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function high_life_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'high_life_support' );

if ( ! function_exists( 'high_life_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function high_life_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'high-life-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);

		wp_enqueue_script(
			'high-life-script',
			get_theme_file_uri( 'assets/js/custom.js' ),
			array(),
			filemtime( get_theme_file_path( 'assets/js/custom.js' ) ),
			true
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'high_life_styles' );

if ( ! function_exists( 'high_life_block_editor_styles' ) ) :

	/**
	 * Enqueue rtl editor styles
	 */

	function high_life_block_editor_styles() {
		if ( is_rtl() ) {
			wp_enqueue_style(
				'high-life-rtl',
				get_theme_file_uri( 'rtl.css' ),
				array(),
				filemtime( get_theme_file_path( 'rtl.css' ) )
			);
		}
	}

endif;

add_action( 'enqueue_block_editor_assets', 'high_life_block_editor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';
