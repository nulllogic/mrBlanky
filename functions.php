<?php

/**
 * The current version of the theme.
 */
define( 'mrBlanky', '0.0.3' );

require_once( get_template_directory(). '/includes/navigation/blank-menu-walker.php' );

if ( ! function_exists( 'theme_init' ) ) {
	function theme_init() {
		load_theme_textdomain( 'mrblanky', get_template_directory() . '/i18n/languages' );
		add_theme_support( 'post-thumbnails' ); // Add thumbnails support
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'mrblanky' ),
		) );
	}
}

\add_action( 'after_setup_theme', 'theme_init' );


/**
 * Disable emoji icons support
 */

if ( ! function_exists( 'disable_emojicons_tinymce' ) ) {
	function disable_emojicons_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

if ( ! function_exists( 'disable_wp_emojicons' ) ) {
	function disable_wp_emojicons() {
		// all actions related to emojis
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		// filter to remove TinyMCE emojis
		add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	}
}

\add_action( 'init', 'disable_wp_emojicons' );


/**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'theme_enqueue_scripts' ) ) {
	function theme_enqueue_scripts() {

		\wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/vendor/girls_core.css', array(), '2015' );
		\wp_enqueue_script( 'boot', get_template_directory_uri() . '/assets/js/boot.js', array( 'jquery' ), '2015', true );
	}
}

\add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );