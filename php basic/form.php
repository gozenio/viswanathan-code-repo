<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name=$_POST['fname'];
		if(empty($name)){
			echo "name is empty";
		}
		else{
			echo $name.date("y/m/d");
		}
	}
 ?>