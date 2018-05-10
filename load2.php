<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" media="screen" href="css/free.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
$d=$_POST['et'];
$e=$_SESSION['na'];
$sql = "SELECT username,id,attend FROM student WHERE cccode='$d' AND username='$e' ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	echo "<table>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>NAME</td><td>" . $row["username"]. "</td></tr><tr><td>STUDENT ID</td><td>" . $row["id"]. "</td></tr><tr><td>ATTENDED</td><td>" . $row["attend"]."</td></tr>";
	 }
}
$sql = "SELECT total,username FROM teacher WHERE cccode='$d'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>TOTAL LECTURES</td><td>" . $row["total"]. "</td></tr><tr><td>TEACHER NAME</td><td>" . $row["username"]. "</td></tr>";
	 }
	 echo "</table>";
}
$conn->close();
?>
<div class="fuk"> 
<a href="student.php">
<i class="glyphicon glyphicon-arrow-left"></i>
</a>
</div>
</body>