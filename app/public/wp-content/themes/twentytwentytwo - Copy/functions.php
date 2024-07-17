<?php
/**
 * Twenty Twenty-Two Copy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two_Copy
 * @since Twenty Twenty-Two Copy 1.0
 */


if (!function_exists('twentytwentytwo_support')):

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two Copy 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}

endif;

add_action("acf/init", "acf_init_block_types");
function acf_init_block_types()
{
	if (function_exists('register_block_type')) {
		register_block_type(get_template_directory() . '/custom-blocks/image-paragraph/block.json');
		register_block_type(get_template_directory() . '/custom-blocks/carousel/block.json');
		register_block_type(get_template_directory() . '/custom-blocks/prestation/block.json');
		register_block_type(get_template_directory() . '/custom-blocks/form-generator/block.json');
		register_block_type(get_template_directory() . '/custom-blocks/call-to-action-button/block.json');
		register_block_type(get_template_directory() . '/custom-blocks/steps/block.json');
	}

}


function register_my_menus()
{
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			// 'footer' => __( 'Footer Menu' ),
		)
	);
}

add_action('init', 'register_my_menus');

add_action('after_setup_theme', 'twentytwentytwo_support');

if (!function_exists('twentytwentytwo_styles')):

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two Copy 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('twentytwentytwo-style');
	}

endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
