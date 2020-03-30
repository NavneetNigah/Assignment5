<?php
// Navneet KAur 1053
	/*
		Plugin Name: Action_Plugin
        Version: 1.0
	*/

	function functionDisplay($number){
		// requesting API data
		$request = wp_remote_get( 'http://history.muffinlabs.com/date' ); 
		if( is_wp_error( $request ) ) { 
		  return false; 
	}

	// Saving output from json in variable
	$body = wp_remote_retrieve_body( $request ); 
	$data = json_decode( $body );  // Decoding json
		
		if( !empty( $data ) ) {	

		if (is_array($data) || is_object($data)) 
			{
				print_r($data->data->Events[1]->text); 
				print_r($data->data->Events[1]->year); 
			}
		}
	}
	// calling function
	add_action('wp_footer', 'functionDisplay');
?>