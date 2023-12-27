
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<?php  require('inc/links.php'); ?>
		<style>
        .custom-bg{
             background-color: aqua;
            }
        .custom-bg:hover{
             background-color: aquamarine;
            }

			div.login-form{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 400px;
            }
    </style>
	</head>
<body calss="bg-light">
    <div class=" login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="login.php" method="POST">
        <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
        <div class="mb-3">
            <label for="username" >Username:</label>
            <input type="text" id="username" name="username" class="form-control shadow-none text-center" required>
        </div>
         <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control shadow-none text-center" required>
         </div>
            <button type="submit" class="btn text-white custom-bg shadow-none">Login</button>
        </form>
    </div>
</body>
</html>

<

<?php require('inc/script.php'); ?>	
</html>