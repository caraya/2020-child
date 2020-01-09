<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Rivendellweb
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php
		if ( is_page_template( array( 'templates/template-canvas.php' ) ) ) {
		?>
		<header id="site-header" class="header-footer-group" role="banner">
  	  <p class="blog-title"><strong><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></strong> &mdash; <?php bloginfo('description')?></p>
		</header><!-- #site-header -->

			<?php
			// Output the menu modal
			get_template_part( 'template-parts/modal-menu' );
		}
		?>
