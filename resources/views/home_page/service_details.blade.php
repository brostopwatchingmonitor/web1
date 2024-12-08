<<<<<<< HEAD
@extends('lay.app')

@section('title', 'Product')

@section('service')

<main class="main">
    <!-- Services Detail Section -->
    <section id="services-detail" class="container py-5">
        <div class="row">
            <!-- Image Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="assets/images/service-detail.jpg" alt="Service Image" class="img-fluid rounded shadow">
            </div>
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12">
                <h2 class="mb-3">Our Services</h2>
                <p class="text-muted">
                    We provide high-quality solutions tailored to your needs, including software development, IT support,
                    and network solutions to ensure seamless operations for your business.
                </p>
                <button id="softwareButton" class="btn btn-primary mt-3">View More</button>
                <!-- Collapsible Card -->
                <div id="cardExample" class="collapse mt-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Software Development</h5>
                            <p class="card-text">
                                We create custom software solutions to enhance productivity and efficiency.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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
=======
{{-- <div class="col-lg-8">
  <div class="main-image">
    <img src="{{ asset('storage/'.$service->image2) }}" style="height: auto; width:300px; margin-top:-122px;" alt="">
  </div>
  <div class="main-content">
    <span class="category">IT</span>
    <h4>{{ $service->title }}</h4>
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
  <div class="row gy-4 align-items-stretch justify-content-between features-item ">
    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
      <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
      <h3>Sunt consequatur ad ut est nulla</h3>
      <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
      <ul>
        <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
        <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
        <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
      </ul>
      <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
    </div>
  </div>
</div> --}}

<!DOCTYPE html>
  <html lang="en">
  
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <base href="/public">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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


  <link href="assets_service/img/favicon.png" rel="icon">
  <link href="assets_service/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
<style>
  
  /* 
  NOTE: untuk card
   */
   .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem; /* Jarak antar kartu */
    }
    .card {
      flex: 1 1 calc(50% - 1rem); /* Menyesuaikan ukuran kartu 50% dari lebar container */
      max-width: 100%; /* Hindari overflow */
    }
    @media (max-width: 768px) {
      .card {
        flex: 1 1 100%; /* Pada layar kecil, kartu tampil satu baris */
      }
    }

    .card-img {
      height: 150px; /* Menentukan tinggi tetap */
      object-fit: cover; /* Proporsi gambar tetap */
    }

    .card-large {
      margin-bottom: 2rem;
    }
    .card-img-large {
      height: 300px; /* Tinggi tetap untuk gambar besar */
      width: 500px;
      object-fit: cover; /* Menjaga proporsi gambar */
    }
    .separator {
      border-top: 2px solid #ddd; /* Garis pembatas */
      margin: 2rem 0; /* Jarak atas dan bawah garis */
    }
    .row {
    transition: all 0.3s ease-in-out;
    }
    .row:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
</style>

  </head>
  <body>
  <base href="/public">
  <x-service_details.navbar.index></x-service_details.navbar.index>
  <div class="container mt-5">
    <!-- Large Card -->
    <div class="row card-large align-items-center">
      <div class="col-md-6">
        <img src="{{ asset('storage/'.$service->image2) }}" class="img-fluid card-img-large rounded" alt="Large Card Image">
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h2 class="card-title">{{ $service->title }}</h2>
          <p class="card-text">{{ $service->description }}</p>
        </div>
      </div>
    </div>

    <div class="separator"></div>

    @forelse($service->liststuffs as $index => $list)
    <div class="row mb-4 align-items-center">
        @if($index % 2 == 0)
            {{-- Posisi gambar di kiri untuk index genap --}}
            <div class="col-md-4">
                <img src="{{ Storage::url($list->image_list) }}" class="img-fluid card-img rounded-start" alt="Card Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text">{{ $list->description }}</p>
                </div>
            </div>
        @else
            {{-- Posisi gambar di kanan untuk index ganjil --}}
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text">{{ $list->description }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ Storage::url($list->image_list) }}" class="img-fluid card-img rounded-end" alt="Card Image">
            </div>
        @endif
    </div>
@empty
    <div class="row">
        <div class="col">
            <p>No items found</p>
        </div>
    </div>
@endforelse

    <!-- Card 2 -->

  </div>
  <x-service_details.footer.index></x-service_details.footer.index>
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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
>>>>>>> 9df9d5599493e92f435a04226c06ea7de51f727e
