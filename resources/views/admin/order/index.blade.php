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
                    <h2 class="title"><i class="fa fa-shopping-cart"></i> Pedidos</h2>
                </div>
            </div>
            </br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="">
                    <thead>
                    <tr class="active">
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Total</th>
                        <th>Entregado</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->user->name . ' ' . $order->user->last_name}}</td>
                            <td>{{ $product->extract }}</td>
                            <td>${{ number_format($product->price,2) }}</td>
                            <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            <td align ='center'>
                                <a href='{{ route('product.edit', $product->identifier) }}' class='link'>
                                    <i class='fa fa-pencil' style='color:#0066FF;'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="pull-right">
                    {{ $orders->render() }}
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