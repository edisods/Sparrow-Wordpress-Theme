<?php 

add_action('wp_enqueue_scripts', 'style_sparrow_theme');
add_action('wp_footer', 'scripts_sparrow_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');

function register_my_widgets() {
    register_sidebar(array(
        'name' => 'Left sidebar',
        'id' => 'left_sidebar',
        'description' => 'Sidebar widget',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title' => '<h5 class="widgettitle">',
        'after_title'  => '</h5>'
    ));
}

function theme_register_nav_menu() {
    register_nav_menu('top', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');
    add_theme_support('post-thumbnails', array('post') );
    add_image_size('post_thumb', 1300, 500, true);
    add_filter('excerpt_more', 'new_excerpt_more');
    function new_excerpt_more($more) {
        global $post;
        return '<a href=" '. get_permalink($post->ID) . ' "> Read more...</a>';
    }
}

function style_sparrow_theme() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css' );
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style('media-query', get_template_directory_uri() . '/assets/css/media-queries.css' );
}

function scripts_sparrow_theme() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery' );
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true );
    wp_enqueue_script('doubletabtogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', ['jquery'], null, true );
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, false );
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true );
    // wp_enqueue_script('jquery.migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js' );
    
}