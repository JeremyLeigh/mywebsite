<?php
	session_start();
	function confirm_logged_in(){
		if(!isset($_SESSION['users_id'])){
			redirect_to('admin_login.php');
		}
	}
	function logged_out(){
		session_destroy();
		redirect_to('../admin_login.php');
	}
?>
