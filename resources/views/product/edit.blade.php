<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.2 CRUD Application</title>

    <link href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

<h3 class="text-center"> Edit Student </h3>

<div class="container-fluid">
    <div class="row">

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ URL::to('/product/update/'.$product->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Product Name </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Specification </label>
                    <textarea class="form-control" name="specification" placeholder="Specification">{{ $product->specification }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Unit </label>
                    <input type="text" class="form-control" name="unit" value="{{ $product->unit }}" id="unit" placeholder="Unit">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> wholesalse Price </label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}" id="price" placeholder="wholesalse Price">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Photo </label>
                    <input type="file" class="form-control" name="photos[]" id="photos" onchange="loadFile(event)" multiple>
                </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>