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
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.44 141.62"><title>L’Estrange London</title><rect class="cls-1" x="29.99" y="8.42" width="23.41" height="7.59" transform="translate(13.05 44.88) rotate(-65.07)"></rect><polygon class="cls-1" points="8.43 7.15 0 7.15 0 62.79 35.22 62.79 35.22 55.15 8.43 55.15 8.43 7.15"></polygon><path class="cls-1" d="M144.6,31.13l-7.34-1.84c-6.95-1.74-9.06-3.55-9.06-7.74,0-4.74,4.21-7.8,10.74-7.8,6.15,0,10.74,2.29,14,7l0.42,0.59,6.21-5.27-0.37-.5c-2.6-3.5-8.7-9.37-20.23-9.37-11.33,0-19.24,6.58-19.24,16,0,10.07,7.25,12.81,15.33,14.94l6.62,1.68c6.7,1.69,10.58,3.64,10.58,8.54,0,5.48-4.52,8.76-12.09,8.76-7,0-12.84-3.18-15.68-8.51l-0.36-.67-6.86,4.87,0.32,0.53c4.29,7.15,12.58,11.42,22.18,11.42,12.61,0,21.08-6.75,21.08-16.8C160.89,36.25,152.48,33.17,144.6,31.13Z"></path><polygon class="cls-1" points="170.78 14.79 187.45 14.79 187.45 62.79 195.8 62.79 195.8 14.79 212.46 14.79 212.46 7.15 170.78 7.15 170.78 14.79"></polygon><path class="cls-1" d="M269.8,23.39c0-7-3.29-12.16-9.28-14.6a31.81,31.81,0,0,0-11.41-1.64H228V62.79h8.35V39.55h10.37l14.84,23.24H272L256.52,39C264.86,37.32,269.8,31.54,269.8,23.39ZM236.38,32V14.71h11.45c5,0,7.07.45,9,1.22,2.79,1.25,4.39,3.94,4.39,7.38s-1.43,6-4.22,7.38c-2,.83-4.07,1.3-9.08,1.3H236.38Z"></path><path class="cls-1" d="M384.87,41.68c0,2.54,0,4.88.09,6.51-0.83-1.27-1.92-2.91-2.87-4.26L356.38,7.15h-7.95V62.79h8.35V25.71c0-1.5,0-3.07-.07-4.32,0.92,1.45,2.14,3.3,3,4.54l25.55,36.86h7.95V7.15h-8.35V41.68Z"></path><path class="cls-1" d="M437.42,7.11c-16.35,0-28.21,12-28.21,28.42S421.07,64,437.42,64A28.31,28.31,0,0,0,459,54.47l0.22-.25V32.78H435.12v7.64h16V51.05a20.59,20.59,0,0,1-13.65,5.25c-11.37,0-19.63-8.74-19.63-20.78S426,14.75,437.42,14.75a18.69,18.69,0,0,1,14.42,6.68l6-5.12A26.1,26.1,0,0,0,437.42,7.11Z"></path><polygon class="cls-1" points="483.09 38.04 509.65 38.04 509.65 30.4 483.09 30.4 483.09 14.79 512.36 14.79 512.36 7.15 474.74 7.15 474.74 62.81 512.44 62.81 512.44 55.17 483.09 55.17 483.09 38.04"></polygon><polygon class="cls-1" points="73.38 38.04 99.95 38.04 99.95 30.4 73.38 30.4 73.38 14.79 102.66 14.79 102.66 7.15 65.03 7.15 65.03 62.81 102.74 62.81 102.74 55.17 73.38 55.17 73.38 38.04"></polygon><path class="cls-1" d="M291.68,41.85l-8.09,20.93h8.58l6-15.49h22.67l6,15.49h8.58l-8.09-20.93L313.84,7.06h-8.72Zm9.57-2.56L309.48,18l8.24,21.32H301.24Z"></path><polygon class="cls-2" points="147.07 118.82 144.15 118.82 144.15 140.69 157.2 140.69 157.2 137.95 147.07 137.95 147.07 118.82"></polygon><path class="cls-2" d="M191,118.42a11.21,11.21,0,0,0-8.08,3.26,11.63,11.63,0,0,0,0,16.21,11.2,11.2,0,0,0,8.08,3.23,11.06,11.06,0,0,0,8-3.23,11.55,11.55,0,0,0,0-16.21A11.07,11.07,0,0,0,191,118.42Zm0,20A8.16,8.16,0,0,1,185,136a9.12,9.12,0,0,1,0-12.33,8.7,8.7,0,0,1,12.13,0,9.12,9.12,0,0,1,0,12.34A8,8,0,0,1,191,138.38Z"></path><polygon class="cls-2" points="239.31 135.37 226.91 118.92 226.83 118.82 224.35 118.82 224.35 140.69 227.27 140.69 227.27 123.95 239.82 140.59 239.9 140.69 242.23 140.69 242.23 118.82 239.31 118.82 239.31 135.37"></polygon><path class="cls-2" d="M273.79,118.82h-7.12v21.88h7.15a11.28,11.28,0,0,0,8.23-3,11.91,11.91,0,0,0,0-15.87A11.16,11.16,0,0,0,273.79,118.82Zm-4.2,2.74h4c5.43,0,8.54,3,8.54,8.22S279,138,273.64,138h-4v-16.4Z"></path><path class="cls-2" d="M317.13,118.42a11.22,11.22,0,0,0-8.08,3.26,11.63,11.63,0,0,0,0,16.21,11.19,11.19,0,0,0,8.08,3.23,11.05,11.05,0,0,0,8-3.23,11.55,11.55,0,0,0,0-16.21A11.07,11.07,0,0,0,317.13,118.42Zm0,20A8.17,8.17,0,0,1,311,136a9.12,9.12,0,0,1,0-12.33,8.29,8.29,0,0,1,6.08-2.46,8.16,8.16,0,0,1,6,2.46,9.12,9.12,0,0,1,0,12.34A8.14,8.14,0,0,1,317.13,138.38Z"></path><polygon class="cls-2" points="365.39 118.82 365.39 135.37 352.99 118.92 352.91 118.82 350.43 118.82 350.43 140.69 353.35 140.69 353.35 123.95 365.9 140.59 365.98 140.69 368.31 140.69 368.31 118.82 365.39 118.82"></polygon></svg>
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
