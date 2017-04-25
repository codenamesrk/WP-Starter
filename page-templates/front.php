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
		<header class="wps section-title-block">
			<h2>Musings</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit laudantium culpa delectus harum quaerat sit asperiores</p>
		</header>
		<div class="post-grid small-up-1 medium-up-2 large-up-3">
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
			<div class="column column-block post">
				<article>
					<h4 class="post-date">Dec 15</h4>
					<h4 class="post-title">Visions of our future from the past</h4>
					<div class="post-divider"></div>
					<ul class="post-cats no-bullet menu">
						<li><em>Postmodernism</em></li>
					</ul>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores saepe perferendis, repudiandae fugiat. Sapiente, animi debitis mollitia dolorem magnam, ut consequatur itaque similique, enim illum ex odit. Quo, magnam, numquam</p>
					</div>
				</article>
			</div>
		</div>
		<div class="text-center">
			<a href="#" class="hollow button">read more articles</a>
		</div>
	</section>
	<!-- /Section Intro -->

	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>

<?php get_footer();
