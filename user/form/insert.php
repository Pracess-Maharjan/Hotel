
<?php
$Conn = mysqli_connect('localhost', 'root', '', 'hotel');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number=$_POST['number'];
    $password = $_POST['password'];
    
                $Dup_Email = mysqli_query($Conn,"SELECT * FROM `user` WHERE email = '$email' " );
                $Dup_UserName = mysqli_query($Conn,"SELECT * FROM `user` WHERE name = '$name' " );
    if(mysqli_num_rows($Dup_Email)){
        echo"
        <script>
        alert('This email is already taken');
        window.location.href= 'register.php'
        </script>
        ";
    }

    if(mysqli_num_rows($Dup_UserName)){
        echo"
        <script>
        alert('This user name is already taken');
        window.location.href= 'register.php'
        </script>
        ";
    }
    else{
        mysqli_query($Conn, "INSERT INTO `user`( `name`, `email`, `number`, `password`) 
                VALUES ('$name','$email','$number','$password')");
                echo"
                <script>
                alert('Register successfully');
                window.location.href= 'login.php';
                </script>
                ";
    }
}

?>