<?php include('inc/connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RESERVATION SYSTEM</title>
    <?php require('inc/links.php'); ?>
    <style>
      .custom-bg{
         background-color: aqua;
      }
      .custom-bg:hover{
        background-color: aquamarine;
      }

    </style>
</head>
<body class="bg-light">
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Please visit our Hotel for verification</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>
					<br />
					<center><a href = "reservation.php" class = "btn btn-success"><i class = "glphyicon glyphicon-check"></i> Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
	
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>