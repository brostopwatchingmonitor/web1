<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
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
  </head>
  <body>
    @include('layoutsadmin.header1')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      {{-- @include('layoutsadmin.navedit') --}}
      <!-- Sidebar Navigation end-->
     {{-- @include('layoutsadmin.navi') --}}
    <div class="page-content">
        @if (session()->has('message'))
            
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>    
        @endif
        <h1 class="post_title">Add Post</h1>
        <div>
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="div-center mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Service Title</label>
                    <input type="title" name="title" class="form1-control" value="{{ $service->title }}" valid="exampleFormControlInput1">
                </div>
                {{-- <div class="div-center mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form1-label">Post Descripsion</label>
                    <textarea name="descripsion" class="form1-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> --}}
                <div class="div-center mb-3 d-flex align-items-center justify-content-center">
                    <label for="exampleFormControlTextarea1" class="form-label">Service Description</label>
                    <textarea name="description" class="form1-control" id="exampleFormControlTextarea1" rows="3">{{ $service->description }}</textarea>
                </div>
                <div class="div-center mb-3">
                <label class="form-label">Old Image front</label>
                <img class="form1-control" src="/serviceimage/{{ $service->image1 }}" alt="old image">
            </div>
                <div class="div-center mb-3 ">
                    <label for="formFile" class="form-label">Update IMG</label>
                    <input class="form1-control w" type="file" id="formFile" name="image1">
                </div>
                <div class="div-center mb-3">
                    <label class="form-label">Old Image back</label>
                    <img class="form1-control" src="/serviceimage/{{ $service->image2 }}" alt="old image">
                </div>
                    <div class="div-center mb-3 ">
                        <label for="formFile" class="form-label">Update IMG</label>
                        <input class="form1-control w" type="file" id="formFile" name="image2">
                    </div>
                    <div class="div-center mb-3 ">

                        <select name="kategori">
                            <option value="hardware" {{ $service->kategori == 'hardware' ? 'selected' : '' }}>Hardware</option>
                            <option value="software" {{ $service->kategori == 'software' ? 'selected' : '' }}>Software</option>
                            <option value="maintenance" {{ $service->kategori == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                            <option value="networking" {{ $service->kategori == 'networking' ? 'selected' : '' }}>Networking</option>
                        </select>
                    </div>
                    {{-- Existing Liststuffs --}}
                    <div class="div-center mb-3">
                        <button type="button" onclick="addNewListstuffInput()">Add More List</button>
                    </div>
                @foreach($service->liststuffs as $liststuff)
                <div class="div-center mb-3">
                    
                    <div class="existing-liststuff">
                        <textarea name="existing_descriptions[{{ $liststuff->id }}]">{{ $liststuff->description }}</textarea>
                        <input type="file" name="existing_images[{{ $liststuff->id }}]">
                        <a href="{{ route('services.delete-liststuff', $liststuff) }}" onclick="return confirm('Delete this item?')">Delete</a>
                    </div>
                    @endforeach
                </div>

                {{-- New Liststuffs --}}
                <div id="new-liststuffs-container"></div>
                
                
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