<?php
/*
Template Name: Blog
*/
get_header(); ?>

<?php #get_template_part( 'template-parts/featured-image' ); ?>

<div id="page" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<section class="main-content clearfix">
		<header class="section-header wps text-center">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="wps lf left-content">
			<img class="author-pic" data-interchange="[<?php echo the_post_thumbnail_url('thumbnail'); ?>, small], [<?php echo the_post_thumbnail_url('medium'); ?>, medium], [<?php echo the_post_thumbnail_url('large'); ?>, large]" alt="">
			<div class="author-info">
				<h4>Mathew A. Varghese, PhD</h4>
				<p>Faculty, Government Lawe College, Ernakulam, Kerala (India)</p>
				<ul class="contact-details no-bullet">
					<li>
						<h5>Email</h5><span>Mathew.Varghese@uib.no / matzwordz@gmail.com</span>
					</li>
					<li>
						<h5>Phone</h5><span>+91-944-621-7402</span>
					</li>												
				</ul>
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
