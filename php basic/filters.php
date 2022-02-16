<?php 
	//----sanitize a string---
	// $str='<h1>hello world</h1>';
	// $newstr=filter_var($str,FILTER_SANITIZE_STRING);
	// echo $newstr;
	
	//----vidate a string---
	// $int=100;
	// if(!filter_var($int,FILTER_VALIDATE_INT)===false){
	// 	echo 'integer is valid';
	// }else{
	// 	echo 'integer is the not valid';
	// }

	//----validate an ip address;---
	// $ip='127.0.0.1';
	// if(!filter_var($ip,FILTER_VALIDATE_IP)===false){
	// 	echo 'ip is a valid ip address';
	// }else{
	// 	echo 'ip is a invalid ip address';
	// }

	//----validate an integer with a range----
	// $int=122;
	// $min=1;
	// $max=200;

	// if(filter_var($int,FILTER_VALIDATE_INT,array('options' => array('min_range'=>$min,'max_range'=>$max)))===false){
	// 	echo 'value is not in range';
	// }else{
	// 	echo 'value in range';
	// }

	//---- remove the char with ascii value-----
	$str='<h!>hello world£</h1>';
	$newstr=filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	echo $newstr;
?>