<!DOCTYPE html>
<html>
  <head> 
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
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->description }}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
      
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
  </body>
</html>