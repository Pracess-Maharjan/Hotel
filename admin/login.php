<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin_user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <script>
    window.location.href= 'dashboard.php';
    </script>";
} else {
    echo "
    <script>
    alert('incorrect username/password');
    window.location.href= 'index.php';
    </script>";
}

$conn->close();
?>