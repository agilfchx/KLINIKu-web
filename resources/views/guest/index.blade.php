<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KLINIKu | Website</title>

  <link rel="stylesheet" href="css/maicons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="css/theme.css">
</head>
<body>
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('guest.nav')

  @if(session()->has('success'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ session()->get('success') }}
  </div>
  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(img/dentist.jpg);">
    <div class="hero-section">
      <div class="container text-center">
        <span class="font-weight-normal display-4">Healthy Dental Care</span>
        <h1 class="font-weight-light">healthy care, healthy you</h1>
        <a href="#janji" class="btn btn-success text-white">Buat Janji Sekarang!</a>
      </div>
    </div>
  </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <h1>Selamat datang di <br> <span class="text-success">KLINIK</span>u</h1>
            <p class="text-grey mb-4">KLINIKu merupakan sebuah Klinik Gigi yang berada di Bandung dengan dokter-dokter yang ramah-ramah dan profesional. Dengan adanya sebuah Website KLINIKu ini kalian tidak perlu datang ketempat untuk membuat janji dengan Dokter, cukup dengan buat janji di web disini maka nama anda akan terdaftar di Klinik untuk janjian dengan dokter.</p>
          </div>
          <div class="col-lg-6">
            <div class="img-place custom-img-1">
              <img src="img/teeth.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div> 

  @include('guest.doctor')

  @include('guest.form')

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 id="kontak">Kontak</h5>
          <p class="footer-link mt-2">Jl Soekarno Hatta</p>
          <a href="#" class="footer-link">08123456789 (Suster Betty)</a>
          <a href="#" class="footer-link">helpcenter@klinikku.com</a>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <h5 class="mt-2">Sosial Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="js/theme.js"></script>
  
</body>
</html>