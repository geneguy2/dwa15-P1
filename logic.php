<?php
/*
Create arrays for the words, and symbols
*/
$words = array("one", "weather", "two", "burn", "twice", "phone", "mints", "cap", "remote",);
$symbols = array("#", "@", "*", "!", "$", "&");
$numbers = array("1", "2", "3", "4", "5");
$password  = array();
$length = $_POST['length'];


if ( isset( $_POST['Submit'] ) ) {

	if (isset( $_POST['length'] )) {
	$password  = array($words);
	shuffle ($password);
	}

	$password  = array_merge($words, $symbols, $numbers);

	
	if (isset( $_POST['symbols'] )) {
	array_merge($words, $symbols);
	$password  = array_merge($words, $symbols);
	shuffle ($password);
	}

	if (isset( $_POST['numbers'] )) {
	array_merge($words, $symbols, $numbers);
	$password  = array_merge($words, $symbols, $numbers);
	shuffle ($password);
	}


}

//Print the password array 

for ($i = 0; $i < $length; $i++) {
	print $password[$i] . ' ';

}




 
