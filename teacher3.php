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
SESSION_START();
$t=$_SESSION["nam"];
$p=$_POST['te'];
$sql = "UPDATE login SET password='$p' WHERE username='$t'";
if ($conn->query($sql) === TRUE) {
    header('Location:first.php');
} else {
	header('Location:teacher.php');
    echo "Error updating password: " . $conn->error;
}

$conn->close();
?>