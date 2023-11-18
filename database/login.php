<?php
include('C:\xampp\htdocs\Developer01\database\main_connection\database_connection.php');
$sql= "SELECT * FROM student_login";
if ($conn->query($sql) === TRUE) { 
	$result = 
} else { 
	echo "Error: " . $conn->error; 
} 
?>