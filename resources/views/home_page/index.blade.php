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
        <ul class="nav nav-pills mb-3">
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
    {{-- <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section> --}}

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

    {{-- <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5 col-centered d-flex justify-content-center">
        @foreach ($service as $service)

        <div class="col-xxl-4 col-md-6 col-centered d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="service-item">
            <div class="img">
              <img src="/serviceimage/{{ $service->image }}" style="width: 600px; height:auto;" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <a href="{{ url('service_details', $service->id) }}">
                  <i class="bi bi-activity"></i>
                </a>
              </div>
              <a href="{{ url('service_details', $service->id) }}" class="stretched-link">
                <h3>{{ $service->title }}</h3>
              </a>
              {{-- <p>{{ $service->description }}</p> -- }}
            </div>
          </div>
        </div><!-- End Service Item -->
        @endforeach

      </div>

    </div> --}}
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="d-flex justify-content-center" data-aos="fade-up">
        <button class="btn btn-primary" type="button" style="width: 160px; height:60px" data-bs-toggle="collapse" data-aos="fade-up" data-bs-target="#cardExample" aria-expanded="false" aria-controls="cardExample">
           Software
        </button>
    </div>
    <div class="collapse mt-3" id="cardExample" data-aos="fade-down" data-aos="flip-left">

      <div class="card" style="border: 12px" data-aos="flip-left">
        <div class="row gy-5 d-flex justify-content-center" data-aos="flip-left">
          
          <!-- Card besar yang menampilkan semua service (jika diperlukan, bisa ditambahkan di sini) -->
          
          <!-- Looping untuk masing-masing service -->
          <div class="col-xxl-3 col-md-6 col-sm-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($service as $service)
            <div class="service-item">
              <div class="img">
                <img src="/serviceimage/{{ $service->image }}" style="width: 300px; height:auto;" class="img-fluid" alt="Service Image">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <a href="{{ url('service_details', $service->id) }}">
                    <i class="bi bi-activity"></i>
                  </a>
                </div>
                <a href="{{ url('service_details', $service->id) }}" class="stretched-link">
                  <h3>{{ $service->title }}</h3>
                </a>
                {{-- <p>{{ $service->description }}</p> --}}
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    </div>
    
    
  </section><!-- /Services Section -->


    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Andi Pratama</h3>
                <h4>Operations Director, PT Kreatif Mandiri</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As a rapidly growing company, we need an IT partner who can keep up with our business dynamics. PT Fasya Pratama Solusindo provides innovative and scalable IT solutions that meet our needs.
                    Their friendly service and expert technicians make us feel secure and comfortable in managing our daily IT operations. We are very satisfied with their services!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Rina Wijaya</h3>
                <h4>CEO, PT Sukses Bersama</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Collaborating with PT Fasya Pratama Solusindo has brought numerous benefits to our company. The implementation of the new system went smoothly without any significant issues,
                    and the results far exceeded our expectations. The dedication and commitment of PT Fasya Pratama Solusindo's team to every project are truly remarkable.
                    We highly recommend them as a reliable IT partner.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Indah Permatasari</h3>
                <h4>COO, PT Global Innovasi</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Working with PT Fasya Pratama Solusindo has been a game-changer for our business. Their expertise in IT consulting has helped us streamline our operations and improve overall efficiency.
                    The team is incredibly knowledgeable and always goes above and beyond to ensure we are satisfied with their services. Their proactive approach to problem-solving has saved us time and money.
                    We couldn't be happier with our partnership!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Angga Wibawa</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>PT Fasya Pratama Solusindo has been instrumental in transforming our IT infrastructure. Their team demonstrated exceptional technical skills and provided tailored solutions that perfectly fit our needs.
                    The level of professionalism and dedication they brought to our projects was unparalleled. With their support, we have achieved greater reliability and performance in our IT systems.
                    We highly recommend PT Fasya Pratama Solusindo to any organization seeking top-notch IT consulting services.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Budi Santoso</h3>
                <h4>IT Manager, PT Maju Jaya</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>We are extremely satisfied with the services provided by PT Fasya Pratama Solusindo. They truly understand our IT needs and deliver timely and efficient solutions.
                    Their team is highly professional and responsive to every question and issue we faced. Thanks to them, our company's IT systems run smoothly and more efficiently.
                    Thank you, PT Fasya Pratama Solusindo, for your outstanding support!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

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
</section><!-- /Faq Section -->

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section --> --}}



    <!-- Recent Posts Section -->
    {{-- <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          @foreach ($post as $post )
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="/postimage/{{ $post->image }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">{{ $post->topic }}</p>

              <h2 class="title">
                <a href="{{ url('post_details', $post->id) }}">{{ $post->title }}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{ $post->name }}</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">{{ $post->created_at }}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach
          {{-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --> --}}

        </div><!-- End recent posts list -->

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



@endsection
