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