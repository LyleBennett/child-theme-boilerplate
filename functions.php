<?php
/**
 * child theme functions and definitions.
 */

include "inc/enqueue.php";
include "inc/gutenberg.php";
include "inc/post_types.php";
include "inc/shortcodes.php";
include "inc/redirects.php";

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
    if( isset($_COOKIE['child_theme'] ) ){
        $classes[] = esc_html($_COOKIE['child_theme']);
    }

    return $classes;

}

add_filter( 'generate_typography_default_fonts', function( $fonts ) {
    $fonts[] = 'FF Nort';

    return $fonts;
} );


// Icon Replace
add_filter( 'generate_svg_icon', function( $output, $icon ) {
    if ( 'menu-bars' === $icon ) {
        $output = '<div id="mobile-menu-icon"><span></span><span></span><span></span><span></span></div>';
    }

    return $output;
}, 10, 2 );

// if class in menu item wrap submenu items
add_filter( 'wp_nav_menu_items', function( $items, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $items = str_replace( 'class="menu-item-has-children', 'class="menu-item-has-children has-submenu', $items );
    }

    return $items;
}, 10, 2 );
