
<?phprequire('inc/connect.php');?>
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
	            <div class = "panel-body">
				<div class = "alert alert-info"> Add Room</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Single">Single</option>
								<option value = "Double">Double</option>
								<option value = "King">King</option>
								<option value = "Super Deluxe">Super Deluxe</option>
								<option value = "Executive Suite">Executive Suite</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Facilities </label>
							<input type = "text" class = "form-control" name = "facilities" />
						</div>
						<div class = "form-group">
							<label>Features </label>
							<input type = "text" class = "form-control" name = "features" />
						</div>
						<div class = "form-group">
							<label>Guest </label>
							<input type = "text" class = "form-control" name = "guest" />
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl"> [Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_room" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require('add_query_room.php');?>
				</div>
	            </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php require('inc/script.php'); ?>	

</html>