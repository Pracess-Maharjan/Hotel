<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL - HOME- ABOUT US</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
      .pop:hover{
        border-top-color: aqua !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }

    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php');?>

<div class="my-5 px4">
  <h2 class="fw-bold h-font text-center">About us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur error, adipisci molestiae, dicta fuga <br> natus eos repudiandae hic, illo laudantium voluptates dignissimos exercitationem fugit minus iusto magni veniam commodi. Quis?

  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6">
      <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Possimus tempore quo, laboriosam nam soluta quae delectus!
      </p>
    </div>
    <div class="col-lg-5 mb-4">
      <img src="picture/about/man.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 text-center">
        <img src="picture/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ Rooms</h4>
      </div>
    </div>
    <div class="col-lg-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 text-center">
        <img src="picture/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ Customer</h4>
      </div>
    </div>
    <div class="col-lg-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 text-center">
        <img src="picture/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ Rooms</h4>
      </div>
    </div>
    <div class="col-lg-3 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 text-center">
        <img src="picture/about/staff.svg" width="70px">
        <h4 class="mt-3">100+ Staffs</h4>
      </div>
    </div>
  </div>
</div>

<h3 class="fw-bold h-font text-center">Management Team</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="picture/about/team.jpg" class="w-100">
        <h5 class="mt-2">name</h5>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween:40,
        pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
  </script>
<?php require('inc/footer.php');?>

</body>
</html>