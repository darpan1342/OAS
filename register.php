<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";
$name=$_POST['firstname'];
$email=$_POST['email2'];
$designation=$_POST['Designation'];
$pass=$_POST['pass1'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO login(username,password,mail,desig) VALUES ('$name', '$pass','$email','$designation')";
if ($conn->query($sql) === TRUE) {
    header('Location:first.php');
} else {
     echo "Error: account already exists";
	 header('Location:first.php');
}
$conn->close();
?>