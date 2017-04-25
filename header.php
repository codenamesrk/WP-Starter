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
		<header class="site-header" role="banner">
			<div class="site-header__wrapper">
				<h1 class="site-header__logo">
					<a href="#">
						<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.44 141.62"><title>L’Estrange London</title><rect class="cls-1" x="29.99" y="8.42" width="23.41" height="7.59" transform="translate(13.05 44.88) rotate(-65.07)"></rect><polygon class="cls-1" points="8.43 7.15 0 7.15 0 62.79 35.22 62.79 35.22 55.15 8.43 55.15 8.43 7.15"></polygon><path class="cls-1" d="M144.6,31.13l-7.34-1.84c-6.95-1.74-9.06-3.55-9.06-7.74,0-4.74,4.21-7.8,10.74-7.8,6.15,0,10.74,2.29,14,7l0.42,0.59,6.21-5.27-0.37-.5c-2.6-3.5-8.7-9.37-20.23-9.37-11.33,0-19.24,6.58-19.24,16,0,10.07,7.25,12.81,15.33,14.94l6.62,1.68c6.7,1.69,10.58,3.64,10.58,8.54,0,5.48-4.52,8.76-12.09,8.76-7,0-12.84-3.18-15.68-8.51l-0.36-.67-6.86,4.87,0.32,0.53c4.29,7.15,12.58,11.42,22.18,11.42,12.61,0,21.08-6.75,21.08-16.8C160.89,36.25,152.48,33.17,144.6,31.13Z"></path><polygon class="cls-1" points="170.78 14.79 187.45 14.79 187.45 62.79 195.8 62.79 195.8 14.79 212.46 14.79 212.46 7.15 170.78 7.15 170.78 14.79"></polygon><path class="cls-1" d="M269.8,23.39c0-7-3.29-12.16-9.28-14.6a31.81,31.81,0,0,0-11.41-1.64H228V62.79h8.35V39.55h10.37l14.84,23.24H272L256.52,39C264.86,37.32,269.8,31.54,269.8,23.39ZM236.38,32V14.71h11.45c5,0,7.07.45,9,1.22,2.79,1.25,4.39,3.94,4.39,7.38s-1.43,6-4.22,7.38c-2,.83-4.07,1.3-9.08,1.3H236.38Z"></path><path class="cls-1" d="M384.87,41.68c0,2.54,0,4.88.09,6.51-0.83-1.27-1.92-2.91-2.87-4.26L356.38,7.15h-7.95V62.79h8.35V25.71c0-1.5,0-3.07-.07-4.32,0.92,1.45,2.14,3.3,3,4.54l25.55,36.86h7.95V7.15h-8.35V41.68Z"></path><path class="cls-1" d="M437.42,7.11c-16.35,0-28.21,12-28.21,28.42S421.07,64,437.42,64A28.31,28.31,0,0,0,459,54.47l0.22-.25V32.78H435.12v7.64h16V51.05a20.59,20.59,0,0,1-13.65,5.25c-11.37,0-19.63-8.74-19.63-20.78S426,14.75,437.42,14.75a18.69,18.69,0,0,1,14.42,6.68l6-5.12A26.1,26.1,0,0,0,437.42,7.11Z"></path><polygon class="cls-1" points="483.09 38.04 509.65 38.04 509.65 30.4 483.09 30.4 483.09 14.79 512.36 14.79 512.36 7.15 474.74 7.15 474.74 62.81 512.44 62.81 512.44 55.17 483.09 55.17 483.09 38.04"></polygon><polygon class="cls-1" points="73.38 38.04 99.95 38.04 99.95 30.4 73.38 30.4 73.38 14.79 102.66 14.79 102.66 7.15 65.03 7.15 65.03 62.81 102.74 62.81 102.74 55.17 73.38 55.17 73.38 38.04"></polygon><path class="cls-1" d="M291.68,41.85l-8.09,20.93h8.58l6-15.49h22.67l6,15.49h8.58l-8.09-20.93L313.84,7.06h-8.72Zm9.57-2.56L309.48,18l8.24,21.32H301.24Z"></path><polygon class="cls-2" points="147.07 118.82 144.15 118.82 144.15 140.69 157.2 140.69 157.2 137.95 147.07 137.95 147.07 118.82"></polygon><path class="cls-2" d="M191,118.42a11.21,11.21,0,0,0-8.08,3.26,11.63,11.63,0,0,0,0,16.21,11.2,11.2,0,0,0,8.08,3.23,11.06,11.06,0,0,0,8-3.23,11.55,11.55,0,0,0,0-16.21A11.07,11.07,0,0,0,191,118.42Zm0,20A8.16,8.16,0,0,1,185,136a9.12,9.12,0,0,1,0-12.33,8.7,8.7,0,0,1,12.13,0,9.12,9.12,0,0,1,0,12.34A8,8,0,0,1,191,138.38Z"></path><polygon class="cls-2" points="239.31 135.37 226.91 118.92 226.83 118.82 224.35 118.82 224.35 140.69 227.27 140.69 227.27 123.95 239.82 140.59 239.9 140.69 242.23 140.69 242.23 118.82 239.31 118.82 239.31 135.37"></polygon><path class="cls-2" d="M273.79,118.82h-7.12v21.88h7.15a11.28,11.28,0,0,0,8.23-3,11.91,11.91,0,0,0,0-15.87A11.16,11.16,0,0,0,273.79,118.82Zm-4.2,2.74h4c5.43,0,8.54,3,8.54,8.22S279,138,273.64,138h-4v-16.4Z"></path><path class="cls-2" d="M317.13,118.42a11.22,11.22,0,0,0-8.08,3.26,11.63,11.63,0,0,0,0,16.21,11.19,11.19,0,0,0,8.08,3.23,11.05,11.05,0,0,0,8-3.23,11.55,11.55,0,0,0,0-16.21A11.07,11.07,0,0,0,317.13,118.42Zm0,20A8.17,8.17,0,0,1,311,136a9.12,9.12,0,0,1,0-12.33,8.29,8.29,0,0,1,6.08-2.46,8.16,8.16,0,0,1,6,2.46,9.12,9.12,0,0,1,0,12.34A8.14,8.14,0,0,1,317.13,138.38Z"></path><polygon class="cls-2" points="365.39 118.82 365.39 135.37 352.99 118.92 352.91 118.82 350.43 118.82 350.43 140.69 353.35 140.69 353.35 123.95 365.9 140.59 365.98 140.69 368.31 140.69 368.31 118.82 365.39 118.82"></polygon></svg> -->
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 196.62 24.12" enable-background="new 0 0 196.62 24.12" xml:space="preserve"><title>Mathew A Varghese</title>
<g id="Layer_2">
	<g>
		<path d="M21.36,2.34c-1.59,0.07-1.87,0.33-1.87,2.14v12.33c0,1.81,0.29,2.06,1.87,2.14v0.5c-0.92-0.05-2.46-0.07-3.91-0.07
			c-1.59,0-3.08,0.02-3.93,0.07v-0.5c1.7-0.07,2.02-0.33,2.02-2.14V3.87L9.55,19.48h-0.4L2.44,3.45v11.92
			c0,2.73,0.22,3.36,2.42,3.58v0.5c-0.64-0.05-1.8-0.07-2.69-0.07c-0.78,0-1.64,0.02-2.16,0.07v-0.5c1.59-0.22,1.87-0.87,1.87-3.28
			V4.48c0-1.81-0.29-2.06-1.87-2.14v-0.5c0.52,0.05,1.38,0.07,2.16,0.07c1.44,0,2.85-0.02,3.93-0.07l5.01,12.09l4.59-12.02h1.76
			c1.44,0,2.99-0.02,3.91-0.07V2.34z"/>
		<path d="M32.09,7.36c0.73,0.75,0.89,1.75,0.89,3.48v6.76c0,0.8,0.13,1.1,0.53,1.1c0.35,0,0.63-0.21,0.91-0.42l0.25,0.42
			c-0.75,0.61-1.58,0.91-2.84,0.91c-1.82,0-2.38-0.95-2.39-2.01c-0.85,1.4-2.27,2.01-3.67,2.01c-1.86,0-3.14-1.02-3.14-2.83
			c0-1.8,1.19-2.8,3.5-3.65c1.83-0.69,3.27-1.17,3.27-2.23V8.96c0-1.3-0.56-2.22-2.03-2.22c-0.59,0-1.32,0.17-1.77,0.61
			c0.89,0.3,1.47,0.95,1.47,1.95c0,1.03-0.8,1.78-2.03,1.78c-1.08,0-1.76-0.83-1.76-1.92c0-0.91,0.58-1.6,1.4-2.08
			c0.89-0.5,2.1-0.85,3.77-0.85C30.05,6.24,31.29,6.53,32.09,7.36z M29.4,11.92c-0.23,0.38-0.7,0.7-1.54,1.23
			c-0.87,0.64-1.69,1.46-1.69,2.95c0,1.37,0.67,1.93,1.55,1.93c0.61,0,1.15-0.27,1.67-1.01V11.92z"/>
		<path d="M43.24,6.6v0.5H40.3v10.03c0,1.02,0.36,1.38,1.09,1.38c0.61,0,1.21-0.39,1.7-1.49l0.41,0.23
			c-0.55,1.48-1.57,2.55-3.4,2.55c-1.12,0-1.93-0.28-2.49-0.84c-0.72-0.73-0.9-1.74-0.9-3.47V7.1h-2.09V6.6h2.09V3.31
			c1.4-0.01,2.55-0.24,3.58-0.8V6.6H43.24z"/>
		<path d="M48.91,8.54c0.83-1.69,2.32-2.31,4.07-2.31c1.42,0,2.23,0.39,2.74,0.97c0.55,0.63,0.78,1.54,0.78,3.23v6.7
			c0,1.38,0.44,1.78,1.59,1.78v0.52c-0.63-0.02-2.06-0.1-3.28-0.1c-1.27,0-2.62,0.07-3.23,0.1v-0.52c0.98,0,1.33-0.4,1.33-1.78V9.41
			c0-1.24-0.29-2.08-1.53-2.08c-1.37,0-2.48,1.19-2.48,2.88v6.93c0,1.38,0.36,1.78,1.35,1.78v0.52c-0.58-0.02-1.87-0.1-3.08-0.1
			c-1.27,0-2.77,0.07-3.42,0.1v-0.52c1.15,0,1.59-0.4,1.59-1.78V2.97c0-1.48-0.39-2.18-1.59-2.18V0.27
			c0.52,0.05,1.04,0.07,1.53,0.07c1.4,0,2.6-0.1,3.63-0.34V8.54z"/>
		<path d="M69.45,15.75l0.45,0.17c-0.59,1.87-2.22,3.87-4.98,3.87c-3.35,0-5.73-2.11-5.73-6.65c0-4.61,2.55-6.91,6.08-6.91
			c2.9,0,4.67,1.63,4.67,5.52H63c-0.04,0.36-0.05,0.78-0.05,1.18c0,3.46,1.66,4.81,3.24,4.81C67.18,17.75,68.45,17.41,69.45,15.75z
			 M62.92,11.29h3.9c0.05-2.43-0.47-4.52-1.69-4.52C64.02,6.77,63.13,8.07,62.92,11.29z"/>
		<path d="M90.02,6.58V7.1c-0.63,0.16-1.23,0.63-1.71,2.14l-3.3,10.26c-0.27-0.02-0.55-0.04-0.81-0.04s-0.53,0.01-0.8,0.04
			l-3.37-9.23l-2.76,9.23c-0.27-0.02-0.53-0.04-0.8-0.04c-0.28,0-0.55,0.01-0.81,0.04l-3.93-11c-0.49-1.31-1.09-1.4-1.44-1.4V6.58
			c1.06,0.11,2.15,0.16,3.53,0.16c1.02,0,2.25-0.07,3.24-0.16V7.1c-0.91,0-1.57,0.04-1.57,0.74c0,0.17,0.05,0.4,0.13,0.67l2.25,7.04
			l2.69-8.99h0.01c0.28,0.02,0.56,0.04,0.85,0.04c0.32,0,0.64-0.01,0.96-0.04l3.23,9.49l1.58-4.99c0.23-0.74,0.33-1.36,0.33-1.87
			c0-1.37-0.74-1.99-1.94-2.09V6.58c0.76,0.07,1.88,0.1,2.55,0.1C88.79,6.68,89.59,6.65,90.02,6.58z"/>
		<path d="M110.74,1.85v0.5c-0.72,0.28-1.6,1.09-2.27,2.95l-5.26,14.2c-0.27-0.01-0.57-0.02-0.86-0.02c-0.3,0-0.59,0.01-0.86,0.02
			L95.15,3.93c-0.47-1.19-1.08-1.57-1.57-1.59v-0.5c1,0.05,2.42,0.07,3.79,0.07c1.53,0,2.96-0.02,3.77-0.07v0.5
			C100,2.39,99.4,2.55,99.4,3.27c0,0.28,0.1,0.67,0.29,1.17l4.39,11.13l3.06-8.25c0.47-1.29,0.69-2.27,0.69-3.01
			c0-1.38-0.76-1.92-2.09-1.95v-0.5c1.12,0.05,2.06,0.07,3.1,0.07C109.57,1.92,110.24,1.89,110.74,1.85z"/>
		<path d="M118.76,7.36c0.73,0.75,0.89,1.75,0.89,3.48v6.76c0,0.8,0.13,1.1,0.53,1.1c0.35,0,0.63-0.21,0.91-0.42l0.25,0.42
			c-0.75,0.61-1.58,0.91-2.84,0.91c-1.82,0-2.38-0.95-2.39-2.01c-0.85,1.4-2.27,2.01-3.67,2.01c-1.86,0-3.14-1.02-3.14-2.83
			c0-1.8,1.19-2.8,3.5-3.65c1.83-0.69,3.26-1.17,3.26-2.23V8.96c0-1.3-0.56-2.22-2.03-2.22c-0.59,0-1.32,0.17-1.77,0.61
			c0.89,0.3,1.47,0.95,1.47,1.95c0,1.03-0.8,1.78-2.03,1.78c-1.08,0-1.76-0.83-1.76-1.92c0-0.91,0.58-1.6,1.4-2.08
			c0.89-0.5,2.1-0.85,3.77-0.85C116.72,6.24,117.96,6.53,118.76,7.36z M116.06,11.92c-0.23,0.38-0.7,0.7-1.54,1.23
			c-0.87,0.64-1.69,1.46-1.69,2.95c0,1.37,0.67,1.93,1.55,1.93c0.61,0,1.15-0.27,1.67-1.01V11.92z"/>
		<path d="M132.74,8.53c0,1.23-0.76,2.09-1.93,2.09c-1.17,0-1.86-0.63-1.86-1.6c0-0.91,0.47-1.51,1.09-1.92
			c-0.1-0.04-0.21-0.06-0.33-0.06c-0.11,0-0.23,0.02-0.35,0.06c-1.32,0.22-2.26,1.87-2.26,3.2v6.58c0,1.6,0.76,2.04,2.33,2.04v0.52
			c-0.76-0.02-2.38-0.1-3.94-0.1c-1.36,0-2.88,0.07-3.56,0.1v-0.52c1.15,0,1.59-0.4,1.59-1.78V9.3c0-1.49-0.39-2.2-1.59-2.2V6.58
			c0.52,0.05,1.04,0.08,1.54,0.08c1.38,0,2.59-0.11,3.63-0.35v2.32c0.59-1.33,1.8-2.39,3.36-2.39
			C132.08,6.24,132.74,7.42,132.74,8.53z"/>
		<path d="M142.64,16.26c1.81,0,3.36,0.64,3.36,2.67c0,2.39-2.26,5.18-7.2,5.18c-3.75,0-5.51-0.96-5.51-2.15
			c0-1.58,2.44-1.48,3.76-2.39h-0.58c-0.95,0-2.78-0.33-2.78-2.31c0-1.41,0.8-2.38,3.17-3.5c-1.66-0.55-2.73-1.71-2.73-3.58
			c0-2.74,2.28-3.96,5.34-3.96c0.66,0,1.29,0.06,1.86,0.17c-0.02-0.41,0-0.83,0.08-1.23c0.16-1.3,0.87-2.29,2.35-2.29
			c1.06,0,1.81,0.58,1.81,1.52c0,0.84-0.73,1.44-1.7,1.44c-1.06,0-1.54-0.52-1.86-1.4c-0.17,0.29-0.29,0.72-0.36,1.26
			c-0.01,0.12-0.01,0.24-0.01,0.36c0,0.13,0,0.27,0.01,0.4c1.91,0.49,3.17,1.68,3.17,3.71c0,2.73-2.29,3.96-5.35,3.96
			c-0.78,0-1.5-0.07-2.15-0.24c-0.84,0.5-1.42,0.9-1.42,1.53c0,0.57,0.35,0.83,1.02,0.83H142.64z M143.24,20.61
			c0-0.67-0.3-1.03-1.43-1.03h-4.27c-0.58,0.56-0.85,1.43-0.85,1.97c0,1.42,1.23,2.15,2.79,2.15
			C141.48,23.69,143.24,22.56,143.24,20.61z M137.81,10.2c0,2.66,0.63,3.51,1.66,3.51s1.66-0.85,1.66-3.51s-0.63-3.51-1.66-3.51
			S137.81,7.54,137.81,10.2z"/>
		<path d="M151.81,8.54c0.83-1.69,2.32-2.31,4.07-2.31c1.42,0,2.23,0.39,2.74,0.97c0.55,0.63,0.78,1.54,0.78,3.23v6.7
			c0,1.38,0.44,1.78,1.59,1.78v0.52c-0.63-0.02-2.06-0.1-3.28-0.1c-1.27,0-2.62,0.07-3.23,0.1v-0.52c0.98,0,1.34-0.4,1.34-1.78V9.41
			c0-1.24-0.29-2.08-1.53-2.08c-1.37,0-2.48,1.19-2.48,2.88v6.93c0,1.38,0.36,1.78,1.35,1.78v0.52c-0.58-0.02-1.87-0.1-3.08-0.1
			c-1.27,0-2.77,0.07-3.42,0.1v-0.52c1.15,0,1.59-0.4,1.59-1.78V2.97c0-1.48-0.39-2.18-1.59-2.18V0.27
			c0.52,0.05,1.04,0.07,1.53,0.07c1.4,0,2.6-0.1,3.63-0.34V8.54z"/>
		<path d="M172.36,15.75l0.45,0.17c-0.59,1.87-2.22,3.87-4.98,3.87c-3.35,0-5.73-2.11-5.73-6.65c0-4.61,2.55-6.91,6.08-6.91
			c2.9,0,4.67,1.63,4.67,5.52h-6.96c-0.04,0.36-0.05,0.78-0.05,1.18c0,3.46,1.66,4.81,3.24,4.81
			C170.09,17.75,171.35,17.41,172.36,15.75z M165.83,11.29h3.9c0.05-2.43-0.47-4.52-1.69-4.52C166.92,6.77,166.04,8.07,165.83,11.29
			z"/>
		<path d="M182.07,7c0.17,0.11,0.32,0.17,0.45,0.17c0.29,0,0.5-0.29,0.58-0.91h0.53c-0.08,0.95-0.11,2.16-0.11,4.37H183
			c-0.25-1.83-1.07-3.85-3.19-3.85c-0.96,0-1.69,0.58-1.69,1.6c0,1.49,1.53,2.32,3.06,3.46c1.66,1.23,2.97,2.29,2.97,4.26
			c0,2.27-2.15,3.69-4.71,3.69c-1,0-1.77-0.22-2.33-0.52c-0.45-0.23-0.8-0.41-1.15-0.52c-0.04-0.01-0.07-0.02-0.11-0.02
			c-0.28,0-0.49,0.35-0.61,0.89h-0.52c0.07-1.07,0.1-2.45,0.1-4.96h0.53c0.3,2.69,1.26,4.58,3.35,4.58c0.86,0,1.75-0.5,1.75-1.77
			c0-1.46-1.08-2.27-2.51-3.39c-1.63-1.27-3.12-2.4-3.12-4.41c0-2.21,2.02-3.42,4.27-3.42C180.49,6.24,181.58,6.69,182.07,7z"/>
		<path d="M196.12,15.75l0.45,0.17c-0.59,1.87-2.22,3.87-4.98,3.87c-3.35,0-5.73-2.11-5.73-6.65c0-4.61,2.55-6.91,6.08-6.91
			c2.9,0,4.67,1.63,4.67,5.52h-6.96c-0.04,0.36-0.05,0.78-0.05,1.18c0,3.46,1.66,4.81,3.24,4.81
			C193.85,17.75,195.11,17.41,196.12,15.75z M189.59,11.29h3.9c0.05-2.43-0.47-4.52-1.69-4.52C190.68,6.77,189.8,8.07,189.59,11.29z
			"/>
	</g>
</g>
<g id="Layer_1">
</g>
</svg>					
					</a>
				</h1>
				<div class="site-header__nav">
					<button class="menu-icon" type="button" data-open="offCanvas"></button>	
				</div>
				<div class="site-header__social">
					<ul class="no-bullet meta-nav menu">
						<li class="show-for-medium">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a data-open="siteSearch">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.71 16.71"><title>Search</title><path class="cls-1" d="M15.71,15.29L10.44,10a5.94,5.94,0,1,0-1.58,1.25l5.43,5.43ZM2,6a4,4,0,1,1,4,4A4,4,0,0,1,2,6Z"></path></svg>
							</a>
						</li>						
					</ul>					
				</div>
			</div>
		</header>		

		<section id="container-inner" class="container">
			<?php do_action( 'foundationpress_after_header' );
