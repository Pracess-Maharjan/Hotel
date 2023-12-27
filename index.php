<?php include('user/inc/connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RESERVATION SYSTEM</title>
    <?php require('user/inc/links.php'); ?>
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

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-none sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">kirtipur Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About us</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="me-2 btn btn-outline-dark shadow-none" >
        <a href="http://localhost/hotel/user/form/login.php">login</a>
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none">
        <a href="http://localhost/hotel/user/form/register.php">Register </a> </li>
        </button>
      </div>
    </div>
  </div>
</nav>