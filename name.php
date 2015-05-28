<?php
	//echo "Hello Ajax";
	// if the field is set and not empty
	if (isset($_POST['name']) === true && empty($_POST['name']) === false) {
		require 'connect.php';
/*
		$query = mysql_query(" SELECT 'users'.'Firstname' FROM 'users' WHERE 'users'.'Username' = '".mysql_real_escape_string(trim($_POST['name']))."' ");
		echo ((mysql_num_rows($query) !== 0 ) ? mysql_result($query, 0,'Firstname') : "Username not found");
	*/
		/*
		$sql = mysqli_query($conn, "SELECT * FROM users");
		 while($row = mysqli_fetch_array($sql)){
      	echo $row['Firstname'];*/

	$username = $_POST['name'];
	//$password = $_POST['Password'];

	$name = $database->getRow('users', 'Username', $username);

	echo "Your name is: ".$name['Firstname'];
/*
      	$sql = "SELECT Username FROM users";
		$result = $conn->query($sql);

		
		 // output data of each row
		    
		echo "id: " . $row["Username"];

		$conn->close();
				*/
	}
?>