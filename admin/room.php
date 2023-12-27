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
					<div class = "alert alert-info">Transaction / Room</div>
						<a class = "btn btn-success" href = "add_room.php"> Add Room</a>
						<br />
						<br />
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>Room_id</th>
									<th>Room Type</th>
									<th>Facilities</th>
									<th>Features</th>
									<th>Guest</th>
									<th>Price</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</thead>
						<tbody>
							<?php
								$query = $conn->query("SELECT * FROM `room`") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
							?>	
								<tr>
									<td><?php echo $fetch['room_id']?></td>
									<td><?php echo $fetch['room_type']?></td>
									<td><?php echo $fetch['facilities']?></td>
									<td><?php echo $fetch['features']?></td>
									<td><?php echo $fetch['guest']?></td>
									<td><?php echo $fetch['price']?></td>
									<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
									<td><center><a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_room.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
								</tr>
								<?php
								}
								?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
<?php require('inc/script.php'); ?>	

<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</html>