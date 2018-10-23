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
                    <h2 class="title"><i class="fa fa-user"></i> Editar Usuario</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="page">
                        {!! Form::model($user, array('route'=> array('user.update', $user))) !!}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label class="control-label" for="name">Nombre</label>
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese nombre...'
                                    )
                                ) 
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="last_name">Apellidos</label>
                            {!!
                                Form::text(
                                    'last_name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese Apellidos...'
                                    )
                                )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('last_name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            {!!
                                Form::text(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese email...',
                                    )
                                )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user">Usuario</label>

                            {!!
                                Form::text(
                                    'user',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese nombre de usuario...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('user') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                            {!!
                                Form::password(
                                    'password',
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingrese password...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('password') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirmar Password</label>
                            {!!
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Reingrese password...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('password_confirmation') }}</span>
                        </div>
                        <div class="form-row row">
                            <div class="form-group col-md-4">
                                <label for="type">Tipo</label>
                                <div>
                                    {!! Form::radio('type', 'user', $user->type=='user' ? true : false) !!} User
                                    {!! Form::radio('type', 'admin', $user->type=='admin' ? true : false) !!} Admin
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label" for="active">Activo</label>
                                <div class="">
                                    {!!
                                       Form::checkbox('active', null, $user->active == 1 ? true : false)
                                    !!}
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group pull-right">
                            <a class="btn cancel-btn" href="{{ route('user.index') }}"><i
                                        class="fa fa-chevron-circle-left"></i> Cancelar</a>
                            {{ Form::button('<i class="fa fa-save"></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-circle save-btn'] )  }}
                        </div>

                        {!! Form::close() !!}

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