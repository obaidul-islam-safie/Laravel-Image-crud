<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{__('Laravel 9 Image Crud') }}</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
             <div class="cal-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="float: left;">
                            <h2>{{__('Edit Product') }}</h2>
                        </div>
                        <div style="float: right;">
                            <a class="btn btn-dark" href="{{ route('all.product')}}">{{__('Go Product')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Session::has('msg'))
                        <p class="alert alert-success">{{ Session::get('msg') }}</p>
                        @endif

                       <form action="{{ route('update.product',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="from-group mb-3">
                              <label for="">Product Name</label>
                              <input type="text" name="name" value="{{$product->name}}" class="form-control">
                          </div>
                          <div class="from-group mb-3">
                            <label for="">Product Image</label>
                            <img style="width: 100px" src="{{ asset('imges/products/'.$product->image) }}" alt="">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                       </form>
                    </div>
                </div>
             </div>
        </div>
    </div>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>