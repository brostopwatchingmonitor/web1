<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website Fasya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>

  <!-- Slick JS -->
    <script type="assets/js/main.js" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>


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

  <style>
    .circle-text {
      display: inline-block; /* Agar lingkaran pas dengan ukuran teks */
      padding: 20px 40px; /* Menambahkan ruang di sekitar teks */
       /* Membuat border lingkaran */
      /* Membuat border menjadi bentuk lingkaran */
      position: relative;
      font-size: 24px; /* Ukuran font untuk teks */
      line-height: 1.5; /* Menambah spasi untuk menyesuaikan bentuk lingkaran */
    }
  </style>
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
{{-- <base href="/public"> --}}

<body class="index-page">
    @include('layout.header')
      @yield('home')
    <div class="container">


        @yield('content')
    </div>
    @include('layout.footer')

</body>

</html>
