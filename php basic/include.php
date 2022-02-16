<!DOCTYPE html>
<!-- cookie setup -->
<?php 
	$cookie_name='user';
	$cookie_value='viswanathan';
	setcookie($cookie_name,$cookie_value,time()+(86400),'/');
?>
<html>
<head>
	<title>test php</title>
</head>
<body>
	<form  method="post">
		<!-- <input type="text" name="fname"> -->
		<input type="file" name="fileupload">
		<input type="submit" >

	</form>

	<?php 
		//include "form.php";
		echo "<br>";
		//include 'filesystem.php';
		//include 'fileupload.php'
		if(isset($_COOKIE[$cookie_name])){
			echo'cookie_name'.$cookie_name.'is not';
		}else{
			echo $cookie_name;
		}
	?>
</body>
</html>