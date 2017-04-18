<?php
/*
Template Name: Publications
*/
get_header(); ?>

<?php #get_template_part( 'template-parts/featured-image' ); ?>

<div id="page" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<section class="main-content">
		<?php get_template_part( 'template-parts/page-header'); ?>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<!-- Papers -->
		<section class="papers">
			<header>
				<h3 class="wps entry-title">Papers</h3>							
			</header>
			<article class="wps paper">
				<h5>2010</h5>
				<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
			</article>
			<article class="wps paper">
				<h5>2010</h5>
				<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
			</article>
			<article class="wps paper">
				<h5>2010</h5>
				<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
			</article>
		</section>
		<!-- /Papers  -->
		<div class="section-divider">
			<hr>
		</div>
		<!-- /Books  -->
		<section class="books">
			<header>
				<h3 class="wps entry-title">Books</h3>							
			</header>
			<article class="wps book row collapse">
				<div class="book-cover medium-2 columns">
					<img src="http://localhost:3000/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt="">
				</div>
				<div class="book-details medium-10 columns">
					<h5>2010</h5>
					<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
				</div>				
			</article>
			<article class="wps book row collapse">
				<div class="book-cover medium-2 columns">
					<img src="http://localhost:3000/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt="">
				</div>
				<div class="book-details medium-10 columns">
					<h5>2010</h5>
					<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
				</div>				
			</article>
			<article class="wps book row collapse">
				<div class="book-cover medium-2 columns">
					<img src="http://localhost:3000/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt="">
				</div>
				<div class="book-details medium-10 columns">
					<h5>2010</h5>
					<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
				</div>				
			</article>									
		</section>
		<!-- /Books  -->
	</section>

	
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>	
</div>

	<?php get_footer();
