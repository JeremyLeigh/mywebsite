<?php
	require_once('phpscripts/init.php');
	//confirm_logged_in();


//function for generating a password

//tutorial link: https://www.phpjabbers.com/generate-a-random-password-with-php-php70.html
	function passGenerator($length,$count,$characters) {
//the length which i have set to 8 under $my_password is the length of all passwords generated HRTime\PerformanceCounter
//the count i have set to 1 as i only need a single password in this case
//$charactes is where i can choose which types of characters are entered into the generator


	//this below defines these variables as either arrays or strings
	    $symbols = array();
	    $passwords = array();

	    $used_symbols = '';
	    $pass = '';


	    $symbols["lowercase"] = "abcdefghijklmnopqrstuvwxyz"; //created some variables that hold the letters and numbers the randomizer chooses from
	    $symbols["uppercase"] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $symbols["numbers"] = "1234567890";
			//replaced split() with updated explode()
	    $characters = explode(",",$characters);
			 //this gathers the values i have selected for my character types

	    foreach ($characters as $key=>$value) {
	        $used_symbols .= $symbols[$value]; //$used_symbols holds the value of the current string
	    }
	    $symbols_length = strlen($used_symbols) - 1; //strlen gives me the length of the string, subtract 1 for 0 value

	        $pass = '';
	        for ($i = 0; $i < $length; $i++) {
	            $n = rand(0, $symbols_length);
	            $pass .= $used_symbols[$n]; //finished creating the password
	        }
	        $passwords[] = $pass;


	    return $passwords;
	}

	$my_password = passGenerator(8,1,"lowercase,uppercase,numbers");
	$passwordS = serialize($my_password); //it was just giving my an array so i found the solution with the serialize() function which turns it into a string

$passwordS = str_replace('a:1:{i:0;s:8:"', "", $passwordS);// this bit is to remove some unwanted characters from the begining
$password = substr($passwordS, 0, strpos($passwordS, ";")-1);//this removes some characters from the end.
//This finally got me my 8 digit password which is stored under $password

	if(isset($_POST['submit'])) {
	//echo "clicked submit";
	$fname= trim($_POST['fname']);
	$lname= trim($_POST['lname']);
	$username= trim($_POST['username']);

	$level= $_POST['lvllist'];
	$email= trim($_POST['email']);
	if(empty($level)){
		//echo "level not selected";
		$message= "Please select a user level.";
	}else{
		//echo "Level selected";
		$result= createUser($fname, $lname, $username, $password, $level);
		$message = $result;
//$to      = '{"$email"}';
$to = $email;
$subject = '<br>Company Login Creds No-Reply<br>';
$messageE = "Welcome to the company web admin team. These are your credentials for accessing your online account via our CMS.<br> Your username is $username.<br> Your password is $password.<br> You can access the account login page by entering https//www.company/admin_login.php into the url.";
$headers = '<br><br>From: webmaster@company.com' . "\r\n" .phpversion();
//ive taken out the mail() function and echoed out my email so you could view it. I would also normally redirect the page back to the admin panel but the message wont show if i do that here.
//mail($to, $subject, $messageE, $headers);
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
	<section class="row center">
	<div class="divWrap small-10 large-6 small-centered large-centered">
	<h1>Create User</h1>
	<?php if(!empty($message1)){echo $message1;} ?>
	<form action="admin_createuser.php" method="post">
		<label>First Name:</label>
		<input name="fname" type="text" value="<?php if(!empty($fname)){echo $fname;} ?>">
		<br><br>
		<label>Last Name:</label>
		<input name="lname" type="text" value="<?php if(!empty($lname)){echo $lname;} ?>">
		<br><br>
		<label>Username:</label>
		<input name="username" type="text" value="<?php if(!empty($username)){echo $username;} ?>">
		<br><br>
		<select name="lvllist">
			<option value="0">Please select user level</option>
			<option value="2">Web admin</option>
			<option value="1">Web master</option>
		</select>
		<br><br>
		<label>Email:</label>
		<input name="email" type="text" value="<?php if(!empty($email)){echo $email;} ?>">
		<br><br>
		<input  class="btnStyle" id="subBtn3" type="submit" name="submit" value="Create User">
	</form>
	<br><br>
	<a href="admin_index.php">Back to Admin Panel</a>
</div>
</section>
</body>
</html>
