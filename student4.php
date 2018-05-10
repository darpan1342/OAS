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
$t=$_SESSION["na"];
$p=$_POST['te'];
$sql = "UPDATE student SET id='$p' WHERE username='$t'";
if ($conn->query($sql) === TRUE) {
    header('Location:student.php');
} else {
	header('Location:student.php');
    echo "Error updating your Id: " . $conn->error;
}

$conn->close();
?>