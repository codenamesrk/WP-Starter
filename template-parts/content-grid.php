<?php
/**
 * Grid Template for displaying posts
 *
 * Used for both Index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<div id="post-<?php the_ID(); ?>" class="column column-block post">
	<article>
		<h4 class="post-date"><?php echo get_the_date(); ?></h4>
		<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="post-divider"></div>
		<ul class="post-cats menu">
			<li><em>Postmodernism</em></li>
		</ul>
		<div>
			<?php the_excerpt(); ?>
		</div>
	</article>
</div>