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
// function findCats($categories,$start=NULL,$limit) {
// 	$cats = '';
// 	for (!is_null($start) ? $i=$start : $i=0; $i<$limit; $i++) { 
// 		$cats .= '<li><a href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . $categories[$i]->name . '</a></li>';
// 	}
// 	return $cats;
// }
// function display_categories($categories) {	
// 	$cats = '<div class="menu-centered"><ul id="category-menu" class="category-menu vertical medium-horizontal dropdown menu" data-dropdown-menu>';
// 	$cats .= '<li class="active"><a href="#">All</a></li>';

// 	$count = sizeof($categories);
// 	return $count;
	
// 	if($count > 4) {
// 		// for ($i=0; $i<4 ; $i++) { 
// 		// 	$cats .= '<li><a href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . $categories[$i]->name . '</a></li>';
// 		// }
// 		$cats .= findCats($categories,4);
// 		$cats .= '<li><a href="#">Rest of Categories</a><ul class="menu">';
// 		// for ($i=4; $i < $count ; $i++) { 
// 		// 	$cats .= '<li><a href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . $categories[$i]->name . '</a></li>';
// 		// }
// 		$cats .= findCats($categories,4,$count);
// 		$cats .= '</li></ul>';
// 	} else {
// 		// for ($i=0; $i<4 ; $i++) { 
// 		// 	$cats .= '<li><a href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . $categories[$i]->name . '</a></li>';
// 		// }
// 		$cats .= findCats($categories,4);		
// 	}
// 	$cats .= '</ul></div>';
// 	$cats .= '<ul class="dropdown menu" data-dropdown-menu data-responsive-toggle="category-menu" data-hide-for="medium">';
// 	$cats .= findCats($categories,$count);
// 	$cats .= '</ul>'
// 	return $cats;
// }

