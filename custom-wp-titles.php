<?php
/*
Plugin Name: Custom WordPress Titles
Plugin URI: http://www.vanpattenmedia.com.com/
Description: Easy, quick, and dirty page titles for WordPress
Author: Van Patten Media
Version: 1.0
Author URI: http://www.vanpattenmedia.com/
*/

function vpm_custom_title() {
	$separator = ' - ';

	// Check for a slogan, and make sure it's not set to the default
	if ( (get_bloginfo('description') != 'Just another WordPress site') ) {
		$theslogan = ': ' . get_bloginfo('description');
	} else { $theslogan = ''; }

	// Some title conditionals
	if ( is_front_page() ) {
		$thetitle = get_bloginfo('name');
	} elseif ( is_page() ) {
		$thetitle = get_the_title() . $separator . get_bloginfo('name');
	} elseif ( is_single() ) {
		$thetitle = get_the_title() . $separator . get_bloginfo('name');
	} elseif ( is_archive() ) {
		$thetitle = post_type_archive_title('', false) . $separator . get_bloginfo('name');;
	} elseif ( is_home() ) {
		$thetitle = 'Blog' . $separator . get_bloginfo('name');
	} else {
		$thetitle = get_bloginfo('name');
	}

	// For SEO, we check if it's less than 70 before we tack on your slogan.
	// (change if you dare...)
	if ( ( strlen($theslogan) + strlen($thetitle) ) <= 70 ) {
		return $thetitle . $theslogan;
	} else {
		return $thetitle;
	}
}
add_filter( 'wp_title', 'vpm_custom_title', 20 );
