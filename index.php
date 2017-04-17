<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<section class="main-content clearfix">
		<?php get_template_part( 'template-parts/page','header'); ?>
		<div class="row">
        <?php
        $args = array(
          'orderby' => 'name',
          'parent' => 0
          );
        $categories = get_categories( $args );		
		#echo display_categories($categories); ?>
		</div>
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
</div>
<?php get_footer();
