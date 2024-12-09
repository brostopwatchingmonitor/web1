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

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <style>
/* Transisi smooth untuk animasi */
ul a{
 text-decoration: none;
}
/* About us menu */
.custom-nav .nav-link {
  background-color: transparent; /* Menghilangkan background */
  color: #000; /* Warna teks */
  border: none; /* Menghilangkan border */
  border-bottom: 2px solid transparent; /* Garis bawah transparan saat tidak aktif */
  border-radius: 0; /* Menghilangkan radius sudut */
}

.custom-nav .nav-link.active {
  border-bottom: 2px solid #007bff; /* Garis bawah berwarna saat aktif */
  color: #007bff; /* Warna teks saat aktif */
}



.btn-primary {
        background-color: #007bff; /* Bootstrap primary color */
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
        transform: scale(1.05);
    }

    .service-item {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        overflow: hidden;
        transition: box-shadow 0.3s;
    }

    .service-item:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .details {
        padding: 15px;
        text-align: center;
    }

    .details h3 {
        font-size: 18px;
        margin: 10px 0;
        color: #333;
    }

    .img {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .img img {
        max-width: 100%;
        height: auto;
    }

  </style>
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
