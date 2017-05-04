<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php #get_template_part( 'template-parts/featured-image' ); ?>

<div id="page" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<section class="main-content clearfix">
		<?php get_template_part( 'template-parts/page-header'); ?>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="wps lf left-content">
			<!-- <img class="author-pic" data-interchange="[<?php #echo the_post_thumbnail_url('thumbnail'); ?>, small], [<?php #echo the_post_thumbnail_url('medium'); ?>, medium], [<?php #echo the_post_thumbnail_url('large'); ?>, large]" alt="">							 -->
			<div class="callout thick-border__left">
				<h6>Maharajas College</h6>
				<address>					
					Department of Political Science at Maharajas College
				</address>
			</div>				
			<div class="callout thick-border__left">
				<h6>Visiting address: </h6>
				<address>
					4088 Overlook Drive
					Indianapolis
					Indiana, United States
				</address>
			</div>
			<div class="callout thick-border__left">
				<h6>Postal address:</h6>
				<address>
					<p>P.O.Box 1008, 15 Cunnery Rd
					Manchester</p>					
					Ph: +91-944-621-7402
				</address>
			</div>
			<div class="callout thick-border__left">
				<h6>Enquiries:</h6>
				<p>All press enquiries should be sent to:
					Mathew.Varghese@uib.no</p>
			</div>
		</div>
		<div class="wps rf right-content ">
			<?php the_content(); ?>
		</div>		
	</section>

	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>	
</div>

	<?php get_footer();
