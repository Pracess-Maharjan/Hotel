
<?php include('inc/connect.php');?>

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

    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php');?>

<!--carousel-->
<div class="container-fluid px-lg-4">
  <div class="swiper Swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="picture/carousel/1.png" class="w-100  d-block" />
      </div>
      <div class="swiper-slide">
        <img src="picture/carousel/2.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="picture/carousel/3.png" class="w-100 d-block" />
      </div>
      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      
    });
</script>

<!-- check availability form-->

<div class="container">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded"> 
      <h5>Check Booking Availability</h5>
      <form>
        <div class="row ">
          <div class="col-lg-3">
            <lable class="form-lable" style="font-weight: 500;" >Check-in</lable>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3">
            <lable class="form-lable" style="font-weight: 500;" >Check-out</lable>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3">
            <lable class="form-lable" style="font-weight: 500;" >Adults</lable>
            <select class="form-select shadow-none" >
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2">
            <lable class="form-lable" style="font-weight: 500;" >Children</lable>
            <select class="form-select shadow-none" >
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1">
           <button type="submit" class="btn shadow-none custom-bg">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Our Rooms-->
<h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin-auto">
        <img src="picture/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">NPR 800 pre night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 balconi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               2 sofa
            </span>
          </div>
          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Telivision
            </span>
          </div>
          <!-- Guests-->
          <div class="guests mb-4">
          <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Childrern
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light ">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="add_reserve.php" class="btn btn-sm text-white custom-bg shadow-none">Reserve</a>
            
          </div>
        </div>
      </div>
    </div>

    <!--room 2-->
    <div class="col-lg-4 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin-auto">
        <img src="picture/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">NPR 800 pre night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 balconi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               2 sofa
            </span>
          </div>
          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Telivision
            </span>
          </div>
          <div class="guests mb-4">
          <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Childrern
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light ">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="add_reserve.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            
          </div>
        </div>
      </div>
    </div>
<!--room 3-->
    <div class="col-lg-4 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin-auto">
        <img src="picture/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">NPR 800 pre night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 balconi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               2 sofa
            </span>
          </div>
          <!--facalities-->
          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               Telivision
            </span>
          </div>
          <div class="guests mb-4">
          <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Childrern
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light ">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="add_reserve.php" class="btn btn-sm text-white custom-bg shadow-none">reserve</a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- facilities-->
<h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Our Facilities</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0">
    <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="picture/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="picture/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="picture/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="picture/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="picture/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More facilities >>></a>
    </div>
  </div>
</div>

<!-- Reach us-->
<h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Reach us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-4 mb-3 bg-white rounded">
       <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31397712412!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1700551567225!5m2!1sen!2snp" loading="lazy" ></iframe>
    </div>

    <div class="col-lg-4">
      <div class="bg-white p-4  rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +9779888000210" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+9779888000210
        </a><br>
        <a href="tel: +9779888000210" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+9779888000210
        </a>
      </div>
      <div class="bg-white p-4  rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-3">
        <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
        <a href="#" class="d-inline-block mb-3">
        <i class="bi bi-instagram me-1"></i>instagram
        </a>
      </div>
    </div>
  </div>
</div>


<?php require('inc/footer.php');?>

  

</body>
</html>