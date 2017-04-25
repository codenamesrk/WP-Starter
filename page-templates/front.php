<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="featured-slider-wrapper">
		<div class="featured-slider medium-up-3 large-up-4">
			<div class="column column-block">
				<div>
					<img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/3.png" alt="">
				</div>
			</div>
			<div class="column column-block">
				<div><img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/2.jpg" alt=""></div>
			</div>
			<div class="column column-block">
				<div><img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/4.jpg" alt=""></div>
			</div>
			<div class="column column-block">
				<div><img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt=""></div>
			</div>
			<div class="column column-block">
				<div><img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/2.jpg" alt=""></div>
			</div>
			<div class="column column-block">
				<div><img src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2017/04/3.png" alt=""></div>
			</div>			
		</div>		
	</div>
</header>

<div id="page">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Section Intro -->
	<section class="section intro" role="main">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="wps fp-intro medium-text-center">
			<h2 class="section-title">Vestibulum id liqula porta felis</h2>
			<?php the_content(); ?>
			<a href="#" class="hollow button">about the author</a>
		</div>
	</section>
	<!-- /Section Intro -->

	<div class="section section-divider">
		<hr />
	</div>

	<!-- /Section Intro -->
	<section class="section musings">
		<header class="wps section-title-block musings">
			<h2 class="sec-muse">Musings</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit laudantium culpa delectus harum quaerat sit asperiores</p>
		</header>

		<?php 
		// the query
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(		
			'posts_per_page' => 6,
			'orderby' => 'date',
			'ignore_sticky_posts' => 1,
			'paged' => $paged,
			);
		$wp_query = new WP_Query( $args ); ?>
		 
		<?php if ( $wp_query->have_posts() ) : ?>
			<div class="post-grid small-up-1 medium-up-2 large-up-3">
		    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		        <?php get_template_part( 'template-parts/content', 'grid' ); ?>
		    <?php endwhile; ?>		
		 	</div>
		<?php else : ?>
		    <?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>	

		<?php wp_reset_postdata(); ?>	
		<?php wp_reset_query(); //resetting the page query ?>	
		   
		<div class="text-center">
			<a href="<?php echo site_url(); ?>/blog" class="hollow button">read more articles</a> 

		</div>
	</section>
	<!-- /Section Intro -->

	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>

<?php get_footer();
