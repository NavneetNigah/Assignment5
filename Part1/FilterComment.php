<?php
// Navneet Kaur 1053
/*
Plugin Name: FilterComment
*/
function filter_Function ($str) {
	// Array of inputs to filter
	$filter = array(
		'Bad' => '#$%', 
		'Weak' => '<p>Blocked</p>', 
		'Low' => '<p> Not allowed</p>' 
	);

	$str = str_replace(array_keys($filter), $filter, $str; 
	  return $str; 
	}

// Adding filter
add_filter ('pre_comment_content', 'filter_Function'); 
?>