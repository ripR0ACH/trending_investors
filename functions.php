<?php
function ti_create_posttype() {
    register_post_type( 'cards',
        array(
            'labels' => array(
                'name' => __( 'Home Cards' ),
                'singular_name' => __( 'Card' )
            ),
            'public' => true,
            'hierarchichal' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
function ti_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
}
function ti_register_styles() {
    wp_enqueue_style('trending_investors_bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array());
    wp_enqueue_style('trending_investors_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array());
    wp_enqueue_style('trending_investors_styles', get_template_directory_uri() . "/style.css", array());
}
function ti_register_scripts() {
    wp_enqueue_script('trending_investors_jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), "3.2.1", true);
    wp_enqueue_script('trending_investors_popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), "1.12.9", true);
    wp_enqueue_script('trending_investors_bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), "4.0.0", true);
    wp_enqueue_script('trending_investors_scripts',  get_template_directory_uri() . "/index.js", array(), "1.0.1", true);
}

function ti_menus() {
    $locations = array(
        'primary' => 'Desktop Left Menu',
        'footer' => 'Footer Menu'
    );
    register_nav_menus($locations);
}
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('init', 'ti_menus');
add_action( 'init', 'ti_create_posttype' );
add_action('after_setup_theme', 'register_navwalker' );
add_action('after_setup_theme', 'ti_theme_support');
add_action('wp_enqueue_scripts', 'ti_register_styles');
add_action('wp_enqueue_scripts', 'ti_register_scripts');

?>