<?php 
/**
 * FUNCTIONS
 */

function dodocodingchild_enqueue_styles() {
    $parenthandle = 'chaplin-style';
    $theme = wp_get_theme();

    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        [],  
        $theme->parent()->get('Version')
    );

    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        [$parenthandle],
        $theme->get('Version') 
    );
}
add_action( 'wp_enqueue_scripts', 'dodocodingchild_enqueue_styles' );
