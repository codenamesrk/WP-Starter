<?php
/**
 * Helper Functions
 *
 * @package FoundationPress
 */

/**
 * Limit Global Excerpt word length to 30
 */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 *  Display Categories
 */
function findCats($categories,$start,$limit) {
	$cats = '';
	for ($i=$start; $i<$limit; $i++) { 
		$cats .= '<li><a href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . $categories[$i]->name . '</a></li>';
	}
	return $cats;
}
function display_categories($categories) {	
	$cats = '<div class="menu-centered"><ul id="category-menu" class="category-menu dropdown menu" data-dropdown-menu>';
	$cats .= '<li class="active"><a href="#">All</a></li>';

	$count = sizeof($categories);
	// return $count;

	if($count > 4) {
		$cats .= findCats($categories,0,4);
		$cats .= '<li class="is-dropdown-submenu-parent"><a href="#">Rest of Categories</a><ul class="menu">';
		$cats .= findCats($categories,4,$count);
		$cats .= '</li></ul>';
	} else {
		$cats .= findCats($categories,4);		
	}
	$cats .= '</ul>';
	$cats .= '<ul class="category-mobile-menu dropdown menu" data-animate="fade-in" data-dropdown-menu>';
	$cats .= '<li class="is-dropdown-submenu-parent"><a href="#">All Categories</a><ul class="menu">';
	$cats .= findCats($categories,0,$count);
	$cats .= '<li></ul></ul></div>';
	return $cats;
}

