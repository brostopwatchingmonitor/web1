@extends('layout.app')

@section('title', 'Product')

@section('home')

  <main class="main">

   <!-- Hero Section -->
<div class="mb-5">
    <section id="hero" class="hero section">
      <div class="container-fluid p-0 d-flex flex-column justify-content-center align-items-center text-center position-relative">
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <img src="assets/img/hero/software.jpg" class="img-fluid" alt="Software Solutions">
                <div class="overlay">
                  <div class="overlay-bg"></div> <!-- Background overlay -->
                  <div class="overlay-text">
                    <h1>Welcome to <span>Fasya Pratama Solusindo</span></h1>
                    <p>Innovative Software Solutions for Your Business</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <img src="assets/img/hero/hardware.jpg" class="img-fluid" alt="Hardware Solutions">
                <div class="overlay">
                  <div class="overlay-bg"></div> <!-- Background overlay -->
                  <div class="overlay-text">
                    <h1>Welcome to <span>Fasya Pratama Solusindo</span></h1>
                    <p>Reliable Hardware Solutions for Your Needs</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <img src="assets/img/hero/network-1.jpg" class="img-fluid" alt="Networking Solutions">
                <div class="overlay">
                  <div class="overlay-bg"></div> <!-- Background overlay -->
                  <div class="overlay-text">
                    <h1>Welcome to <span>Fasya Pratama Solusindo</span></h1>
                    <p>Comprehensive Networking Solutions</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <img src="assets/img/hero/maintenance.jpg" class="img-fluid" alt="Maintenance Solutions">
                <div class="overlay">
                  <div class="overlay-bg"></div> <!-- Background overlay -->
                  <div class="overlay-text">
                    <h1>Welcome to <span>Fasya Pratama Solusindo</span></h1>
                    <p>Expert Maintenance Services for Smooth Operations</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section><!-- /Hero Section -->

   <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us</h2>
    <p>
      We are an IT solutions provider focused on delivering innovative and reliable technology services. From software development to networking and maintenance, we tailor our solutions to help businesses thrive.
    </p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-7 d-flex align-items-center">
        <div class="about-img">
          <img src="assets/img/kantor_fps.jpg" class="img-fluid rounded shadow" alt="Office Image">
        </div>
      </div>

      <div class="col-lg-5">

        <!-- Tabs -->
        <ul class="nav nav-pills custom-nav mb-3">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Work Process</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Experiences</a>
          </li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Tab 1 Content -->
          <div class="tab-pane fade show active" id="about-tab1">
            <p class="fst-italic">
              Information technology is a system capable of providing added value to an organization or an individual. In the current era of digitalization, PT Fasya Pratama Solusindo is here to provide information technology-based services with experienced experts and professional system design and development capabilities.
            </p>
          </div><!-- End Tab 1 Content -->

          <!-- Tab 2 Content -->
          <div class="tab-pane fade" id="about-tab2">
            <div class="work-process">
              <div class="process-step">
                <div class="step-icon">
                  <i class="bi bi-clipboard-check"></i>
                </div>
                <div class="step-content">
                  <h4>Identification</h4>
                  <p>Start! Starting with discussing problems and creating solutions with our services.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="step-icon">
                  <i class="bi bi-calendar-check"></i>
                </div>
                <div class="step-content">
                  <h4>Planning</h4>
                  <p>Ready! Make the best planning for maximum results.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="step-icon">
                  <i class="bi bi-gear"></i>
                </div>
                <div class="step-content">
                  <h4>Construction</h4>
                  <p>Create! Realizing a solution that meets your needs.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="step-icon">
                  <i class="bi bi-tools"></i>
                </div>
                <div class="step-content">
                  <h4>Maintenance</h4>
                  <p>Maintain! We make sure the system is running well.</p>
                </div>
              </div>
            </div>
          </div><!-- End Tab 2 Content -->

        <!-- Tab 3 Content -->
          <div class="tab-pane fade" id="about-tab3">
            <div class="experiences">
              <div class="experience-item">
                <div class="experience-date">2015</div>
                <div class="experience-content">
                  <h4>Integrated Security System for Indonesian National Defense Institute</h4>
                  <p>Provided outsourcing personnel in collaboration with CV Ifprosound for the management of an integrated security system.</p>
                </div>
              </div>
              <div class="experience-item">
                <div class="experience-date">2018</div>
                <div class="experience-content">
                  <h4>Maintenance Work for DIVKUM Polri Headquarters</h4>
                  <p>Performed maintenance work in collaboration with PT SJH, ensuring the security and efficiency of the Polri headquarters' systems.</p>
                </div>
              </div>
              <div class="experience-item">
                <div class="experience-date">2021</div>
                <div class="experience-content">
                  <h4>NTB Police RTMC System Development</h4>
                  <p>Subcontracted work for the procurement and development of the NTB Police RTMC System with Korlantas Polri.</p>
                </div>
              </div>
            </div>
          </div><!-- End Tab 3 Content -->


        </div><!-- End Tab Content -->

      </div>

    </div><!-- End Row -->

  </div><!-- End Container -->

