<!DOCTYPE html>
<html>
  <head> 
    <!-- Favicons -->
  
    <base href="/public">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('layoutsadmin.header')
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
  </head>
  <body>
    @include('layoutsadmin.header1')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('layoutsadmin.navshow')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if (session()->has('message'))
            
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>    
            @endif
          {{--  --}}
          @if (session()->has('message1'))
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message1') }}
            </div>    
            @endif
        <h1 class="title_deg">All Post</h1>
        {{-- <table class="table_deg">
          <tr class="th_deg">
            <th>Post Title</th>
            <th>Description</th>
            <th>Post By</th>
            <th>Post Status</th>
            <th>UserType</th>
            <th>Image</th>
          </tr> --}}
          {{-- @foreach ($post as $post) --}}
          {{-- <tr class="hehe">
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->post_status }}</td>
            <td>{{ $post->usertype }}</td>
            <td><img src="postimage/{{ $post->image }}" alt="gambar post" class="img"></td>
          </tr> --}}
          {{-- @endforeach --}}
        {{-- </table> --}}
        <div class="container">
          <div class="row">
              @foreach ($post as $post)
              <div class="col-md-4">
                  <div class="card portfolio">
                    <div class="portofolio-cover">
                      <img src="postimage/{{ $post->image }}" alt="gambar post" class="card-img-top" alt="...">
                    </div>
                      <div class="card-body">
                          <p class="post-category">{{ $post->topic }}</p>
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->description }}</p>
                          <a blank="{{ url('post_details',$post->id) }}" class="btn btn-primary">Details</a>
                          <a href="{{ url('edit_post',$post->id) }}" class="btn btn-info">Edit</a>
                          <a href="{{ url('delete_post',$post->id) }}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
      
      </div>
    </div>
    <!-- JavaScript files-->
    <script type="text/javascript">function confirmation(ev)
    {
      ev.preventDefault();
      var urlToRedirect=ev.currentTarget.getAttribute('href');
      console.log(urlToRedirect);
      
      swal({
        title: "Are you sure to delete this Post ?",
        text: "you won't be able to revert this delete",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willCancel)=>{
         if(willCancel){
          window.location.href=urlToRedirect;
         }
      });
    }
    </script>
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
  <!-- Main JS File -->
  {{-- <script src="assets/js/main.js"></script> --}}
  </body>
</html>