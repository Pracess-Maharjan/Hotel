<?php
	require('inc/connect.php');
	if(ISSET($_POST['edit_account'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->mysql_query("UPDATE `admin_user` SET `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		header("location:account.php");
	}	