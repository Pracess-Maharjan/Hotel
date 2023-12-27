<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RESERVATION SYSTEM</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
      .custom-bg{
         background-color: aqua;
      }
      .custom-bg:hover{
        background-color: aquamarine;
      }
	  .card{
		height:300px;
	  }

    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php');?>
				<h3>Rooms</h3>
				<?php
					include('inc/connect.php');
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
	<div class="col-lg-9 px-4" id="card" >
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5">
             <img src ="photo/<?php echo $fetch['photo']?>">
            </div>
            <div class="col-md-5 px-3">
             <h5 class="mb-3"><?php echo $fetch['room_type']?></h5>
             <div class="features mb-3">
              <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
				<?php echo $fetch['features']?>
                </span>
                
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
				<?php echo $fetch['facilities']?>
                </span>
                
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
				<?php echo $fetch['guest']?>
                </span>
                
              </div>

            </div>
            <div class="col-md-2 text-center">
            <h6 class="mb-4"><?php echo "Price: Rs. ".$fetch['price'].".00"?></h6>
            <a href="add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class="btn btn-sm text-dark custom-bg shadow-none mb-2">Book Now</a>
            </div>
        </div>
      </div>
	  <?php
		}
	?>


    </div>

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>