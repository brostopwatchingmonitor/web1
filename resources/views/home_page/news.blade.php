@extends('lay.app')

@section('title', 'News')

@section('content1')

    <body class="blog-page">

        <main class="main">

            <!-- Page Title -->
            <div class="page-title">
                <div class="container d-lg-flex justify-content-between align-items-center">
                    <h1 class="mb-2 mb-lg-0">Blog</h1>
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- End Page Title -->

            <!-- Blog Posts Section -->
            <section id="recent-posts" class="recent-posts section">

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
                          <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
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
                  </div>
                </div>
            </section><!-- /Blog Pagination Section -->

        </main>

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


    @endsection
