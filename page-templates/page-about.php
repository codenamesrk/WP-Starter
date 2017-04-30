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
					<h3 class="sec-edu">Education</h3>							
				</header>
				<div class="details">
					<ul class="academics-list subs-list no-bullet">
						<li>
							<h5 class="year">May 2007 – May 2013 </h5>
							<h4>PhD, Faculty of Social Sciences</h4>
							<h6 class="alma-mater">University Of Bergen</h6>
							<p>[Thesis titled “Spatial Reconfigurations and New Social Formations: The Contemporary Urban Context of Kerala”/ Urban Processes/ Social Science of Development]</p>
						</li>
						<li>
							<h5 class="year">May 2007 – May 2013 </h5>
							<h4>PhD, Faculty of Social Sciences</h4>
							<h6 class="alma-mater">University Of Bergen</h6>
							<p>[Thesis titled “Spatial Reconfigurations and New Social Formations: The Contemporary Urban Context of Kerala”/ Urban Processes/ Social Science of Development]</p>
						</li>
						<li>
							<h5 class="year">May 2007 – May 2013 </h5>
							<h4>PhD, Faculty of Social Sciences</h4>
							<h6 class="alma-mater">University Of Bergen</h6>
							<p>[Thesis titled “Spatial Reconfigurations and New Social Formations: The Contemporary Urban Context of Kerala”/ Urban Processes/ Social Science of Development]</p>
						</li>
						<li>
							<h5 class="year">May 2007 – May 2013 </h5>
							<h4>PhD, Faculty of Social Sciences</h4>
							<h6 class="alma-mater">University Of Bergen</h6>
							<p>[Thesis titled “Spatial Reconfigurations and New Social Formations: The Contemporary Urban Context of Kerala”/ Urban Processes/ Social Science of Development]</p>
						</li>						
					</ul>
				</div>
			</article>
			<div class="subsection-divider">
				<hr class="show-for-small-only">
			</div>			
			<article class="subsection research">
				<header class="subsection-title-block">
					<h3 class="sec-res">Research Interests</h3>							
				</header>
				<div class="details">
					<ul class="subs-list no-bullet fa-ul">			
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Development as an Idea (particularly in the sub-continent)
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Spatial Geography and Spatiality
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Unintentional Designs in the Anthropocene
						</li>
						<li>
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Co-Species Evolution
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Subjectivities in the Making: Forms of Labour and Gender
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Emerging Human Ecologies
						</li>
						<li>
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Disciplinary and Interdisciplinary Challenges in Social Sciences
						</li>																										
					</ul>
				</div>
			</article>
			<div class="subsection-divider">
				<hr class="show-for-small-only">
			</div>			
			<article class="subsection qualifications">
				<header class="subsection-title-block">
					<h3 class="sec-qlf">Qualifications</h3>							
				</header>
				<div class="details">
					<ul class="subs-list no-bullet fa-ul">
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Development as an Idea (particularly in the sub-continent)
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Spatial Geography and Spatiality
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Unintentional Designs in the Anthropocene
						</li>
						<li>
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Co-Species Evolution
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Subjectivities in the Making: Forms of Labour and Gender
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Emerging Human Ecologies
						</li>
						<li>
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>Disciplinary and Interdisciplinary Challenges in Social Sciences
						</li>																				
					</ul>
				</div>
			</article>
			<div class="subsection-divider">
				<hr class="show-for-small-only">
			</div>												
		</div>
		<div class="wps right-content">
			<article class="subsection experience">
				<header class="subsection-title-block">
					<h3 class="sec-exp">Professional Experience</h3>							
				</header>
				<div class="details">
					<ul class="subs-list no-bullet">
						<li>
							<h5 class="position">Assitant Professor <span class="time-period">2014 - present</span></h5>
							<h4>Dept. of Political Science, Maharajas College, Ernakulam</h4>
							<h6>Mahatma Gandhi University</h6>
							<p> Under Graduate and Post Graduate Teaching/Mentoring [Human Rights both in the global and Indian context/  Social Science and its Methods/ State systems/ International Relations/ Political Thought/theories]</p>
						</li>																				
						<li>
							<h5 class="position">Assitant Professor <span class="time-period">2014 - present</span></h5>
							<h4>Dept. of Political Science, Maharajas College, Ernakulam</h4>
							<h6>Mahatma Gandhi University</h6>
							<p> Under Graduate and Post Graduate Teaching/Mentoring [Human Rights both in the global and Indian context/  Social Science and its Methods/ State systems/ International Relations/ Political Thought/theories]</p>
						</li>
						<li>
							<h5 class="position">Assitant Professor <span class="time-period">2014 - present</span></h5>
							<h4>Dept. of Political Science, Maharajas College, Ernakulam</h4>
							<h6>Mahatma Gandhi University</h6>
							<p> Under Graduate and Post Graduate Teaching/Mentoring [Human Rights both in the global and Indian context/  Social Science and its Methods/ State systems/ International Relations/ Political Thought/theories]</p>
						</li>
						<li>
							<h5 class="position">Assitant Professor <span class="time-period">2014 - present</span></h5>
							<h4>Dept. of Political Science, Maharajas College, Ernakulam</h4>
							<h6>Mahatma Gandhi University</h6>
							<p> Under Graduate and Post Graduate Teaching/Mentoring [Human Rights both in the global and Indian context/  Social Science and its Methods/ State systems/ International Relations/ Political Thought/theories]</p>
						</li>																		
					</ul>
				</div>
			</article>
			<div class="subsection-divider">
				<hr class="show-for-small-only">
			</div>				
			<article class="subsection published-works">
				<header class="subsection-title-block">
					<h3 class="sec-exp">Published Works</h3>							
				</header>
				<div class="details">
					<ul class="subs-list no-bullet fa-ul">
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>
							<a href="#">“Spatialising the Contemporary Urban Order” in Indian Journal of Politics and International Relations (Vol.5-7,June 2014), ISSN 0973- 5011</a>
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>
							<a href="#">“Earthing with Expectations” in Elenchus Law Review (1 [1]) January 2015, Peer Reviewed Journal of the Government Law College, Thrissur. ISSN 2395-034X. </a>
						</li>
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>
							<a href="#">“New Religious Affirmations: Performances and Public Spaces in Urban Central Kerala” in Ruhuna University Journal of   Social Sciences (RUJSS), Published by the University of Ruhuna, Matara, Sri Lanka. Vol. V (No.2) 73-83, 2014, ISSN: 1800-3486. </a>
						</li>
						<li>
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>
							<a href="#">“Spatial Reconfigurations and New Social Formations: The Contemporary   Urban Context of Kerala” (ISBN: 978-82-308-2285-2), Published by   University of Bergen, Norway </a>
						</li>																				
					</ul>
				</div>
			</article>
			<div class="subsection-divider">
				<hr class="show-for-small-only">
			</div>
			<article class="subsection published-works">
				<header class="subsection-title-block">
					<h3 class="sec-exp">Upcoming Work</h3>							
				</header>
				<div class="details">
					<ul class="subs-list no-bullet fa-ul">
						<li>							
							<i class="fa-li fa fa-caret-right" aria-hidden="true"></i>
							<a href="#">Tereza Kuldova & Mathew Akkanad Varghese (ed.), Urban Utopias: Excess and Expulsion in Neoliberal South Asia.  Palgrave Macmillan.  ISBN 978-3-319-47622-3. (2017)</a>
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
