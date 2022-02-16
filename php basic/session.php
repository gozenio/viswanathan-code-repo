<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		session setup test
 	</title>
 </head>
 <body>
 	<?php 
 		$_SESSION['favcolor']='Red';
 		$_SESSION['favanimal']='dog';
 		echo 'session variable are set';
 		session_destroy();

 	?>
 </body>
 </html>