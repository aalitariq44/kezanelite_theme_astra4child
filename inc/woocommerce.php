<?php
/**
 * WooCommerce custom helpers and categories queries
 *
 * @package Astra Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Helper function to retrieve categories with images
 */
function get_bollu_categories() {
    $terms = get_terms([
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
        'exclude'    => array( get_option( 'default_product_cat' ) ), // Exclude Uncategorized
    ]);

    $categories = [];
    if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
        foreach ( $terms as $term ) {
            $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
            $image_url = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : wc_placeholder_img_src();
            $categories[] = [
                'id'          => $term->term_id,
                'name'        => $term->name,
                'slug'        => $term->slug,
                'description' => $term->description,
                'url'         => get_term_link( $term ),
                'image'       => $image_url,
            ];
        }
    }
    return $categories;
}
