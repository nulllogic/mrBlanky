<?php

/**
 * The current version of the theme.
 */
define( 'mrBlanky', '0.3.0' );

require_once( 'inc/blank-menu-walker.php' );

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

add_action( 'after_setup_theme', 'theme_init' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gather_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mrblanky' ),
		'id'            => 'primary',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget module %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


}

add_action( 'widgets_init', 'gather_widgets_init' );