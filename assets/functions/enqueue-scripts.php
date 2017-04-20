<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
   
    // lets put jQuery in the footer for better performance
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

// defer the loading of JS for improved performance
function defer_parsing_of_js ( $url ) {
    if(!is_admin()) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        return "$url' defer='defer";
    }
}

if(!is_admin()) {
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}