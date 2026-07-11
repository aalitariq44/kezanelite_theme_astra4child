<?php
/**
 * Template part for displaying the split showcase section on the homepage.
 *
 * @package Astra Child
 * @since 1.0.0
 */

// Fetch Split Showcase Image (Art Object Sculpture - SKU: 'nano-prod-6')
$showcase_image = '';
$showcase_query = new WP_Query([
    'post_type'      => 'product',
    'posts_per_page' => 1,
    'meta_query'     => [
        [
            'key'     => '_sku',
            'value'   => 'nano-prod-6',
            'compare' => '='
        ]
    ]
]);
if ( $showcase_query->have_posts() ) {
    while ( $showcase_query->have_posts() ) {
        $showcase_query->the_post();
        $showcase_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
    }
    wp_reset_postdata();
}
?>

<section class="bollu-showcase">
    <div class="showcase-half">
        <div class="showcase-image" style="background-image: url('<?php echo esc_url( $showcase_image ); ?>');"></div>
    </div>
    <div class="showcase-half">
        <div class="showcase-content">
            <span class="section-subtitle">الفلسفة والتصميم</span>
            <h3>تصنيع يدوي مخصص وفوق العادة</h3>
            <p>كل قطعة في تشكيلة نانو بانانا تجسد التناغم المثالي بين الفن والوظيفة العملية. ندمج النحاس المصقول والرخام الأسود والمخمل الزمردي لصنع قطع تعيش معك كتحف فنية خالدة.</p>
            <div>
                <a href="#products" class="bollu-btn-gold">شاهد كافة المنتجات</a>
            </div>
        </div>
    </div>
</section>
