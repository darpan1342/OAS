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
session_start();
$d=$_SESSION['amm'];
if(isset($_POST['r']))
{

$sql = "UPDATE teacher SET total= total+1 WHERE cccode='$d'";

if ($conn->query($sql) === TRUE) {
    //
}
}
$sql = "SELECT username,id FROM student WHERE cccode='$d'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	 while($row = $result->fetch_assoc()) {
        if(isset($_POST['abc'.$row["id"]]))
		{
			$sq="UPDATE student SET attend= attend+1 WHERE cccode='$d' AND username='$row[username]'";
			if ($conn->query($sq) === TRUE){
				header('Location:teacher.php');
			}
		}
	 }
} 

$conn->close();
?>