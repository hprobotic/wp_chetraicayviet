<?php
/**
 * The template for displaying all single posts.
 *
 * @package Che trai cay Viet
 */

get_header(); ?>
<div id="single-page">

    <div class="page-banner">
<img src="http://i.imgur.com/8Imv9aP.png" alt="">
</div>
</div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

<div class="container">
<div class="col-md-12">
                <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'product' ); ?>

<div class="col-md-8">
<h1 class="widget-title">Bình luận, đánh giá</h1>
<div class="fb-comments" data-href="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" width="100%" data-numposts="5" data-colorscheme="light"></div>
</div>
<div class="col-md-4">
    <?php get_sidebar(); ?>
</div>




        <?php endwhile; // end of the loop. ?>
</div>
</div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>
