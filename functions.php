<?php
/**
 * MornRain Zen functions and definitions.
 *
 * @package MornRain_Zen
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'MORNRAIN_ZEN_VERSION' ) ) {
	define( 'MORNRAIN_ZEN_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mornrain_zensetup' ) ) :
	/**
	 * Register theme defaults and WordPress feature support.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_zensetup() {
		load_theme_textdomain( 'mornrain-zen', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 64,
				'width'       => 240,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'mornrain-zen' ),
				'footer'  => __( 'Footer Menu', 'mornrain-zen' ),
			)
		);

		add_image_size( 'mornrain-zen-card', 720, 480, true );
	}
endif;
add_action( 'after_setup_theme', 'mornrain_zensetup' );

if ( ! function_exists( 'mornrain_zenscripts' ) ) :
	/**
	 * Enqueue front-end styles and scripts.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_zenscripts() {
		wp_enqueue_style(
			'mornrain-zen',
			get_stylesheet_uri(),
			array(),
			MORNRAIN_ZEN_VERSION
		);

		wp_enqueue_style(
			'mornrain-zen-main',
			get_template_directory_uri() . '/assets/css/main.css',
			array( 'mornrain-zen' ),
			MORNRAIN_ZEN_VERSION
		);

		wp_enqueue_script(
			'mornrain-zen-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			MORNRAIN_ZEN_VERSION,
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'mornrain_zenscripts' );

if ( ! function_exists( 'mornrain_zenexcerpt_length' ) ) :
	/**
	 * Filter the excerpt length.
	 *
	 * @since 1.0.0
	 * @param int $length Default excerpt length in words.
	 * @return int
	 */
	function mornrain_zenexcerpt_length( $length ) {
		return 26;
	}
endif;
add_filter( 'excerpt_length', 'mornrain_zenexcerpt_length' );

if ( ! function_exists( 'mornrain_zenexcerpt_more' ) ) :
	/**
	 * Filter the excerpt "read more" suffix.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function mornrain_zenexcerpt_more() {
		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'mornrain_zenexcerpt_more' );

if ( ! function_exists( 'mornrain_zenpingback_header' ) ) :
	/**
	 * Add the pingback link to the document head when needed.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_zenpingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
endif;
add_action( 'wp_head', 'mornrain_zenpingback_header' );
