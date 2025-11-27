<?php
$servername = "cwebjms30525.ipagemysql.com";
$username = "bavana";
$password = "bavana@123";
$dbname = "bavana";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


	// Database connection
/* 	$conn = new mysqli('localhost','root','','user');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email ID , Password, conform password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $email, $password, $repassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	} */
?>