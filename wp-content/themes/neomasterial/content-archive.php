<?php
/**
 * @package Che trai cay Viet
 */
?>

<div class="col-md-4 post-item">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>">
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail(array(600, 350));
}
                                        ?>
<p class="post-meta">
     <?php neomasterial_posted_on(); ?>
</p>
 <?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
</a>
</article><!-- #post-## -->

</div>