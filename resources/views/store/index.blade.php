@extends('layouts.theme.master')

@section('content')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row">
                    @foreach($products as $product)
                        <!-- product -->
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ URL::to('/') }}/uploads/products/{{$product->identifier}}/{{$product->image}}" alt="">
                                    <div class="product-label">
                                        <!--<span class="sale">-30%</span>-->
                                        @if($product->create_at < 5)
                                            <span class="new">NEW</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{ $product->category }}</p>
                                    <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                    <h4 class="product-price">${{ $product->price }}</h4>
                                    <div class="product-btns">
                                        <button class="add-to-cart-btn" onclick="window.location='{{ route('cart-add', $product->identifier) }}';"><i class="fa fa-shopping-cart"></i><span class="tooltipp">A&ntilde;adir al carrito</span></button>
                                        <!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>-->
                                        <span>&nbsp;&nbsp;</span>
                                        <button class="quick-view" onclick="window.location='{{ route('product-detail', [$product->identifier, $product->slug]) }}';"><i class="fa fa-eye"></i><span class="tooltipp">Detalles</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                    @endforeach
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing 20-100 products</span>
                    <ul class="store-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row  -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


@stop