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
				<h5>University of Oslo</h5>
				<address>
					Faculty of Humanities
					Department of Archaeology, Conservation and History 				
				</address>
			</div>				
			<div class="callout thick-border__left">
				<h5>Visiting address: </h5>
				<address>
					Niels Henrik Abels vei 36
					0851 Oslo
					office: 503
				</address>
			</div>
			<div class="callout thick-border__left">
				<h5>Postal address:</h5>
				<address>
					P.O.Box 1008 Blindern
					0315 Oslo
					<p>tereza.kuldova@iakh.uio.no</p>
					Ph: +47 462 437 93 
				</address>
			</div>
			<div class="callout thick-border__left">
				<h5>Enquiries:</h5>
				<p>All press enquiries should be sent to:
					tereza.kuldova@iakh.uio.no</p>
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
