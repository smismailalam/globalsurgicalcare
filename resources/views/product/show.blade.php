@extends('layouts.app')

@section('content')

<div class="container">
    <h3> Product Details </h3>
    <div class="row">
        <div  class="col-md-8 col-md-offset-2">
            <table class="table table-bordered">
                <tr>
                    <th>Product name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Specification</th>
                    <td>{{ $product->specification }}</td>
                </tr>
                <tr>
                    <th>Unit</th>
                    <td>{{ $product->unit }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
            </table>
            @foreach ($product->images as $image)
                <img style="border: 1px solid #ccc; padding:10px; border-radius:15px; height:120px" src="{{ URL::to($image->filename) }}" />    
            @endforeach
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
@endsection