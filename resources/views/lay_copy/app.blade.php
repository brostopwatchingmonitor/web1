<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website Fasya</title>
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

  <link href="../service/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../service/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../service/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../service/assets/css/owl.css">
    <link rel="stylesheet" href="../service/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<style>
  .page-content{
        
  }
  .title_deg{
    font-size: 30px;
    font-weight: bold;
    color: white;
    padding: 30px;
    text-align: center;
  }
  .table_deg{
    border: 1px solid white;
    width: 80%;
    text-align: center;
    margin-left: 10%;
  }
  .table_deg tr{
    color: white;
  }
  .th_deg{
    background-color: skyblue;

  }
  .img{
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
  /* portofolio section */

#portofolios {
padding: var(--sectionPadding);
}
.portofolios > h1 {
position: relative;
z-index: 2;
font-weight: bold;
color: #000;
}

.portofolios > img {
width: auto;
padding: 0;
margin: 0 auto;
height: 40px;
position: relative;
top: 75px;
left: 139px;
z-index: 1;
transform: rotate(3deg);
-webkit-transform: rotate(3deg);
-moz-transform: rotate(3deg);
-ms-transform: rotate(3deg);
-o-transform: rotate(3deg);
}

.portofolio {
border-radius: var(--itemBorderRadius);
overflow: hidden;
border: 1px solid #000;
}

.portofolio-cover {
height: 250px;
}

.portofolio-cover img {
width: 100%;
height: 100%;
object-fit: cover;
}
  .hehe{
    gap: 120px;
  }
</style>

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body class="index-page">
    @include('lay_copy.header')
    <div class="container">
    
    
        @yield('content2')
    </div>
    @include('lay_copy.footer')
    
</body>

</html>