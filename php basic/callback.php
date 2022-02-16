<?php 
	// function my_callback($item){
	// 	return strlen($item);
	// }
	// $string = ['apple','orange','mango','banana'];
	// $length = array_map('my_callback',$string);
	// print_r($length);

	function exclaim($str){
		return $str.'!';
	}
	function ask($str){
		return $str.'?';
	}
	function print_formatted($str,$format){
		echo $format($str);
	}
	print_formatted('Hello world','exclaim');
	echo '<br>';
	print_formatted('Hello world','ask');
 ?>