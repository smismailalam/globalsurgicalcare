@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    @foreach ($product->images as $image)
                        <img class="card-img-top" style="padding:10px; border-radius:15px; height:150px" src="{{ URL::to($image->filename) }}" />    
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->specification }}</p>
                        <div class="row">
                            <div class="col-6">
                                <span class="font-weight-bold">Price</span>
                            </div>
                            <div class="col-6">
                                <span class="font-weight-bold">Unit</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span>{{ $product->price }} </span>
                            </div>
                            <div class="col-6">
                                <span>{{ $product->unit }} </span>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        @endforeach
    </div>
</div>
@endsection
