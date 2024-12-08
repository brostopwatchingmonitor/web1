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
