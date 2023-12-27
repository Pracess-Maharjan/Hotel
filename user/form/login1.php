
<?php
$name = $_POST['name'];
$password = $_POST['password'];

$Conn = mysqli_connect('localhost', 'root', '', 'hotel');
$result = mysqli_query($Conn, "SELECT * FROM `user` WHERE (name = '$name' OR email = '$email') AND password = '$password'");

session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user'] = $name;
    echo"
    <script>
    alert('Successfullu login');
    window.location.href= '../index.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('incorrect username/password');
    window.location.href= 'http://localhost/hotel/index.php';
    </script>
    ";
}

?>
