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
function singleCategories(){
	$categories = get_the_category(); 
	$count = sizeof($categories);
	if($count > 4) {
		$cats = '<ul class="single-category-menu dropdown menu" data-dropdown-menu><li><a href="#">All Categories</a><ul class="menu">';		
	} else {
		$cats = '<ul class="single-category-menu menu">';
	}	
	foreach ($categories as $cat) {
		$cats .= '<li><a href="' . esc_url( get_category_link( $cat->term_id ) ) . '"><em>'. $cat->name .'</em></a></li>';
	}
	$cats .= '</ul>';
	if($count > 4) {
		$cats .= '</li></ul>';
	}
	return $cats;
}
