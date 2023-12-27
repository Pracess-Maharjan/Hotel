
<?php
echo $room_id = $_GET['room_id'];
include('inc/connect.php');
mysqli_query($conn, "DELETE FROM `room` WHERE room_id=$room_id");
header("location:room.php");

?>