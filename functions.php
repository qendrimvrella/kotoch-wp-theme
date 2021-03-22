<?php
define('KOTOCH_THEME_DIR', __DIR__);

require_once KOTOCH_THEME_DIR . '/class/walker.php';
require_once KOTOCH_THEME_DIR . '/class/menu-style-footer.php';

if (!defined('KOTOCH_BUILD_CSS_URI')) {
    define('KOTOCH_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/build/css');
}

if (!defined('KOTOCH_BUILD_JS_URI')) {
    define('KOTOCH_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/build/js');
}
if (!defined('KOTOCH_BUILD_IMG_URI')) {
    define('KOTOCH_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/build/src/img');
}

function kotoch_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'kotoch_theme_support');

function kotoch_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('kotoch_style_main', KOTOCH_BUILD_CSS_URI . '/main.css', array(), $version, 'all');
    wp_enqueue_style('kotoch_style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'kotoch_register_styles');

function kotoch_register_scripts()
{
    wp_enqueue_script('kotoch_scripts', KOTOCH_BUILD_JS_URI . '/main.js', array(), false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', false);
}
add_action('wp_enqueue_scripts', 'kotoch_register_scripts');

function kotoch_custom_menu() 
{
    register_nav_menu('kotoch-custom-menu', __( 'Kotoch Menu' ));
}
add_action( 'init', 'kotoch_custom_menu' );


