<?php
// Navneet Kaur 1053
/*
Plugin Name: CountingNumber
Version: 1.0
*/
function printData($the_content)
{
	return "Post contains :".str_word_count($the_content)."Number of words";
}
// Calling the function
add_filter('the_content', 'printData');
?>