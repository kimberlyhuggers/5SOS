<?php
	if (!empty($_GET["data"])) {
		$servername 	= "localhost";
		$username 		= "root";
		$password 		= "root";
		$database 		= "ajax";
		
		$conn = new mysqli($servername, $username, $password, $database);
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "SELECT * FROM concert WHERE naam LIKE '".$_GET['data']."%' OR plaats LIKE '".$_GET['data']."%'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo $row["naam"] . ", " . $row["plaats"] . "<br>";
		    }
		} else {
		    echo "0 resultaten";
		}
		$conn->close();
	}
?>