<!DOCTYPE html>
<html lang="en">

  <head>
    @include('lay_copy.header_include')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Fasya Solusindo |Service</title>

    <!-- Bootstrap core CSS -->
    <link href="../service/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../service/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../service/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../service/assets/css/owl.css">
    <link rel="stylesheet" href="../service/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <style>.page-heading {
      background-image: url(/serviceimage/{{$service->image}});
      background-position: center bottom;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 110px 0px;
      text-align: center;
    }</style>
    {{-- <base href="/public"> --}}
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency


-->
  </head>

<body>
  @include('layout.header1')
  <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  {{-- <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- ***** Header Area Start ***** -->
  {{-- <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="properties.html">Properties</a></li>
                      <li><a href="property-details.html" class="active">Property Details</a></li>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header> --}}
  <!-- ***** Header Area End ***** -->

  

  <div class="single-property section">
    <div class="container">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="/serviceimage/{{ $service->image }}" style="height: auto; width:300px; margin-top:-122px;" alt="">
          </div>
          <div class="main-content">
            <span class="category">IT</span>
            <h4>{{ $service->title }}</h4>
            {{-- <p>Get <strong>the best villa agency</strong> HTML CSS Bootstrap Template for your company website. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it. Thank you. Cloud bread kogi bitters pitchfork shoreditch tumblr yr succulents single-origin coffee schlitz enamel pin you probably haven't heard of them ugh hella. --}}
            
            <br><br>{{ $service->description }}</p>
          </div> 
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                @foreach ($faq as $faq)
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  {{ $faq->title }} ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ $faq->description }}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
  </div>
  @include('lay_copy.footer_include')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../service/vendor/jquery/jquery.min.js"></script>
  <script src="../service/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../service/assets/js/isotope.min.js"></script>
  <script src="../service/assets/js/owl-carousel.js"></script>
  <script src="../service/assets/js/counter.js"></script>
  <script src="../service/assets/js/custom.js"></script>

  </body>
</html>

{{-- @extends('lay_copy.app')

@section('title', 'service')

@section('content2')

    <body class="blog-page">

        <main class="main">

            <!-- Page Title -->
            <!-- End Page Title -->

            <!-- Blog Posts Section -->


                    <h1>{{ $service->title }}</h1>
                    <img src="/serviceimage/{{ $service->image }}" alt="{{ $service->title }}" style="width: 70%; height: auto;">
                    <p>{{ $service->description }}</p>



        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>


    @endsection --}}
