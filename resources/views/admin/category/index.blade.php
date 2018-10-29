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
                <a class="btn add-btn" href="{{ route('category.create') }}"><i class="fa fa-plus"></i> A&ntilde;adir</a>
            </div>
            </br>
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                    <tr class="_focus">
                        <th>Nombre</th>
                        <th>Descripci&oacute;n</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td align ='center'>
                                <a href='{{ route('category.edit',$category) }}' class='link'>
                                    <i class='fa fa-pencil' style='color:#0066FF;'></i>
                                </a>
                            </td>
                            <td align ='center'>
                                <a href="{{ route('category-destroy',$category) }}" onclick="return confirm('Seguro que desea eliminar este registro?')" class='link'>
                                    <i class='fa fa-times' style='color:#FF0000;font-size: 15px'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $categories->render() }}
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