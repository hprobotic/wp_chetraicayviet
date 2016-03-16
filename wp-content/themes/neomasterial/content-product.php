<?php
/**
 * @package Che trai cay Viet
 */
?>
<div class="product-single">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    <h3>Chi tiết sản phẩm</h3>
    <hr>
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>


    </header><!-- .entry-header -->

    <div class="product-content">
    <div class="clearfix">
    <span class="product-img">
    <?php
if ( has_post_thumbnail() ) {
the_post_thumbnail(array(600, 350));
}
else {
    echo '<img src="http://chetraicayviet.com/wp-content/uploads/2015/02/flan.png">';
}
                                        ?>

                               </span>

<div class="product-info">
     <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
     <p class="pr-sku">
         Mã sản phẩm: <?php echo types_render_field('pr-sku') ?>
     </p>
     <p class="pr-price">
         Giá: <span class="pr-numb"><?php echo types_render_field('price') ?></span>
     </p>
     <p class="pr-thanhphan">
         Thành phần: <?php echo types_render_field('pr-thanhphan') ?>
     </p>
     <p class="pr-thongtin">
         Thông tin: <?php echo types_render_field('pr-thongtin') ?>
     </p>
</div>
</div>
</div>
    <div class="entry-content">
        <?php
            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'neomasterial' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
        ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'neomasterial' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php neomasterial_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
