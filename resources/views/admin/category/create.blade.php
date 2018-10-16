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
                    <h2 class="title"><i class="fa fa-object-group"></i> Nueva Categor&iacute;a</h2>
                </div>
            </div>
		    <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="page">
                    {!! Form::open(['route'=>'category.store']) !!}
        
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('name') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            {!! 
                                Form::textarea(
                                    'description', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa descripción...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group pull-right">
                            <a class="btn cancel-btn" href="{{ route('category.index') }}"><i class="fa fa-chevron-circle-left"></i> Cancelar</a>
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