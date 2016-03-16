<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Che trai cay Viet
 */

get_header(); ?>
<div id="archive-page">

	<div class="page-banner">
<img src="http://i.imgur.com/8Imv9aP.png" alt="">
</div>

<div class="container">
<div class="row clearfix">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					printf( __( '%s', 'twentyeleven' ), '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<hr>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'archive' );
				?>

			<?php endwhile; ?>




		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>



</div>
<?php wpbeginner_numeric_posts_nav(); ?>
</div>

<?php get_footer(); ?>
