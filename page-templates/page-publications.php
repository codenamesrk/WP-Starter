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
		<section class="subsection papers">
			<header class="wps subsection-title-block">
				<h3 class="sec-pap">Papers</h3>								
			</header>
			<article class="wps paper">
				<h5 class="year">May 2007</h5>
				<h4>Spatialising the Contemporary Urban Order</h4>
				<ul class="tags">
					<li><a href="#">Social Anthropology</a></li>
					<li><a href="#">Urban Social Geography</a></li>
				</ul>							
				<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
			</article>
			<article class="wps paper">
				<h5 class="year">May 2007</h5>
				<h4>New Religious Affirmations: Performances and Public Spaces in Urban Central Kerala</h4>							
				<ul class="tags">
					<li><a href="#">Privatisation Of Public Space</a></li>
					<li><a href="#">Urban Sociology</a></li>
					<li><a href="#">Spatiality (Cultural geography)</a></li>
					<li><a href="#">Anthropology of Religion</a></li>
				</ul>					
				<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
			</article>
		</section>
		<!-- /Papers  -->
		<div class="section-divider">
			<hr>
		</div>
		<!-- /Books  -->
		<section class="subsection books">
			<header class="wps subsection-title-block">
				<h3 class="sec-bks">Books</h3>
			</header>
			<article class="wps book row collapse">
				<div class="book-cover medium-3 large-2 columns">
					<h5>2010</h5>
					<div class="book-cover-inner">
						<img src="http://localhost:3000/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt="">
						<a href="#" class="buy-book-badge">
							<span>Buy the Book</span>
						</a>
					</div>
				</div>
				<div class="book-details medium-9 large-10 columns">
					<h5 class="year"> May 2013 </h5>
					<h4>Urban Utopias: Excess and Expulsion in Neoliberal South Asia</h4>
					<h6 class="author">By <a href="#">Tereza Kuldova</a> &amp; <a href="#">Mathew A Varghese</a></h6>
					<ul class="tags">
						<li><a href="#">Privatisation Of Public Space</a></li>
						<li><a href="#">Urban Sociology</a></li>
						<li><a href="#">Spatiality (Cultural geography)</a></li>
						<li><a href="#">Anthropology of Religion</a></li>
					</ul>					
					<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora alias illo architecto accusantium quos. Sunt, dolor enim dicta modi accusamus labore blanditiis quod nulla numquam qui! Corporis totam aspernatur modi.</p>
				</div>				
			</article>
			<article class="wps book row collapse">
				<div class="book-cover medium-3 large-2 columns">
					<h5>2010</h5>
					<div class="book-cover-inner">
						<img src="http://localhost:3000/cauldron/matt/wp-content/uploads/sites/2/2017/04/1.png" alt="">
						<a href="#" class="buy-book-badge">
							<span>Buy the Book</span>
						</a>
					</div>
				</div>
				<div class="book-details medium-9 large-10 columns">
					<h5 class="year"> May 2013 </h5>
					<h4>Urban Utopias: Excess and Expulsion in Neoliberal South Asia</h4>
					<h6 class="author">By <a href="#">Tereza Kuldova</a> &amp; <a href="#">Mathew A Varghese</a></h6>
					<ul class="tags">
						<li><a href="#">Privatisation Of Public Space</a></li>
						<li><a href="#">Urban Sociology</a></li>
						<li><a href="#">Spatiality (Cultural geography)</a></li>
						<li><a href="#">Anthropology of Religion</a></li>
					</ul>					
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
