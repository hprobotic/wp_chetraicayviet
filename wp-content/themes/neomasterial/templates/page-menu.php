<?php
// Template Name: Menu

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



<style>
    .bot-product:after {
        display: none;
    }
    .menu-home {
        top: 0px;
    }
</style>
</div>

<?php
get_footer()

?>
