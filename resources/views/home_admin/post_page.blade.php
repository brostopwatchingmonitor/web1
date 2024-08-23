<!DOCTYPE html>
<html>

<head>
    @include('layoutsadmin.header')
    <style type="text/css">
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
            width: 500px;
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
</head>

<body>
    @include('layoutsadmin.header1')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('layoutsadmin.navcopy')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            @if (session()->has('message'))
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>    
            @endif
            <h1 class="post_title">Add Post</h1>
            <div>
                <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div-center mb-3 ">
                        <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                        <input type="title" name="title" class="form1-control" id="exampleFormControlInput1">
                    </div>
                    {{-- <div class="div-center mb-3 ">
                        <label for="exampleFormControlTextarea1" class="form1-label">Post Descripsion</label>
                        <textarea name="descripsion" class="form1-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> --}}
                    <div class="div-center mb-3 d-flex align-items-center justify-content-center">
                        <label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
                        <textarea name="description" class="form1-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    {{-- <div>
                    <label for="">Add IMG</label>
                    <input type="file" name="image">
                </div> --}}
                    <div class="div-center mb-3 ">
                        <label for="formFile" class="form-label">Add IMG</label>
                        <input class="form1-control w" type="file" id="formFile" name="image">
                    </div>
                    <div class="div-center mb-3 ">
                        <input type="submit" class="btn btn-primary" value="submit">
                    </div>
                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
