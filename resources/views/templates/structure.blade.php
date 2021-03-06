<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/icofont.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/venobox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/owl.carousel.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/aos.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/app.css") }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset("img/profile-img.jpg") }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="#home"><a href="{{ route("page1") }}#home"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ route("page1") }}#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ route("page1") }}#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="{{ route("page1") }}#contact"><i class="bx bx-envelope"></i> Contact</a></li>
          <li><a href="{{ route("admin") }}"><i class="bx bx-walk"></i> Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- !-- End Testimonials Section --> --}}

    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  {{-- <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset("js/app.js") }}"></script>
  <script src="{{ asset("js/jquery.min.js") }}"></script>
  <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("js/jquery.easing.min.js") }}"></script>
  <script src="{{ asset("js/validate.js") }}"></script>
  <script src="{{ asset("js/jquery.waypoints.min.js") }}"></script>
  <script src="{{ asset("js/counterup.min.js") }}"></script>
  <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("js/venobox.min.js") }}"></script>
  <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("js/typed.min.js") }}"></script>
  <script src="{{ asset("js/aos.js") }}"></script>
  <script src="{{ asset("js/main.js") }}"></script>



</body>

</html>