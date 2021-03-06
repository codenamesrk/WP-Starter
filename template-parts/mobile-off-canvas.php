<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="off-canvas position-left" id="offCanvas" data-off-canvas role="navigation" data-transition="overlap">
  <?php foundationpress_mobile_nav(); ?>
  <button class="close-button" aria-label="Close menu" type="button" data-close>
  	<span aria-hidden="true">&times;</span>
  </button>	
</nav>

<nav class="off-canvas site-search position-top" id="siteSearch" data-off-canvas role="search" data-transition="overlap">
	<div class="site-search__bar">
		<div class="site-search__input">
			<form action="" class="searchform">
				<input type="text" name="s" value="" placeholder="Start Typing Here">
				<input type="submit" id="searchsubmit" value="Search" class="hide">
			</form>			
		</div>
		<div class="site-search__close">
			<button class="close-button" aria-label="Close menu" type="button" data-close>
				<span aria-hidden="true">&times;</span>
			</button>			
		</div>
	</div>	
</nav>

<div class="off-canvas-content" data-off-canvas-content>
