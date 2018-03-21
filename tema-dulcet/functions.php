<?php
/**
 * dulcet-figmenta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dulcet-figmenta
 */

/**
 * Create the theme support for menu and the menu
 */

	function dulcet_theme_setup() {
        add_theme_support('menus');

        add_theme_support('custom-header');

        //Post thumbnail
        add_theme_support('post-thumbnails');

        register_nav_menu('primary', 'Header Navigator');

    }


    add_action('init', 'dulcet_theme_setup');
/**
 * Enqueue scripts and styles.
 */
function dulcet_scripts() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');

    //js
    wp_enqueue_script('id_generator', get_template_directory_uri() . '/js/id_generator.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);

}

add_action( 'wp_enqueue_scripts', 'dulcet_scripts' );


