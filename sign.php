<?php
include_once("dbcon.php");
session_start();

$user_name = trim($_POST['name']);
$user_email = trim($_POST['email']);
$user_phone = trim($_POST['phone']);
$user_password = trim($_POST['pass']);
$user_type = trim($_POST['type']);

$sql2 = "SELECT * FROM myguests WHERE email = '$user_email'";
$result = $conn->query($sql2);
if (mysqli_num_rows($result) > 0)
{
  echo "User Already Exists. Please Login";
}
else{
		$sql = "INSERT INTO myguests (name, password,email,phone,type) VALUES ('$user_name', '$user_password', '$user_email','$user_phone', '$user_type')";
		if ($conn->query($sql) === TRUE) {
			$_SESSION['user_session'] = $user_name;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
 }
 ?>