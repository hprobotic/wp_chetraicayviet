<?php
// Template Name: Blank

get_header(); ?>

    <div id="blank-page" class="content-area">
        <div class="page-banner">
<img src="http://chetraicayviet.com/wp-content/themes/neomasterial/images/sale-banner.jpg" alt="">
    </div>
        <main id="main" class="site-main " role="main">



            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>


            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>
<?php
// Template Name: Sale

get_header()
?>