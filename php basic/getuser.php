<?php
	$q=intval($_GET['q']);
	$con=mysqli_connect("localhost","root","","mydb");

	//mysql_select_db($con,"ajax_demo");
	$sql="SELECT * FROM myguests WHERE id='".$q."'";

	$result=$con->query($sql);

	echo "<table><tr><th>Firstname</th><th>Lastname</th></tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row["firstname"]."</td>";
		echo "<td>".$row["lastname"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
  ?>