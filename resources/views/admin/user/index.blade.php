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
                    <h2 class="title"><i class="fa fa-users"></i> Usuarios</h2>
                </div>
            </div>
            <div>
                <a class="btn add-btn" href="{{ route('user.create') }}"><i class="fa fa-plus"></i> A&ntilde;adir</a>
            </div>
            </br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="">
                    <thead>
                    <tr class="active">
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Activo</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->active == 1 ? 'Si' : 'No'  }}</td>
                            <td align ='center'>
                                <a href='{{ route('user.edit', $user) }}' class='link'>
                                    <i class='fa fa-pencil' style='color:#0066FF;'></i>
                                </a>
                            </td>
                            <td align ='center'>
                                <a href="{{ route('user-destroy', $user) }}" onclick="return confirm('Seguro que desea eliminar este usuario?')" class='link'>
                                    <i class='fa fa-times' style='color:#FF0000;font-size: 15px'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="pull-right">
                    {{ $users->render() }}
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