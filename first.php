<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>oas</title>
  <link rel="shortcut icon" href="media/logo@2x.png">
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

  <div class="ved">
    <video id="u" width="100%" height="100%" loop autoplay style="position:relative;top=0;left=0;">
 <source src="media/9.mp4" type="video/mp4">
</video>
    <div class="secondtext">
      <button id="da" ><strong>Sign up</strong></button>
      <button id="er" ><strong>Sign in</strong></button>
    </div>
    <div class="thirdtext">
      <h2>Easy Remote Access</h2>
      <p>A cloud-based attendance management system will make all the student attendance details available at one place that can be accessed by the students from anywhere. This will reduce their dependency on teacher department employees for information and
        will lend more transparency to the entire system.
      </p>
    </div>
    <div class="firsttext">
      <h1>online Attendance System</h1>
    </div>
    <div class="container" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <div class="men">
      <a href=" " class="fa fa-facebook"></a>
      <a href="" class="fa fa-youtube"></a>
      <a href="" class="fa fa-instagram"></a>
    </div>
    <div class="for">
      <i class="fa fa-remove" id="r"></i>
      <form action="register.php" method="post">
        <input type="text" id="email1" name="email2" placeholder="Email-Id">
        <br><br>
        <input type="text" id="fname1" name="firstname" placeholder="Pick a Username">
        <br><br>
        <input type="text" id="dname2" name="Designation" placeholder="Teacher/Student">
        <br><br>
        <input type="password" id="pass" name="pass1" placeholder="Password">
        <br><br>
        <input type="submit" value="Submit" onclick="signUp()">
      </form>
    </div>
    <div class="usr">
      <i class="fa fa-remove" id="e"></i>
      <form action="log.php" method="post">
        <input type="text" id="user1" name="first1" placeholder="Username">
        <br><br>
        <input type="password" id="pass" name="pass2" placeholder="Password">
        <br><br>
        <input type="submit" value="Submit" onclick="signIn()">
        <br><br>
        <label>&nbsp;&nbsp;&nbsp;<a href="">Forgot password? Click Here</a><label>
        </form>
</div>
</div>
    <script src="js/main.js">
</script>
</body>
</html>
