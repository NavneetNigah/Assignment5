<?php
// Navneet Kaur 1053
/*
 Plugin Name: CodePromo 
 Version: 1.0
*/
add_shortcode('code', 'promotion');	

function promotion()	
{
  $post= strtotime(get_the_date()); 
 $present= time(); 
 $interval = $present - $post; // calculation the difference between current time and post time


if($interval > 152600) { 
 return '<span>Error: Expired code</span>';  
 } 
 else 
 	{
    	return 'PROMONUMBER';
	}
}
?>
