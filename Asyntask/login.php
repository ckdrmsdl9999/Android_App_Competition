<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "tifkdgo1";
	$dbname = "Android";

	$con = new mysqli($servername, $username, $password, $dbname);

	if($con->connect_error){
		die("Connection failed" . $con->connect_error);
	}

	$id = $_POST['id'];
	$pw = $_POST['pw'];
	

	$sql = "SELECT pw FROM users WHERE id = '$id'";

	$result = $con->query($sql);

	if($result->num_rows > 0){
		$row = $result -> fetch_assoc();
			if($row["pw"] == $pw){
				echo "success";
			}
	}else{
		echo "failed";
	}


	$con->close();
?>
