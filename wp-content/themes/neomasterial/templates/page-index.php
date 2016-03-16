<?php
// Template Name: Front Page

get_header()

?>

<div id="home-page">
 <div class="carousel_home flexslider">
  <ul class=" slides">
    <?php
    $gpList = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'banner',
        ));
        foreach ( $gpList as $post ) : setup_postdata( $post );?>
        <li>
        <a href="<?php echo types_render_field("link", array("output" => "raw")) ?>">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('gp-images','full');
            }
            ?>

        </a>
        </li>
        <?php
        endforeach; wp_reset_postdata();
        ?>

    </ul>
</div>
</div>
<div class="menu-home">
    <div class="top-cat">
        <div class="block-info">
            <div class="container">
                <h1>Thực đơn</h1>
                <hr>

            </div>
        </div>

    </div>

        <div class="list-cat five-item">

                <?php $z=0; ?>
                <?php $product_cat_id =  array('0'); ?>
                    <?php foreach (get_terms('product-cateogry') as $cat) : ?>
                        <?php $z++ ?>
<?php if ($z == 1 || $z == 4 || $z == 7): ?>
    <div class="bot-product five-item stt<?php echo $z ?>">
    <div class="container">
                <ul class="list-inline">
<?php endif ?>
                        <li class="product col-md-4">
                            <a href="<?php echo get_term_link($cat->slug, 'product-cateogry'); ?>">
                               <span class="product-img">
                                   <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
                               </span>
                               <h2><?php echo $cat->name; ?></h2>
                               <p>
                                <?php
                                $term_id  = $cat->term_id; // ID of taxonomy term
                                $taxonomy = 'product-cateogry';
                                $term_obj = get_term( $term_id, $taxonomy );
                                echo $term_obj->count;
                                ?> món</p>
                            </a>
                        </li>
<?php if ($z == 3 || $z == 6 || $z == 9): ?>
    </ul>
    </div>
    </div>
<?php endif ?>
                        <?php
                        array_push($product_cat_id, $cat->term_id);

                        ?>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>

</div>
</div>



<div id="location-dir">
    <div class="container ">
        <div class="map-detail">

        </div>
        <div class="about-info">
            <div class="about-text">
                Từ cầu Công Lý đổ xuống phía đường Nguyễn Văn Trỗi, bạn sẽ thấy CTCV nổi bật ngay góc đường nhộn nhịp. Nếu cảm thấy khát nước hay mệt mỏi sau giờ làm việc thì hãy ghé đây nhé. Rất nhiều món giải khát ngon miệng và đảm bảo chất lượng đang đợi bạn.
            </div>
            <div class="about-add">
                <label for="">Địa chỉ</label>
                <p><?php echo Site_Settings::get( 'address' ); ?></p>
            </div>
        </div>

        <div class="block-new row">
        <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title', 'child_of' => '3' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>
<div class="col-md-4 new-item">
                <a href="<?php the_permalink(); ?>" class="">
                    <p class="cat">Khuyến mãi</p>
                    <?php
                    if ( has_post_thumbnail() ) {
the_post_thumbnail(array(600, 350));
}
else {
    echo '<img src="http://chetraicayviet.com/wp-content/uploads/2015/02/flan.png">';
} ?>
                    <p class="date"><?php the_date(); ?></p>
                    <p class="title"><?php the_title(); ?></p>
                </a>
            </div>

<?php
endforeach;
wp_reset_postdata();
?>


        </div></div>
    </div>
</div>

<?php
get_footer()

?>
