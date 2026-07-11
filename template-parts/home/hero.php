<?php
/**
 * Template part for displaying the Hero section on the homepage.
 *
 * @package Astra Child
 * @since 1.0.0
 */

// Fetch Hero Background Image (Nano Banana Pendant Lamp - SKU: 'nano-prod-3')
$hero_image = '';
$hero_query = new WP_Query([
    'post_type'      => 'product',
    'posts_per_page' => 1,
    'meta_query'     => [
        [
            'key'     => '_sku',
            'value'   => 'nano-prod-3',
            'compare' => '='
        ]
    ]
]);
if ( $hero_query->have_posts() ) {
    while ( $hero_query->have_posts() ) {
        $hero_query->the_post();
        $hero_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
    }
    wp_reset_postdata();
}
if ( empty( $hero_image ) ) {
    $hero_image = get_stylesheet_directory_uri() . '/assets/images/hero-fallback.jpg'; // Fallback
}
?>

<section class="bollu-hero" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');">
    <div class="bollu-hero-content">
        <span class="bollu-hero-tagline">BOLLU & NANO BANANA</span>
        <h1>مجموعة نانو بانانا الفنية<br>الأثاث كـ فن وتصميم راقٍ</h1>
        <p>تصاميم قطع أثاث وتحف فنية فريدة، مخصصة ومصنوعة يدوياً بمواد ممتازة لتمنح مساحتك الخاصة فخامة لا تُنسى.</p>
        <a href="#collections" class="bollu-btn-gold">استكشف المجموعة</a>
    </div>
</section>
