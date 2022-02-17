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
	// $sql="INSERT INTO myGuests(firstname,lastname,email)VALUES('VISWANATHAN','R','viswasree20@gamil.com');";
	// $sql.="INSERT INTO myGuests(firstname,lastname,email)VALUES('vicky','m','vick26@gamil.com');";
	// $sql.="INSERT INTO myGuests(firstname,lastname,email)VALUES('jegan','p','jegan12@gamil.com');";
	// if($db->multi_query($sql)===TRUE){
	// 	//$last_id=$db->insert_id;
	//  	echo "inserted data";
	// }else{
	//  	echo "error :".$db.error();
	//}

		//prepare
// 	$sql=$db->prepare('INSERT INTO myguests(firstname,lastname,email)VALUES(?,?,?)');
// 	$sql->bind_param("sss",$firstname,$lastname,$email);

// 	//set parameter
// 	$firstname="selva";
// 	$lastname="Ganesh";
// 	$email="aswin09@gmail.com";
// 	$sql->execute();
// 	$sql->close();
// 	$db->close();

		//select data
	// $sql="SELECT id,firstname,lastname,email FROM myguests";
	// $result=$db->query($sql);
	// if($result->num_rows>0){
	// 	while($row=$result->fetch_assoc()){
	// 		echo"id: ".$row["id"]."-name: ".$row["firstname"]."<br>";
	// 	}
	// } else{
	// 	echo "0 result";
	// }

		//filter with "where";
	// $sql="SELECT id,firstname,lastname FROM myguests WHERE lastname='ganesh'";
	// $result=$db->query($sql);
	// if($result->num_rows>0){
	// 	while($row=$result->fetch_assoc()){
	// 		echo"id: ".$row["id"]."-name: ".$row["firstname"]."<br>";	
	// 	}
	// }else{
	// 	echo"result 0";
	// }
	// $db->close();

		//order
	// $sql="SELECT id,firstname,lastname FROM myguests ORDER BY firstname";
	// $result=$db->query($sql);
	// if($result->num_rows>0){
	// 	while($row=$result->fetch_assoc()){
	// 		echo"id: ".$row["id"]."-name: ".$row["firstname"]."<br>";
	// 	}
	// }else{
	// 	echo"result 0";
	// }

		//delete
	// $sql="DELETE FROM myguests WHERE lastname='R'";
	// if($db->query($sql)===TRUE){
	// 	echo"record delete";
	// }
	// else{
	// 	echo "error";
	// }

	// $db->close();

		//update
	// $sql ="UPDATE myguests SET lastname='ganeshan'WHERE firstname='selva'";
	// if($db->query($sql)===true){
	// 	echo "data updated!";
	// }
	// else{
	// 	echo "error";
	// }

	$sql="SELECT * FROM myguests LIMIT 1,2";
	$result=$db->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo"id: ".$row["id"]."-name: ".$row["firstname"]."<br>";
		}
	}else{
		echo"result 0";
	}
	$db->close();
 ?>
