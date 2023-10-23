<?php
 function editUser($id, $fname, $lname, $username, $password){
	 include('connect.php');
	 $updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_pass='{$password}', user_first='' WHERE user_id={$id}";
	 $updatequery = mysqli_query($link, $updatestring);
	  if($updatequery)
	  {
		  redirect_to("admin_index.php");
		  }else {
			$message= "there was an error editing this user";
			return $message;
		}
		mysqli_close($link);
 }
function getUser($id)
{
	include('connect.php');
	$userstring =  "SELECT * FROM tbl_user WHERE user_id={$id}";
	$userquery = mysqli_query($link, $userstring);
	if($userquery){
			//fetch
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		} else {
			$message= "there was an error editing this user";
			return $message;
		}
mysqli_close($link);
}
	function createUser($fname, $lname, $username, $password, $level){
		require_once('connect.php');
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}','{$lname}','{$username}','{$password}','{$level}','{$ip}','1','default.png')";
		echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if($userquery){
			  redirect_to("admin_index.php");
		} else {
			$message= "there was an error setting up this user";
			return $message;
		}
		mysqli_close($link);
	}
?>