</section><!-- End About Section -->

    <!-- Clients Section -->
    <div class="container">
        <section class="customer-logos">
            <div class="slide"><img src="assets/img/clients/Bosch_logo.png" alt="Bosch"></div>
            <div class="slide"><img src="assets/img/clients/planar.png" alt="Planar"></div>
            <div class="slide"><img src="assets/img/clients/Hikvision_logo.svg.png" alt="Hikvision"></div>
            <div class="slide"><img src="assets/img/clients/lg-logo.png" alt="LG"></div>
            <div class="slide"><img src="assets/img/clients/net_logo.png" alt="NET"></div>
            <div class="slide"><img src="assets/img/clients/Sony_logo.svg.png" alt="Sony"></div>
            <div class="slide"><img src="assets/img/clients/TOA.svg" alt="TOA"></div>
            <div class="slide"><img src="assets/img/clients/Super_Micro_Logo.svg" alt="Super Micro"></div>
        </section>
    </div>
<!-- /Clients Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Services</h2>
      <p>
        Our IT services cover all your business needs, from custom software and hardware solutions to secure networking and ongoing maintenance.
        We deliver reliable, high-quality solutions to keep your operations running smoothly and efficiently.
      </p>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" >
      <div class="d-flex justify-content-center" data-aos="fade-up">
        <button class="btn btn-primary" type="button" style="width: 160px; height:60px; margin-bottom:60px">
           Software
        </button>
    </div>
    <div class="mt-3" id="cardExample">

      <div class="card" style="border: 0px">
        <div class="container py-5">
          <div class="row gy-4 d-flex justify-content-center mx-3">
            <!-- Looping untuk masing-masing service -->
            @foreach ($service as $service)
            <div class="col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center mb-4" data-aos="zoom-in">
              <div class="service-item">
                <div class="img" style="height: 300px">
                  <img src="{{ asset('storage/'.$service->image1) }}" class="img-fluid rounded" style="width: 300px; height:auto" alt="Service Image">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <a href="{{ url('service_details', $service->id) }}">
                      <i class="bi bi-activity"></i>
                    </a>
                  </div>
                  <a href="{{ url('service_details', $service->id) }}" class="stretched-link" style="text-decoration: none">
                    <h3>{{ $service->title }}</h3>
                  </a>
                  {{-- <p>{{ $service->description }}</p> --}}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        
      </div>
    </div>
    </div>
    
    
  </section>

    </section>

   <!-- Faq Section -->
<section id="faq" class="faq section">
  <div class="container-fluid">
    <div class="row gy-4">
      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
          <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
          <p>
            Find Your Answers Here. We've compiled a list of common questions our customers often ask. If you can't find the answer you're looking for, feel free to reach out to us directly!
          </p>
        </div>

        @foreach ($faq as $faq)
        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
          <div class="faq-item">
            {{-- faq-active --}}
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ $faq->title }} ?</h3>
            <div class="faq-content">
              <p>{{ $faq->description }}</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->
        </div>
        @endforeach
      </div>

      <div class="col-lg-5 order-1 order-lg-2">
        <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
      </div>
    </div>
  </div>
</section>
        
          
        </div> 
      </div>

    </section><!-- /Recent Posts Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Need help or have questions? Contact us via the form below or use the info provided. We’ll respond quickly!</p>
      </div><!-- End Section Title -->

       <!-- Google Maps -->
      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9970103200917!2d106.92770287399178!3d-6.394385693596149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6994becc095285%3A0x8037de50c08604b1!2sJl.%20Eagle%20Wood%20Street%20No.28%2C%20Cikeas%20Udik%2C%20Kec.%20Gn.%20Putri%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016966!5e0!3m2!1sid!2sid!4v1724901158932!5m2!1sid!2sid" frameborder="0"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Visit our office or simply send us an email anytime you want. If you have any questions, please feel free to contact us.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Eagle Wood Street No.28
                    Bogor, Jawa Barat 16966</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@fasyasolusindo.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 812-9902-0971</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="https://formspree.io/f/mayrlono" method="POST" role="form" class="php-email-form">
              <div class="row">
                {{-- <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div> --}}
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              {{-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div> --}}
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script type="assets/js/main.js" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script>document.getElementById("softwareButton").addEventListener("click", function() {
  const collapseElement = document.getElementById("cardExample");
  collapseElement.classList.toggle("show");
});

</script>


@endsection
