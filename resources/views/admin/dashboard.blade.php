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
                <div class="col-md-4 col-xs-12" onclick="location.href='{{route('category.index')}}';" style="cursor: pointer;">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-object-group dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('category.index')}}">CATEGORIAS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12" onclick="location.href='{{route('product.index')}}';" style="cursor: pointer;">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-product-hunt dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('product.index')}}">PRODUCTOS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12" onclick="location.href='{{route('orders.index')}}';" style="cursor: pointer;">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-shopping-cart dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('orders.index')}}">PEDIDOS</a></h3>
                            <div class="product-rating">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12" onclick="location.href='{{route('user.index')}}';" style="cursor: pointer;">
                    <div class="product">
                        <div class="product-img">
                            <i class="fa fa-users dashboard-icons"></i>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('user.index')}}">USUARIOS</a></h3>
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