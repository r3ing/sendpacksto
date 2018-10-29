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
                <table class="table table-hover table-bordered" style="width:100%" id="table">
                    <thead>
                    <tr class="_focus">
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Total</th>
                        <th>Entregado</th>
                        <th>Detalles</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ date('d-m-Y H:i:s', strtotime($order->created_at)) }}</td>
                            <td>{{ $order->user->name . ' ' . $order->user->last_name}}</td>
                            <td>${{ number_format($order->total,2) }}</td>
                            <!--<td>{{ $order->delivered == 1 ? "Si" : "No" }}</td>-->
                            <td align ='center'>
                                @if($order->delivered == 1)
                                    <i class='fa fa-check' style='color:#00FF00;'></i>
                                @else
                                <a href='{{ route('order-delivered', $order) }}' class='link'>
                                    <i class='fa fa-ban' style='color:#FF0000;'></i>
                                </a>
                                @endif
                            </td>
                            <td align ='center'>
                                <a href='#' data-id='{{$order->id}}' data-path='{{route('order-items')}}'
                                   data-toggle='modal' data-target='#items' data-token='{{csrf_token()}}' class='link get-items'>
                                    <i class='fa fa-search' style='color:#0066FF;'></i>
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

@include('admin.order.items')

@stop