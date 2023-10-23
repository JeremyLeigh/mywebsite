<?php
	//for error reporting for mac
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	require_once('phpscripts/init.php');
	//confirm_logged_in();
	require_once('phpscripts/connect.php');
	$id = $_SESSION['users_id'];
  $string = "SELECT user_pic FROM tbl_user WHERE user_id={$id}";
	$getImage = mysqli_query($link, $string);

	$path = mysqli_fetch_assoc($getImage);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your Admin Panel</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/foundation.css" rel="stylesheet" type="text/css" media="screen">
<body>
	<div id="bg2">
		<?php


if($wlcmeMsge < "12") {
   echo "<img id='bgImage' src='images/morning.jpg' alt='Sunny Day Image'>";

	}else if ($wlcmeMsge >= "12" && $wlcmeMsge < "18") {
		    echo "<img id='bgImage' src='images/lunch.jpg' alt='Sunny Day Image'>";

	}else if	($wlcmeMsge >= "18") {
		    echo "<img id='bgImage' src='images/evening.jpeg' alt='Sunny Day Image'>";
		}

?>

	</div>
	<section>
	<h2 class="hidden">Profile</h2>
	<img id="profilePicThumb"alt="User Picture" src="<?php echo 'images/profiles/'.$path['user_pic'];?>"/>

	<a id="signOut" href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</section>

<section class="row">
	<h2 class="hidden">Greetings</h2>

	<div class="large-10 small-12 small-centered large-centered columns">
	<h1 id="greet">Welcome <?php echo $_SESSION['users_name'];?>, to your administration panel.</h1>
	<p id="greetP">
    <?php
    	date_default_timezone_set('America/New_York');
		?>

        <?php
		$wlcmeMsge = date('G');

		if($wlcmeMsge < "12") {
			echo "Hope you are having a good morning!";

			}else if ($wlcmeMsge >= "12" && $wlcmeMsge < "18") {
				echo "Would you look at the time, you're halfway there!";

			}else if	($wlcmeMsge >= "18") {
				echo "Have a great evening, see you tommorow!";
				}

    ?>
	</section>
	</p>
  	<section id="utilities" class="row fullWidth">
		<div class="large-12 small-12 columns">
		<ul>
		<li class="large-4 medium-4 small-4 columns"><a href="admin_createuser.php"><img src="images/icons/createuser.png" alt="Create User"><p>Create User</p></a></li>

		<li class="large-4 medium-4 small-4 columns"><a href="admin_edituser.php"><img src="images/icons/edituser.png" alt="Edit Account"><p>Edit Account</p></a></li>

		<li class="large-4 medium-4 small-4 columns"><a href="admin_makechanges.php"><img src="images/icons/edit.png" alt="Edit/Delete"><p>Edit/Delete</p></a></li>

		</ul>
	</div>
	  </section>
</body>
</html>
