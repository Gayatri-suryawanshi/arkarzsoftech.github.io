<?php
/**
 * Blocks Initializer
 * 
 * @package WP Team Showcase and Slider
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function wp_tsas_register_guten_block() {

	// Block Editor Script
	wp_register_script( 'wp-tsas-block-js', WP_TSAS_URL.'assets/js/blocks.build.js', array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-components' ), WP_TSAS_VERSION, true );
	wp_localize_script( 'wp-tsas-block-js', 'WP_Tsas_Block', array(
																'pro_demo_link'		=> 'https://demo.wponlinesupport.com/prodemo/wp-team-showcase-and-slider/',
																'free_demo_link'	=> 'https://demo.wponlinesupport.com/team-showcase-and-slider-demo/',
																'pro_link'			=> WP_TSAS_PLUGIN_LINK,
															));

	// Register block and explicit attributes for team grid
	register_block_type( 'wp-tsas/wp-team', array(
		'attributes' => array(
			'design' => array(
							'type'		=> 'string',
							'default'	=> 'design-1',
						),
			'grid' => array(
							'type'		=> 'number',
							'default'	=> 3,
						),
			'popup' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'limit' => array(
							'type'		=> 'number',
							'default'	=> -1,
						),
			'category' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'order' => array(
							'type'		=> 'string',
							'default'	=> 'desc',
						),
			'orderby' => array(
							'type'		=> 'string',
							'default'	=> 'date',
						),
			'align' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'className' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
		),
		'render_callback' => 'get_wp_tsas_showcase',
	));

	// Register block and explicit attributes for team slider
	register_block_type( 'wp-tsas/wp-team-slider', array(
		'attributes' => array(
			'limit' => array(
							'type'		=> 'number',
							'default'	=> -1,
						),
			'category' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'design' => array(
							'type'		=> 'string',
							'default'	=> 'design-1',
						),
			'slides_column' => array(
							'type'		=> 'number',
							'default'	=> 3,
						),
			'slides_scroll' => array(
							'type'		=> 'number',
							'default'	=> 1,
						),
			'dots' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'arrows' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'autoplay_interval' => array(
							'type'		=> 'number',
							'default'	=> 3000,
						),
			'speed' => array(
							'type'		=> 'number',
							'default'	=> 300,
						),
			'popup' => array(
							'type'		=> 'string',
							'default'	=> 'true',
						),
			'order' => array(
							'type'		=> 'string',
							'default'	=> 'desc',
						),
			'orderby' => array(
							'type'		=> 'string',
							'default'	=> 'date',
						),
			'lazyload' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'align' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
			'className' => array(
							'type'		=> 'string',
							'default'	=> '',
						),
		),
		'render_callback' => 'get_wp_tsas_showcase_slider',
	));

	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations( 'wp-tsas-block-js', 'wp-team-showcase-and-slider', WP_TSAS_DIR . '/languages' );
	}
}
add_action( 'init', 'wp_tsas_register_guten_block' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * 
 * @package WP Team Showcase and Slider
 * @since 1.0
 */
function wp_tsas_editor_assets() {

	// Block Editor CSS
	if( ! wp_style_is( 'wpos-free-guten-block-css', 'registered' ) ) {
		wp_register_style( 'wpos-free-guten-block-css', WP_TSAS_URL.'assets/css/blocks.editor.build.css', array( 'wp-edit-blocks' ), WP_TSAS_VERSION );
	}
	
	// Block Editor Script - Style
	wp_enqueue_style( 'wpos-free-guten-block-css' );
	wp_enqueue_script( 'wp-tsas-block-js' );
}
add_action( 'enqueue_block_editor_assets', 'wp_tsas_editor_assets' );

/**
 * Adds an extra category to the block inserter
 *
 * @package WP Team Showcase and Slider
 * @since 1.0
 */
function wp_tsas_add_block_category( $categories ) {

	$guten_cats = wp_list_pluck( $categories, 'slug' );

	if( ! in_array( 'wpos_guten_block', $guten_cats ) ) {
		$categories[] = array(
							'slug'	=> 'wpos_guten_block',
							'title'	=> esc_html__('WPOS Blocks', 'wp-team-showcase-and-slider'),
							'icon'	=> null,
						);
	}

	return $categories;
}
add_filter( 'block_categories', 'wp_tsas_add_block_category' );