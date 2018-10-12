@extends('layouts.theme.master')

@section('content')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    @if(!empty($images[0]->img1))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img1}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img2))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img2}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img3))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img3}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img4))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img4}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img5))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img5}}" alt="">
                        </div>
                    @endif
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    @if(!empty($images[0]->img1))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img1}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img2))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img2}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img3))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img3}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img4))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img4}}" alt="">
                        </div>
                    @endif
                    @if(!empty($images[0]->img5))
                        <div class="product-preview">
                            <img src="{{ URL::to('/') }}/uploads/products/{{$images[0]->identifier}}/{{$images[0]->img5}}" alt="">
                        </div>
                    @endif
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $product[0]->name }}</h2>
                    <div>
                        <h3 class="product-price">${{ $product[0]->price }}</h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <p>{{ $product[0]->extract }}</p>
                    <!--
                    <div class="product-options">
                        <label>
                            Size
                            <select class="input-select">
                                <option value="0">X</option>
                            </select>
                        </label>
                        <label>
                            Color
                            <select class="input-select">
                                <option value="0">Red</option>
                            </select>
                        </label>
                    </div>

                    <div class="qty-label">
                        Qty
                        <div class="input-number">
                            <input type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                    -->
                    <ul class="product-links">
                        <li>Categor&iacute;a:</li>
                        <li><a href="#">{{ $product[0]->category }}</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Compartir:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    </br>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn" onclick="window.location='{{ route('cart-add', $product[0]->identifier) }}';"><i class="fa fa-shopping-cart"></i> A&ntilde;adir al carrito</button>
                    </div>
                    <div class="add-to-cart">
                        <button class="come-back-btn" onclick="window.location='{{ route('home') }}';"><i class="fa fa-chevron-circle-left"></i> Regresar</button>
                    </div>

                </div>
            </div>
            <!-- /Product details -->
            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Descripc&iacute;on</a></li>
                        <li><a data-toggle="tab" href="#tab2">Detalles</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $product[0]->description }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $product[0]->description }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->


        </div>
        <!-- /row  -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@stop