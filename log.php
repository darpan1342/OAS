<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";
$name=$_POST['first1'];
$pass=$_POST['pass2'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
SESSION_START();
$sql = "SELECT desig FROM login WHERE username = '$name' AND  password = '$pass' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["desig"]=='Teacher')
	{
	    $_SESSION["nam"]=$name;
		header('Location:teacher.php');
	}
	else{
		 $_SESSION["na"]=$name;
		header('Location:student.php');
	}
    }
} else {
    echo "wrong id or password";
	header('Location:first.php');
}
$conn->close();
?>