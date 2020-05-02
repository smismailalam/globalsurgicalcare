@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Create Product </h3>
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
            <form id="formData" method="POST" action="{{ URL::to('/product/save') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Product Name </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Specification </label>
                    <textarea class="form-control" name="specification" placeholder="Specification"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Unit </label>
                    <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> wholesalse Price </label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="wholesalse Price">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Photo </label>
                    <input type="file" class="form-control" name="photos[]" id="photos" onchange="loadFile(event)" multiple>
                </div>

                {{-- <div class="form-group">
                    <img id="student_pic" height="100" width="100"/>
                </div>                 --}}
            </form>
            <button type="submit" form="formData" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
@endsection