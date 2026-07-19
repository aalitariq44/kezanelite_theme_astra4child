<?php
/**
 * Header-related hooks and functions
 *
 * @package Astra Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Override default custom logo with custom SVG & Site Title
 */
function astra_child_custom_logo_override( $html ) {
    $logo_url = get_stylesheet_directory_uri() . '/assets/images/logo.svg';
    $site_url = home_url( '/' );
    
    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">' .
        '<img src="%2$s" class="custom-logo" alt="%3$s" itemprop="logo" />' .
        '<span class="custom-logo-text">%3$s</span>' .
        '</a>',
        esc_url( $site_url ),
        esc_url( $logo_url ),
        esc_attr( 'kezanelite' )
    );
    
    return $html;
}
add_filter( 'get_custom_logo', 'astra_child_custom_logo_override' );

// Return dummy attachment ID to force custom logo output in WordPress and Astra
add_filter( 'theme_mod_custom_logo', function( $value ) {
    return 28; 
} );
add_filter( 'pre_option_ast-site-logo', function( $value ) {
    return 28; 
} );

/**
 * Render the Bollu-style Certificate of Origin banner before header
 */
function astra_child_certificate_banner() {
    if ( is_front_page() ) {
        get_template_part( 'template-parts/header/certificate-banner' );
    }
}
add_action( 'astra_header_before', 'astra_child_certificate_banner' );
