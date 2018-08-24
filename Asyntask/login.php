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
	$data = array();

	$sql = "SELECT * FROM users WHERE id = '$id'";

	$result = $con->query($sql);

	if($result->num_rows > 0){
		while($row = $result -> fetch_assoc()){
			if($row["pw"] == $pw){
				$staus = "success";
				array_push($data,
					array(
						'status'=>"success",
						'id'=>$row["id"],
						'pw'=>$row["pw"],
						'name'=>$row["name"]
					));
			}
		}
	}else{
		echo "failed";
	}

	$json = json_encode(array("testing"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
	echo $json;
	$con->close();
?>
