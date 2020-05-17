@extends('layouts.app')
@section('content')
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="section">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">
                            <div itemscope itemtype="http://schema.org/Product" id="product-34" class="no-share post-34 product type-product has-post-thumbnail product_cat-allergy-hay-fever shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever instock">
                                <div class="product_wrapper clearfix">
                                    <div class="column one-second product_image_wrapper">
                                        <div class="images">
                                            <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <a href={{ URL::to( $product->images[0]->filename) }} itemprop="image" class="woocommerce-main-image zoom" title="home_pharmacy_products3" data-rel="prettyPhoto[product-gallery]">
                                                        <div class="mask"></div><img width="700" height="700" src={{ URL::to( $product->images[0]->filename) }} class="scale-with-grid wp-post-image" alt="home_pharmacy_products3" title="home_pharmacy_products3" />
                                                    </a>
                                                    <div class="image_links">
                                                        <a href={{ URL::to( $product->images[0]->filename) }} itemprop="image" class="woocommerce-main-image zoom" title="home_pharmacy_products3"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumbnails columns-3">
                                                @foreach ($product->images as $image)
                                                    <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                        <div class="image_wrapper">
                                                            <a href={{ URL::to($image->filename) }} itemprop="image" class="woocommerce-main-image zoom" title="home_pharmacy_products1" data-rel="prettyPhoto[product-gallery]">
                                                                <div class="mask"></div><img width="180" height="180" src={{ URL::to($image->filename) }} class="attachment-shop_thumbnail size-shop_thumbnail" alt="home_pharmacy_products1" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one-second summary entry-summary">
                                    <h1 itemprop="name" class="product_title entry-title">{{ $product->name }}</h1>
                                        
                                        <br style="clear:both;" />
                                        
                                        <button class="single_add_to_cart_button button alt">
                                            Ask Price
                                        </button>
                                        {{-- <form class="cart" method="post" enctype='multipart/form-data'>
                                        
                                        </form> --}}
                                        <div class="accordion">
                                            <div class="mfn-acc accordion_wrapper open1st">
                                                <div class="question">
                                                    <div class="title">
                                                        <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Specifications
                                                    </div>
                                                    <div class="answer">                                                        
                                                    <p>{{ $product->specification }}</p> 
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <div class="title">
                                                        <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Packing / Weight Description
                                                    </div>
                                                    <div class="answer">
                                                    <h4>{{ $product->unit }} </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <meta itemprop="url" content="index.html" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection