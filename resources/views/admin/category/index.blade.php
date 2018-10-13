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
                    <h2 class="title"><i class="fa fa-object-group"></i> Categor&iacute;as</h2>
                </div>
            </div>
            <div>
                <!--<button class="order-detail-btn" onclick="window.location='{{ route('home') }}';"><i class="fa fa-chevron-circle-left"></i>A&ntilde;adir Categor&iacute;a</button>-->
                <a href='#' class='btn btn-circle btn-default'><i class='fa fa-plus' style='color:#0066FF;'></i>  Categor&iacute;a</a><br>
            </div>
            </br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripci&oacute;n</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td align ='center'>
                                <a href='#' class='link'>
                                <i class='fa fa-pencil' style='color:#0066FF;'></i>
                                </a>
                            </td>
                            <td align ='center'>
                                <a href='#' class='link'>
                                <i class='fa fa-times' style='color:#FF0000;'></i>
                                </a>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>

            </div>


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@stop