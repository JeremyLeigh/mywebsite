<?php
	require_once('phpscripts/init.php');
	//confirm_logged_in();
	ini_set('display_errors',1);
	error_reporting(E_ALL);


$id = $_SESSION['users_id'];
//echo $id;
$popForm = getUser($id);
//echo $popForm;
if(isset($_POST['submit'])) {
	//echo "clicked submit";
	$fname= trim($_POST['fname']);
	$lname= trim($_POST['lname']);
	$username= trim($_POST['username']);
	$password= trim($_POST['password']);
    $result = editUser($id, $fname, $lname, $username, $password);
	$message = $result;
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/foundation.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
		<div class="divWrap small-10 large-6 small-centered large-centered">
	<h1>Edit User</h1>
	<p>If this is your first login on this account please add a new password.<p>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">
		<label>First Name:</label>
		<input name="fname" type="text" value="<?php echo $popForm['user_fname']; ?>">
		<br><br>
		<label>Last Name:</label>
		<input name="lname" type="text" value="<?php echo  $popForm['user_lname'] ?>">
		<br><br>
		<label>Username:</label>
		<input name="username" type="text" value="<?php echo $popForm['user_name']?>">
		<br><br>
		<label>Password:</label>
		<input name="password" type="text" value="<?php echo  $popForm['user_pass']?>">
		<br><br>
		<input class=" btnStyle" id="subBtn3" type="submit" name="submit" value="Edit User">
	</form>
	<br><br>
	<a href="admin_index.php">Back to Admin Panel</a>
</div>
</body>
</html>
