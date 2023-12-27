<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
<body>
<body calss="bg-light">
<div class=" login-form text-center rounded bg-white shadow overflow-hidden">
            <form action="insert.php" method="POST" >
            <h4 class="bg-dark text-white py-3">REGISTER </h4>
                <div class="mb-3">
                    <label for="">UserName:</label>
                    <input type="text" name="name" class="form-control shadow-none text-center" required>
                </div>
                <div class="mb-3">
                    <label for="">UserEmail:</label>
                    <input type="email" name="email" class="form-control shadow-none text-center" required>
                </div>
                <div class="mb-3">
                    <label for="">UserNumber:</label>
                    <input type="number" name="number" class="form-control shadow-none text-center" required>
                </div>
                <div class="mb-3">
                    <label for="">UserPassword:</label>
                    <input type="password" name="password" class="form-control shadow-none text-center" required>
                </div>
                <div class="mb-3">
                    <button name="submit" class ="w-100 bg-warning fs-4 text-white">REGISTER</button>

                </div>
                <div class="mb-3">
                <button class ="w-100 bg-danger fs-4 text-white"> <a href="login.php" class="text-decoration-none text-white">ALREADY ACCOUNT</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>