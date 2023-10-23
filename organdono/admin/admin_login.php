<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	$ip = $_SERVER["REMOTE_ADDR"];
	require_once("phpscripts/init.php");
	require_once("phpscripts/functions.php");

  if(isset($_POST['next'])) {
	$username = trim($_POST['username']);
}
  if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username != "" && $password != "") {
			$result = logIn ($username, $password, $ip);
			$message = $result;
			//echo "Login Creds Working.";
			}else{
				$message = "Your Username or Password was incorrect.";

				}
		}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/foundation.css" rel="stylesheet" type="text/css" media="screen">
<body>

	<div id="Container">
	<!--Background Image-->
	<div id="bg">
		<img src="images/background.svg" alt="Background Image">
  </div>

	<!--Login Form-->
	<section class="row">
		<h2 class="hidden">Content Management System Login</h2>
		<div id="login">
		<div id="pictureDiv" class="small-6 medium-4 large-3 large-centered medium-centered small-centered columns">


	  <img id="profilePic" src="images/default.png" alt="Profile Picture">	<!--replace with database post.-->
		</div>

		<div id="loginDiv" class="small-10 medium-6 large-5 large-centered medium-centered small-centered columns">
			<?php if(!empty($message)){echo $message;} ?>
		<form id="myForm" action="admin_login.php" method="post">
				<input id="Uname" class="textField" type="text" placeholder="Username" name="username" value="">
				<input id="Passw" class="textField" type="hidden" placeholder="Password" name="password" value="">
		</div>
			<div id="nextDiv" class="small-3 medium-3 large-3 large-centered medium-centered small-centered columns">
				<!--<input id="nextBtn" class="btnStyle" type="submit" name="next" value="Next">-->
				<div id="nextBtn" class="btnStyle">Next</div>
				<input id="subBtn" class="btnStyle hidden" type="submit" name="submit" value="Submit">
		</div>

   </form>
 		</div>
  </section>


</div>
<script src="js/foundation.js"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>
