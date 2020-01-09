<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Rivendellweb
 * @since 1.0.0
 */

?>
		<?php
		if ( ! is_page_template( array( 'templates/template-canvas.php' ) ) ) {
		?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
			 <!-- <h2 style="color:#f00">Footer</h2> -->
			</footer><!-- #site-footer -->
		<?php } ?>

		<?php wp_footer(); ?>

	</body>
</html>
