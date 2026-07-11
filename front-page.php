<?php
/**
 * The template for displaying the custom luxury homepage.
 *
 * @package Astra Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

// 1. 6 Categories Grid Section
get_template_part( 'template-parts/home/categories' );

// 2. 10 Products Grid Section
get_template_part( 'template-parts/home/products' );

get_footer();
