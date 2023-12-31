<!DOCTYPE html>
<?php
	include('inc/connect.php');
?>
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
				<div class = "alert alert-info">Fill up form</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					<div class = "form-inline" style = "float:left;">
						<label>Firstname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middlename</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['middlename']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Lastname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<div class = "form-inline" style = "float:left;">
						<label>Room Type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "20" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Room No</label>
						<br />
						<input type = "number" min = "0" max = "999" name = "room_no" class = "form-control" required = "required"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Days</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Extra Bed</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "extra_bed" class = "form-control"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label style = "color:#ff0000;">*Extra Bed cost 800</label>
					</div>
					<br style = "clear:both;"/>
					<br />
					<button name = "add_form" class = "btn btn-primary"><i class = "glyphicon glyphicon-save"></i> Submit</button>
				</form>
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
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>