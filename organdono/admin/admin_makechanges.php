<?php
	ini_set('display_errors',1);
error_reporting(E_ALL);
//confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Page Content</title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
<br>

<br>
<h1>Select A Page To Edit</h1>
<br>
<section class="row center">
<div id="makechanges" class="divWrap small-10 large-6 small-centered large-centered">
	<a href="admin_index.php">Back to Admin Panel</a>
<ul>
	<h1>Home</h1>
	<li><a href="admin_editAll.php"><img src="images/homepageP.jpg" alt="homepage"></a></li>
		<h1>About</h1>
		<li><a href="admin_editAll2.php"><img src="images/aboutP.jpg" alt="homepage"></a></li>
			<h1>Story Of Hope</h1>
			<li><a href="admin_editAll4.php"><img src="images/storyP.jpg" alt="homepage"></a></li>
			<h1>Engage More</h1>
			<li><a href="admin_editAll3.php"><img src="images/engageP.jpg" alt="homepage"></a></li>
</ul>
</div>
</section>
</body>
</html>
