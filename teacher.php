<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="media/logo@2x.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" media="screen" href="css/teacher.css">
<script src="js/teacher.js">
</script>
  <title>oas</title>
</head>
<body>
  <div class="container" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <div class="add" id="o">
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
$new=$_SESSION["nam"]; 
$sql = "SELECT ccname,cccode FROM teacher WHERE username='$new'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<button>" . $row["ccname"]. " " . $row["cccode"]. "</button>";
    }
} else {
}

$conn->close();
?>
  </div>
  <div class="men" >
    <h1><?php
	$new=$_SESSION["nam"];
	echo $new;
	?></h1><br>
      <button id="y">Create Class</button><br>
	  <button id="po">Load a class</button><br>
      <button id="kl">Change Password</button><br>
      <button id="lo">Delete class</button>
	  
  </div>
  <div class="f">
    <button>+</button>
  </div>
  <div class="over">
    <i class="fa fa-remove" id="r"></i><br>
    <form  action="teacher1.php" method="post">
    <input type="text" id="d" name="m" placeholder="class Name"><br>
    <input type="text" id="l" name="e" placeholder="class Code"><br>
    <input type="submit" id="k"value="Submit" onclick="function2()"><br>
  </form>
  </div>
  <div class="ver">
    <i class="fa fa-remove" id="ro"></i><br>
      <form  action="teacher2.php" method="post">
    <input type="text" id="le" name="te" placeholder="class Code"><br>
    <input type="submit" id="ko"value="Submit"><br>
  </form>
  </div>
  <div class="er">
    <i class="fa fa-remove" id="rp"></i><br>
      <form  action="teacher3.php" method="post">
	<input type="password" id="ie" name="te" placeholder="New Password"><br>
    <input type="submit" id="kp"value="Submit"><br>
  </form>
  </div>
  <div class="re">
    <i class="fa fa-remove" id="pr"></i><br>
      <form  action="load.php" method="post">
	<input type="text" id="ei" name="et" placeholder="Class code"><br>
    <input type="submit" id="pk"value="Submit"><br>
  </form>
  </div>
</body>
</html>
