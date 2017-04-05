<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">		
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div id="site-container">
		<header id="masthead" class="site-header" role="banner" data-sticky-container>
			<div class="title-bar-container" data-sticky data-top-anchor="front-hero:bottom" data-options="marginTop:0;" data-sticky-on="small">
				<div class="title-bar">
					<div class="title-bar-left">
						<button class="menu-icon" type="button" data-open="offCanvas"></button>						
					</div>
					<div class="title-bar-center">
						<h2>Mathew A Varghese</h2>
					</div>
					<div class="title-bar-right">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>		
		</header>

		<section class="container">
			<?php do_action( 'foundationpress_after_header' );
