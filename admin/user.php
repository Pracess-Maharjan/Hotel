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
				<div class = "alert alert-info">Accounts</div>
				<a class = "btn btn-success" href = "add_account.php"><i class = "glyphicon glyphicon-plus"></i> Create New Account</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Sn</th>
							<th>Name</th>
							<th>Email</th>
							<th>Number</th>
                            <th>Password</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `user` ") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
                            <td><?php echo $fetch['sn']?></td>
                            <td><?php echo $fetch['name']?></td>
                            <td><?php echo $fetch['email']?></td>
							<td><?php echo $fetch['number']?></td>
							<td><?php echo md5($fetch['password'])?></td>
							<td><center><a class = "btn btn-warning" href = "edit_account.php?sn=<?php echo $fetch['sn']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_account.php?sn=<?php echo $fetch['sn']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
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
        </div>
    </div>
</div>

</body>
<?php require('inc/script.php'); ?>	
</html>