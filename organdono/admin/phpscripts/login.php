<?php

	function logIn($username, $password, $ip){
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link,$password);//cleans string, removes slashes quotes ext.
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		//echo $loginString;
		$user_set = mysqli_query($link, $loginString);
		if(mysqli_num_rows($user_set)){
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			//sesion variable = temparary grobal variable
			$_SESSION['users_id'] = $id;
			$_SESSION['users_name'] = $found_user['user_fname'];
			$_SESSION['users_first'] = $found_user['user_first'];
			if(mysqli_query($link, $loginString)){
				$updateString = "UPDATE tbl_user SET user_ip = '{$ip}' WHERE user_id={$id}";
				$updateQuery =mysqli_query($link, $updateString);

				if($_SESSION['users_first'] == ""){
						redirect_to("admin_index.php");
					}else{
						redirect_to("admin_edituser.php");
					}
			}

		} else{
			$message = "Your Username or Password was incorrect.";
			return $message;
		}
		mysqli_close($link);
	}



?>
