<?php
/**
 * Author Bio
 *
 * Used in Index and Single Posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php if( !is_single() ) :  ?>
	<section class="author-bio">
		<div class="medium-9 medium-centered columns text-center">
			<img class="author-pic" src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2010/07/matt.jpg" alt="">
			<h4>About the Author</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quam commodi facilis nulla adipisci. Quidem facilis minus fugiat praesentium voluptates perferendis nesciunt sapiente, voluptas deserunt incidunt ducimus libero nemo natus.</p>
			<div class="menu-centered">
				<ul class="social-share menu">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-university" aria-hidden="true"></i></a></li>
				</ul>
			</div>			
		</div>
	</section>
<?php else : ?>
	<div class="section-divider">
		<hr>
	</div>
	<section class="author-bio row small-collapse medium-uncollapse">
			<div class="medium-2 columns">
				<img class="author-pic" src="http://localhost/cauldron/matt/wp-content/uploads/sites/2/2010/07/matt.jpg" alt="">
			</div>
			<div class="medium-10 columns">
				<h4>About the Author</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quam commodi facilis nulla adipisci. Quidem facilis minus fugiat praesentium voluptates perferendis nesciunt sapiente, voluptas deserunt incidunt ducimus libero nemo natus.</p>
				<a href="#" class="hollow button">view all articles</a>
			</div>
	</section>
	<div class="section-divider">
		<hr>
	</div>		
<?php endif; ?>