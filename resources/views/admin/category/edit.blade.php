@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar - Categoria</div>

                <div class="card-body">
                    {!!Form::open(['route' => ['categories.update',$category->id],'method' => 'put'])!!}

                    <div class="form-group" @if ( $errors->has('thumbnail') ) has-error @endif>
                        {!!Form::label('Miniatura')!!}
                        {!!Form::text('thumbnail',$category->thumbnail,['class' => 'form-control', 'placeholder' => 'Miniatura'])!!}
                        @if ( $errors->has('thumbnail') )
                            <span class="help-block">{!!$errors->first('thumbnail')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('name') ) has-error @endif>
                        {!!Form::label('Nombre')!!}
                        {!!Form::text('name',$category->name,['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
                        @if ( $errors->has('name') )
                            <span class="help-block">{!!$errors->first('name')!!}</span>
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
                        {!!Form::select('is_published',[1 => 'Publicar', 0 => 'Borrar'],isset($category->is_published) ? $category->is_published : null,['class' => 'form-control'])!!}
                    </div>
                    {!!Form::submit('Actualizar',['class' => 'btn btn-warning btn-sm'])!!}
                    {!!Form::close()!!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
