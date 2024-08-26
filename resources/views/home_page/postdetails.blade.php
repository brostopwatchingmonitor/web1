@extends('lay.app')

@section('title', 'News')

@section('content1')

    <body class="blog-page">
        <main class="main container">
            
            {{-- <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary"> --}}
                {{-- <div class="col-lg-6 px-0">
                  <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                  <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                  <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
                </div>
              </div> --}}
            
              {{-- <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                      <h3 class="mb-0">Featured post</h3>
                      <div class="mb-1 text-body-secondary">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                      </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                      <h3 class="mb-0">Post title</h3>
                      <div class="mb-1 text-body-secondary">Nov 11</div>
                      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                      </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                  </div>
                </div>
              </div> --}}
              
              <div class="row g-5">
                <div class="col-md-8">
                  <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    {{ $post->topic }}
                  </h3>
            
                  <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ $post->created_at }} by <a>{{ $post->name }}</a></p>
            
                    <div class="post-img">
                        <img src="/postimage/{{ $post->image }}" alt="" class="img-fluid">
                      </div>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                      <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>{{ $post->description }}</p>
                    {{-- <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
                    <ul>
                      <li>First list item</li>
                      <li>Second list item with a longer description</li>
                      <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                      <li>First list item</li>
                      <li>Second list item with a longer description</li>
                      <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p> --}}
                  </article>
                </div>
                  
            
                  
            
                  {{-- <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                  </nav> --}}
                <div class="col-md-4">
                  <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                      <h4 class="fst-italic">About</h4>
                      <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>
            
                    <div>
                      <h4 class="fst-italic">Recent posts</h4>
                      <ul class="list-unstyled">
                        <li>
                          <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                            <div class="col-lg-8">
                              <h6 class="mb-0">Example blog post title</h6>
                              <small class="text-body-secondary">January 15, 2024</small>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                            <div class="col-lg-8">
                              <h6 class="mb-0">This is another blog post title</h6>
                              <small class="text-body-secondary">January 14, 2024</small>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                            <div class="col-lg-8">
                              <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                              <small class="text-body-secondary">January 13, 2024</small>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
            
                    <div class="p-4">
                      <h4 class="fst-italic">Archives</h4>
                      <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                      </ol>
                    </div>
            
                    <div class="p-4">
                      <h4 class="fst-italic">Elsewhere</h4>
                      <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            
        </main>
        
    </body>
    

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