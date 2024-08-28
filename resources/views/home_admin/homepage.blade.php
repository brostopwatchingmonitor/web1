<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('layoutsadmin.header')
    <style type="text/css">
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
        text-align: center;
      }
      .post_title {
          font-size: 30px;
          font-weight: bold;
          text-align: center;
          padding: 30px;
          color: white;
      }

      .post_title .form1-label{
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
      .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .post_title .form1-label{
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
        
  </style>
    <link href="https://cdn.datatables.net/v/bs5/dt-2.1.4/datatables.min.css" rel="stylesheet">
</head>

<body>
    @include('layoutsadmin.header1')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('layoutsadmin.nav')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
          
          <div class="container">
            <h1 class="title_deg">Home</h1>
            <table id="myTable" class="table table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>usertype</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->usertype }}</td>
                        <td><a href="profile" class="btn btn-info">Profile_setting</a></td>
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
    <script>let table = new DataTable('#myTable');</script>
</body>

</html>
