<?php
/**
 * Template part for displaying the categories grid section on the homepage.
 *
 * @package Astra Child
 * @since 1.0.0
 */
?>

<section id="collections" class="bollu-section">
    <div class="section-header">
        <span class="section-subtitle">المجموعات الفنية</span>
        <h2 class="section-title">أقسام المعرض</h2>
    </div>

    <div class="categories-grid">
        <?php
        $categories = get_bollu_categories();
        if ( ! empty( $categories ) ) :
            foreach ( $categories as $cat ) :
                ?>
                <div class="category-card">
                    <div class="category-card-image" style="background-image: url('<?php echo esc_url( $cat['image'] ); ?>');"></div>
                    <div class="category-card-content">
                        <h3 class="category-card-title"><?php echo esc_html( $cat['name'] ); ?></h3>
                        <a href="<?php echo esc_url( $cat['url'] ); ?>" class="category-card-link">تصفح المعرض</a>
                    </div>
                </div>
                <?php
            endforeach;
        else :
            echo '<p style="text-align:center; width:100%;">لم يتم العثور على أي أقسام بعد.</p>';
        endif;
        ?>
    </div>
</section>
