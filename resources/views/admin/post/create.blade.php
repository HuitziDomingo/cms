@extends('layouts.app')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear - Post</div>

                <div class="card-body">
                    {!!Form::open(['route' => 'posts.store'])!!}

                    <div class="form-group" @if ( $errors->has('thumbnail') ) has-error @endif>
                        {!!Form::label('Miniatura')!!}
                        {!!Form::text('thumbnail',null,['class' => 'form-control', 'placeholder' => 'Miniatura'])!!}
                        @if ( $errors->has('thumbnail') )
                            <span class="help-block">{!!$errors->first('thumbnail')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('title') ) has-error @endif>
                        {!!Form::label('Titulo')!!}
                        {!!Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Titulo'])!!}
                        @if ( $errors->has('title') )
                            <span class="help-block">{!!$errors->first('title')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('sub_title') ) has-error @endif>
                        {!!Form::label('Sub Titulo')!!}
                        {!!Form::text('sub_title',null,['class' => 'form-control', 'placeholder' => 'Sub Titulo'])!!}
                        @if ( $errors->has('sub_title') )
                            <span class="help-block">{!!$errors->first('sub_title')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('details') ) has-error @endif>
                        {!!Form::label('Detalles')!!}
                        {!!Form::text('details',null,['class' => 'form-control', 'placeholder' => 'Detalles'])!!}
                        @if ( $errors->has('details') )
                            <span class="help-block">{!!$errors->first('details')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('category') ) has-error @endif>
                        {!!Form::label('Categorias')!!}
                        {!!Form::select('category_id[]',$categories,null,['class' => 'form-control', 'id' => 'category_id' ,'multiple' => 'multiple'])!!}
                        @if ( $errors->has('category_id') )
                            <span class="help-block">{!!$errors->first('category_id')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('slug') ) has-error @endif>
                        {!!Form::label('Slug')!!}
                        {!!Form::text('slug',null,['class' => 'form-control', 'placeholder' => 'Slug'])!!}
                        @if ( $errors->has('slug') )
                            <span class="help-block">{!!$errors->first('slug')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('thumbnail') ) has-error @endif>
                        {!!Form::label('Publicador')!!}
                        {!!Form::select('is_published',[1 => 'Publicar', 0 => 'Borrar'],null,['class' => 'form-control'])!!}
                    </div>
                    {!!Form::submit('Crear',['class' => 'btn btn-primary btn-sm'])!!}
                    {!!Form::close()!!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
     integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'details' );
        $('#category_id').select2({placeholder:"Insertar Categorias"});
    </script>
@endsection
