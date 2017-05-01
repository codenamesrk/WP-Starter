<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="single-post" role="main">
	<section class="wps main-content">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>">

			<header class="text-center">
				<h4 class="post-date"><?php echo get_the_date('M j'); ?></h4>
				<h2 class="post-title"><?php the_title(); ?></h2>
				<?php #foundationpress_entry_meta(); ?>
				<div class="post-divider center"></div>			
				<div class="post-cats menu-centered">
					<?php echo singleCategories(); ?>	
				</div>
			</header>

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<div class="tag-list">
					<?php the_tags('',''); ?>
				</div>				
				<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				<div class="menu-centered">
					<h6>Share this article</h6>
					<ul class="social-share menu">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-university" aria-hidden="true"></i></a></li>
					</ul>
				</div>				
			</div>

			<?php echo get_template_part('template-parts/author','bio'); ?>

			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
			</footer>

			<?php the_post_navigation(); ?>
			<div class="section-divider">
				<hr>
			</div>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>

	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>		
	</section>
<?php #get_sidebar(); ?>
</div>
<?php get_footer();
