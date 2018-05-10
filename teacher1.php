<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$f=$_POST['m'];
$u=$_POST['e'];
SESSION_START();
$t=$_SESSION["nam"];
// sql to create table
$sql= "INSERT INTO teacher(username,ccname,cccode,total) VALUES ('$t','$f','$u',0)";

if ($conn->query($sql) === TRUE) {
	header('Location:teacher.php');
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>