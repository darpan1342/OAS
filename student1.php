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
$u=$_POST['e'];
SESSION_START();
$t=$_SESSION["na"];
// sql to create table
$sql= "INSERT INTO student(username,cccode) VALUES ('$t','$u')";

if ($conn->query($sql) === TRUE) {
	header('Location:student.php');
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 