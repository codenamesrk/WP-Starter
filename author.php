<?php
/**
 * The template for displaying Author Posts
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" class="full-width" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php get_template_part( 'template-parts/page','header'); ?>
	<div class="row search-wrap">
		<div class="wps medium-6 medium-centered columns">
			<form role="search" method="get" action="<?php echo site_url(); ?>" class="searchform"> 
				<label for="s" class="form-control">
					Search
					<input type="text" name="s" value="" placeholder="Type and hit enter to search">
				</label>
				<input type="submit" id="searchsubmit" value="Search" class="hide">
			</form>
		</div>
	</div>
	<section class="main-content clearfix">		
		<?php if ( have_posts() ) : ?>
			<div class="post-grid small-up-1 medium-up-2 large-up-3">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'grid' ); ?>
			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>		
	</section>

	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();