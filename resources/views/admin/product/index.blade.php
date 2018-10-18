@extends('admin.layouts.master')

@section('content')
        <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="container text-center">
                <div class="section-title">
                    <h2 class="title"><i class="fa fa-product-hunt"></i> Productos</h2>
                </div>
            </div>
            <div>
                <a class="btn add-btn" href="{{ route('product.create') }}"><i class="fa fa-plus"></i> A&ntilde;adir</a>
            </div>
            </br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="">
                    <thead>
                    <tr class="active">
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categor&iacute;a</th>
                        <th>Extracto</th>
                        <th>Precio</th>
                        <th>Visible</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="{{ URL::to('/') }}/uploads/products/{{$product->identifier}}/{{$product->images->img1}}" class="img-cart" width="40"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->extract }}</td>
                            <td>${{ number_format($product->price,2) }}</td>
                            <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            <td align ='center'>
                                <a href='{{ route('product.edit', $product->identifier) }}' class='link'>
                                    <i class='fa fa-pencil' style='color:#0066FF;'></i>
                                </a>
                            </td>
                            <td align ='center'>
                                <a href="{{ route('product-destroy', $product->identifier) }}" onclick="return confirm('Seguro que desea eliminar este producto?')" class='link'>
                                    <i class='fa fa-times' style='color:#FF0000;font-size: 15px'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="pull-right">
                    {{ $products->render() }}
                </div>
                <!--<hr>-->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@stop