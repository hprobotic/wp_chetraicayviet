<?php
// Template Name: Sale

get_header()
?>
<div id="sale-page">
    <div class="page-banner">
<img src="http://chetraicayviet.com/wp-content/themes/neomasterial/images/sale-banner.jpg" alt="">
    </div>

    <div class="container" style="position: relative">
    <div id="archive-page">
<header class="page-header" style="
    margin-bottom: 100px;
">
                <h1 class="page-title">Khuyến mãi</h1>              <hr>
            </header>
            </div>
    <div class="clearfix">
        <div class="col-md-4">
            <div class="sale-news">
                    <?php
$args = array( 'posts_per_page' => 3, 'child_of' => '3' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>
<div class="n-item">
                    <article id="post-109" class="post-109 post type-post status-publish format-standard has-post-thumbnail hentry category-cong-thuc category-khuyen-mai">

                        <a href="<?php the_permalink(); ?>" class="">

                    <?php
                    if ( has_post_thumbnail() ) {
the_post_thumbnail(array(600, 350));
}
else {
    echo '<img src="http://chetraicayviet.com/wp-content/uploads/2015/02/flan.png">';
} ?>

                    <span class="posted-on"><?php the_date(); ?></span></p>
                            <h4 class="entry-title"><?php the_title(); ?></h4>
                </a>
                    </article>
                </div>


<?php
endforeach;
wp_reset_postdata();
?>

            </div>
        </div>

            <div class="order-girl">

                <div class="order-detail">
                    <p class="order-fee">
                        Miễn Phí Giao Hàng
                    </p>
                    <?php echo get_custom('ship_term') ?>
                </div>



            </div>

        </div>
    </div>


</div>
<?php get_footer() ?>