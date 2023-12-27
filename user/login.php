<?php
	require('inc/connect.php');
	if(ISSET($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$conn->query("INSERT INTO `contact` (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')") or die(mysqli_error());
		header("location:contact.php");
	}
if(ISSET($_POST['message'])){
    echo"
        <script>
        alert('Message successfullu sent');
        window.location.href= 'contact.php';
        </script>";
    } else {
        echo "
        <script>
        alert('incorrect username/password');
        window.location.href= 'contact.php';
        </script>";
    }
?>