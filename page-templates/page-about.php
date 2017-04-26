<?php
/*
Template Name: About
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
			<div class="author-pic-wrap">
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
		</div>
		<div class="wps rf right-content ">
			<?php the_content(); ?>
		</div>
	</section>
	<section class="about-btm">
		<div class="wps left-content">
			<article class="subsection education">
				<header class="subsection-title-block">
					<h2 class="sec-edu">Education</h2>							
				</header>
				<div class="details">
					<ul class="no-bullet">
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>																				
					</ul>
				</div>
			</article>
			<article class="subsection research">
				<header class="subsection-title-block">
					<h2 class="sec-res">Research Interests</h2>							
				</header>
				<div class="details">
					<ul class="no-bullet">
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>																				
					</ul>
				</div>
			</article>
			<article class="subsection qualifications">
				<header class="subsection-title-block">
					<h2 class="sec-qlf">Qualifications</h2>							
				</header>
				<div class="details">
					<ul class="no-bullet">
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>																				
					</ul>
				</div>
			</article>									
		</div>
		<div class="wps right-content">
			<article class="subsection experience">
				<header class="subsection-title-block">
					<h2 class="sec-exp">Professional Experience</h2>							
				</header>
				<div class="details">
					<ul class="no-bullet">
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<h5>2001</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>																				
					</ul>
				</div>
			</article>
			<article class="subsection research">
				<header class="subsection-title-block">
					<h2 class="sec-exp">Published Works</h2>							
				</header>
				<div class="details">
					<ul class="no-bullet">
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</li>																				
					</ul>
				</div>
			</article>								
		</div>				
	</section>
	
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
</div>

	<?php get_footer();
