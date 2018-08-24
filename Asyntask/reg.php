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

	$sql = "SELECT id FROM users WHERE id = '$id'";//중복체크
	$result = $con->query($sql);
	if($result->num_rows > 0){
		echo "exist";
	}
	else{
		$sql = "INSERT INTO user (id, pw, name) VALUES ('$id', '$pw', '$name')";

		if($con->query($sql) == TRUE){
			echo "success";
		}else{
			echo "error";
		}
	}

	$con->close();
?>
