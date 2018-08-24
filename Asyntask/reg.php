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
	$name = $_POST['name'];


	$sql = "INSERT INTO user (id, pw, name) VALUES ('$id', '$pw', '$name')";

	if($con->query($sql) == TRUE){
		echo "success";
	}else{
		echo "error";
	}

	$con->close();
?>
