<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{__('Laravel 9 Image Crud') }}</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row mt-3">
             <div class="cal-md-8">
                <div class="card">
                    <div class="card-header">
                        <div style="float: left;">
                            <h2>{{__('Laravel 9 Image Crud') }}</h2>
                        </div>
                        <div style="float: right;">
                            <a class="btn btn-dark" href="{{ route('add.product') }}">{{__('Add New Products')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('msg'))
                        <p class="alert alert-success">{{ Session::get('msg') }}</p>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>{{__('no') }}</th>
                                    <th>{{__('Product Image') }}</th>
                                    <th>{{__('Product Name') }}</th>
                                    <th>{{__('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=>$product)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td><img style="width:150px" src="{{ asset('images/products/',$product->image) }}"></td>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{ route('edit.product',$product->id) }}">{{__('Edit')}}</a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')" href="{{ route('delete.product',$product->id) }}">{{__('Delete')}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
             </div>
        </div>
    </div>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>