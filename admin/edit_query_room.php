<?php
	require('inc/connect.php');
	if(ISSET($_POST['edit_room'])){
		$room_type = $_POST['room_type'];
		$facilities = $_POST['facilities'];
		$features = $_POST['features'];
		$guest = $_POST['guest'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `room` SET `room_type` = '$room_type', `facilities` = '$facilities', `features` = '$features', `guest` = '$guest',`price` = '$price', `photo` = '$photo_name' WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
		header("location:room.php");
	}
?>