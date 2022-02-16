<?php 
	$user="root";
	$pass="";
	$db=new mysqli("localhost",$user,$pass,'mydb') or die('connection failed');
	//echo 'connected successully';
		//create DB;
	// $sql="CREATE DATABASE mydb";
	// if($db->query($sql)===TRUE){
	// 	echo 'database created successfully';
	// }
	// else{
	// 	echo 'error creating database';
	// }
	// $db->close();

		//create mysql table;
	// $sql="CREATE TABLE myGuests(id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(30),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
	// if($db->query($sql)===TRUE){
	// 	echo "table created";
	// }else{
	// 	echo "error :".$db.error();
	// }


		//insert data;
	// $sql="INSERT INTO myGuests(firstname,lastname,email)VALUES('VISWANATHAN','R','viswasree20@gamil.com')";
	// if($db->query($sql)===TRUE){
	// 	$last_id=$db->insert_id;
	//  	echo "inserted data";
	// }else{
	//  	echo "error :".$db.error();
	// }

		//multi_insert data;
	$sql="INSERT INTO myGuests(firstname,lastname,email)VALUES('VISWANATHAN','R','viswasree20@gamil.com');";
	$sql.="INSERT INTO myGuests(firstname,lastname,email)VALUES('vicky','m','vick26@gamil.com');";
	$sql.="INSERT INTO myGuests(firstname,lastname,email)VALUES('jegan','p','jegan12@gamil.com');";
	if($db->multi_query($sql)===TRUE){
		//$last_id=$db->insert_id;
	 	echo "inserted data";
	}else{
	 	echo "error :".$db.error();
	}
?>