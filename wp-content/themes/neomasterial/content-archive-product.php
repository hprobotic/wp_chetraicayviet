<?php
/**
 * @package Che trai cay Viet
 */
?>

<div class="col-md-6 post-item product-item">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="pr-link" href="<?php the_permalink() ?>">
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
     <p class="readmore">
         Xem thêm +
     </p>

</div>

</a>
</article><!-- #post-## -->

</div>