@extends('admin.layouts.master')

@section('content')
        <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-8 col-xs-12 text-center col-md-offset-3">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-object-group dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('category.index')}}">CATEGORIES</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-product-hunt dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('product.index')}}">PRODUCTS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-shopping-cart dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">ORDERS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-users dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#">USERS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@stop