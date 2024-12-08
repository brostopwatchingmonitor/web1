<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <base href="/public">
    @include('layoutsadmin.header')
    <style type="text/css">
    .service_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .service_title .form1-label{
            justify-content:center;
            align-content: center;
            align-items: center;
            align-self: center;
        }

        .div-center {
            padding: 12px;
            text-align: center;
        }

        .form1-control {
            width: 400px;
            height: auto;
            /* align-content: center; */
        }
        .w{
            color: white;
        }

        label {
            display: inline-block;
            width: 200px;
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
    <link href="https://cdn.datatables.net/v/bs5/dt-2.1.4/datatables.min.css" rel="stylesheet">
</head>


<body>
    @include('layoutsadmin.header1')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('layoutsadmin.navservice')
        <!-- Sidebar Navigation end-->
        <div class="page-content">

                @if (session()->has('message1'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message1') }}
                </div>
                @endif

          <div class="container">
            <h1 class="title_deg">Home</h1>
            <button onclick="myFunction()" class="btn btn-success">hide/show Table</button>
            <div id="myDIV">
                {{-- <form action="{{ url('services') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div-center mb-3 d-flex align-items-center justify-content-center">
                        
                    </div>
            
                  <div class="">
                    
                    <select id="kategori" name="kategori"  required>
                        <option value="hardware">Hardware</option>
                        <option value="software">Software</option>
                        <option value="maintenance">Maintenance</option>
                        <option value="networking">Networking</option>
                    </select><br><br>
                  </div>
                  <!-- Liststuffs -->
                  
                  
                
                    
                </form> --}}
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="div-center mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Service Title :</label>
                    <input type="text" name="title" placeholder="Title" class="form1-control" id="exampleFormControlInput1">
                  </div>
                  <div class="div-center mb-3 d-flex align-items-center justify-content-center">
                    <label for="exampleFormControlTextarea1" class="form-label" >Deskripsi:</label>
                    <textarea name="description" class="form1-control" id="exampleFormControlTextarea1" placeholder="Description" rows="3" ></textarea>
                  </div>
                  <div class="div-center mb-3 ">
                    <label for="formFile" class="form-label">IMG Front</label>
                    <input class="form1-control w" type="file" id="formFile" name="image1">
                </div>
                <div class="div-center mb-3 ">
                  <label for="formFile" class="form-label">IMG BACK</label>
                  <input class="form1-control w" type="file" id="formFile" name="image2">
              </div>
              <div class="div-center mb-3">
                <label for="kategori" class="form-label">Category:</label>
                    <select name="kategori" class="form1-control">
                        <option value="hardware">Hardware</option>
                        <option value="software">Software</option>
                        <option value="maintenance">Maintenance</option>
                        <option value="networking">Networking</option>
                    </select>
              </div>
              <div class="div-center mb-3"> 
                <button type="button" onclick="addListstuffInput()">Add More List</button>
              </div>
              
              <div id="liststuff-container" class="div-center mb-3">
                <div id="liststuffs-container">
                  <div class="liststuff-input">
                      <label for="exampleFormControlTextarea1" class="form-label" >Deskripsi:</label>
                      <textarea name="descriptions[]" placeholder="List Description" ></textarea>
                      <label for="exampleFormControlTextarea1" class="form-label" >IMG:</label>
                      <input type="file" name="images[]" class="form1-control w">
                  </div>
              </div>
            </div>

                  <div class="div-center mb-3 ">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
                  
              </form>
            </div>
            <table id="myTable" class="table table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>desc</th>
                        <th>image1</th>
                        <th>image2</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->image1 }}</td>
                        <td>{{ $service->image2 }}</td>
                        <td>
                          <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info">Edit</a>
                          
                          <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-warning">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"></script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.4/datatables.min.js"></script>
    <script>
      function addListstuffInput() {
          const container = document.getElementById('liststuffs-container');
          container.insertAdjacentHTML('beforeend', `
              <div class="liststuff-input">
                  <label for="exampleFormControlTextarea1" class="form-label" >Deskripsi:</label>
                  <textarea name="descriptions[]" placeholder="List Description" ></textarea>
                  <label for="exampleFormControlTextarea1" class="form-label" >IMG:</label>
                  <input type="file" name="images[]" class="form1-control w">
              </div>
          `);
      }
      </script>
    <script>let table = new DataTable('#myTable');</script>
    <script type="text/javascript">function confirmation1(ev)
        {
          ev.preventDefault();
          var urlToRedirect=ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);

          swal({
            title: "Are you sure to delete this service ?",
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
    <script>function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }</script>
</body>

</html>
