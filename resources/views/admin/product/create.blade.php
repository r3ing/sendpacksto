@extends('admin.layouts.master')

@section('title', 'Nuevo Producto')

@section('content')
        <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="container text-center">
                <div class="section-title">
                    <h2 class="title"><i class="fa fa-product-hunt"></i> Nuevo Producto</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="page">
                        {!! Form::open(['route'=>'product.store', 'files'=>true]) !!}

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            {!!
                                Form::text(
                                        'name',
                                        null,
                                        array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingrese el nombre...',
                                            'autofocus' => 'autofocus'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="extract">Extracto</label>
                            {!!
                                Form::text(
                                        'extract',
                                        null,
                                        array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingrese el extracto...',
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('extract') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripci&oacute;n</label>
                            {!!
                                Form::textarea(
                                        'description',
                                        null,
                                        array(
                                            'class'=>'form-control',
                                            'placeholder' => 'Ingrese el Descripci&oacute;n...',
                                        )
                                    )
                            !!}
                        </div>
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="price">Precio</label>
                                {!!
                                    Form::text(
                                            'price',
                                            null,
                                            array(
                                                'class'=>'form-control',
                                                'placeholder' => 'Ingrese el precio...',
                                            )
                                        )
                                !!}
                                <span style='color:#FF0000;'>{{ $errors->first('price') }}</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="weight">Libras</label>
                                {!!
                                    Form::text(
                                            'weight',
                                            '0',
                                            array(
                                                'class'=>'form-control',
                                                'placeholder' => 'Ingrese las libras...',
                                            )
                                        )
                                !!}
                                <span style='color:#FF0000;'>{{ $errors->first('weight') }}</span>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-group col-md-8">
                                <label class="control-label" for="category_id">Categor&iacute;a</label>
                                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                                <span style='color:#FF0000;'>{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label" for="visible">Visible</label>
                                <div class="">
                                {!!
                                    Form::checkbox(
                                            'visible',
                                            null,
                                            array(
                                                'class'=>'form-check-input'
                                            )
                                        )
                                !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img1">Imagen Principal</label>
                            {!!
                                Form::file(
                                        'img1',
                                        array(
                                            'class' => 'file-img',
                                            'accept' => '.jpg, .png, .jpeg',
                                            'required'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('img1') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="img2">Otra Imagen</label>
                            {!!
                                Form::file(
                                        'img2',
                                        array(
                                            'class' => 'file-img',
                                            'accept' => '.jpg, .png, .jpeg'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('img2') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="img3">Otra Imagen</label>
                            {!!
                                Form::file(
                                        'img3',
                                        array(
                                            'class' => 'file-img',
                                            'accept' => '.jpg, .png, .jpeg'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('img3') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="img4">Otra Imagen</label>
                            {!!
                                Form::file(
                                        'img4',
                                        array(
                                            'class' => 'file-img',
                                            'accept' => '.jpg, .png, .jpeg'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('img4') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="img5">Otra Imagen</label>
                            {!!
                                Form::file(
                                        'img5',
                                        array(
                                            'class' => 'file-img',
                                            'accept' => '.jpg, .png, .jpeg'
                                        )
                                    )
                            !!}
                            <span style='color:#FF0000;'>{{ $errors->first('img4') }}</span>
                        </div>
                        </br>
                        <div class="form-group pull-right">
                            <a class="btn cancel-btn" href="{{ route('product.index') }}"><i
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