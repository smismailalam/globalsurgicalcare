@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        {{-- @foreach ($products as $product)
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
        @endforeach --}}
        <div class="column mcb-column one column_column  column-margin-0px">
            <div class="column_attr">
                <div class="woocommerce columns-3">
                    <div class="products_wrapper isotope_wrapper">
                        <ul class="products ">
                            @foreach ($products as $product)
                                <li class="isotope-item product type-product has-post-thumbnail  shipping-taxable purchasable product-type-simple instock">
                                    <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                        <div class="image_wrapper">
                                            <a href="content/pharmacy/product-page.html">
                                                <div class="mask"></div><img width="700" height="700" src={{ URL::to( $product->images[0]->filename) }} class="scale-with-grid wp-post-image" alt="home_pharmacy_products1" />
                                            </a>
                                            <div class="image_links double">
                                                <a rel="nofollow" href="content/pharmacy/index7fd8.html?add-to-cart=99" data-quantity="1" data-product_id="99" class="add_to_cart_button ajax_add_to_cart product_type_simple"></a><a class="link" href="content/pharmacy/product-page.html"></a> </div>
                                        </div><a href="content/pharmacy/product-page.html"><span class="product-loading-icon added-cart"></span></a> </div>
                                    <div class="desc">
                                        <h4><a href="content/pharmacy/product-page.html">{{ $product->name }}</a></h4>
                                        
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection