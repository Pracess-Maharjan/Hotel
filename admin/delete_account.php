<?php
	require('inc/connect.php');
	$conn->query("DELETE FROM `admin_user` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	header("location: account.php");