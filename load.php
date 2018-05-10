<html>
<head>
<link rel="stylesheet" media="screen" href="css/free1.css">
<link rel="shortcut icon" href="media/logo@2x.png">
  <title>oas</title>
</head>
<body>
<div class="fuk"> 
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
$_SESSION['amm']=$d;
$sql = "SELECT username,id FROM student WHERE cccode='$d'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	 echo "<form action='save.php' method='post'><table><tr><th>Name</th><th>Student Id</th><th>Present/Absent</th></tr>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["id"]. "</td><td><input type='checkbox' name='abc".$row["id"]."'></td></tr>";
	 }
	echo"</table>";
}
$conn->close();
?>

<button name="r">Save
</button>
</form>
</div>
</body>