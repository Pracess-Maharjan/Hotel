<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
      .custom-bg{
         background-color: aqua;
      }
      .custom-bg:hover{
        background-color: aquamarine;
      }

    </style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
   In case of problem or if you guys need any kind of help you can contact us through the following methods that we have put here.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31397712412!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1700551567225!5m2!1sen!2snp" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/Y4AcEEv2htGwVnK89" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> Kathmandu, Kirtipur.
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +977 9841130920</a>
        <br>
        <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +977 9846001239</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: adb@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> abd@gmail.com</a>

        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form method="POST" action="login.php">
          <h5>Send a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input type="text" name="name" required class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Email</label>
          <input type="email" name="email" required class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input type="text" name="subject" required class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>