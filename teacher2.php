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
$d=$_POST['te'];
$sql = "DELETE FROM teacher WHERE cccode='$d'";
if (mysqli_query($conn, $sql)){
    header('Location:teacher.php');
} else {
     echo "Error: wrong class code";
	 header('Location:teacher.php');
}
$conn->close();
?>