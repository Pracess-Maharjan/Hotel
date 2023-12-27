<!DOCTYPE html>
<?php require('inc/connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php  require('inc/links.php'); ?>
</head>
<body class="bg-light">
<?php  require('inc/header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 ms-auto overflow-hidden">
            <div class = "container-fluid">
	            <div class = "panel-body">
				<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Change Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `admin_user` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	            </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php require('inc/script.php'); ?>	
</html>
	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>