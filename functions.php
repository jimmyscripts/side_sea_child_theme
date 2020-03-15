<?php
/**
 * Default Functions Template
 *
**/
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script ('nav_script', get_stylesheet_directory_uri() . '/nav_script.js', array('jquery'), '1.0', true);
}

function toon_widgets_init() {
    
    register_sidebar( array(
        'name'          => 'First Footer',
        'id'            => 'first-footer-widget',
        'before_widget' => '<div class="toon-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="toon-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Second Footer',
        'id'            => 'second-footer-widget',
        'before_widget' => '<div class="toon-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="toon-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Third Footer',
        'id'            => 'third-footer-widget',
        'before_widget' => '<div class="toon-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="toon-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'toon_widgets_init' );

?>