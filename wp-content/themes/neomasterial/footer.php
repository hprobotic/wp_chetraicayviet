<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Che trai cay Viet
 */
?>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
<div class="row">
        <div class="site-info">
            <div class="col-md-9">
            <p>
              Chè trái cây Việt - <?php echo get_custom('address') ?> / Hotline: <b><?php echo get_custom('hotline') ?></b>
            </p>
                 <p>
                   <?php echo get_custom('copyright') ?>
                 </p>
            </div>
<div class="col-md-3 ft-social">
<ul class="list-inline">
  <li><a href="<?php echo get_custom('facebook_url') ?>">
    <i class="fa fa-facebook"></i>
  </a></li>
  <li><a href="mailto:<?php echo get_custom('email') ?>">
    <i class="fa fa-envelope"></i>
  </a></li>
</ul>
</div>

        </div><!-- .site-info -->
</div>
        </div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>