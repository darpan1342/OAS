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
SESSION_START();
	$new=$_SESSION["na"];
$sql = "DELETE FROM student WHERE cccode='$d' AND username='$new'";
if (mysqli_query($conn, $sql)){
    header('Location:student.php');
} else {
     echo "Error: wrong class code";
	 header('Location:student.php');
}
$conn->close();
?>