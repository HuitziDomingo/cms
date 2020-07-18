@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear - Categoria</div>

                <div class="card-body">
                    {!!Form::open(['route' => 'categories.store'])!!}

                    <div class="form-group" @if ( $errors->has('thumbnail') ) has-error @endif>
                        {!!Form::label('Miniatura')!!}
                        {!!Form::text('thumbnail',null,['class' => 'form-control', 'placeholder' => 'Miniatura'])!!}
                        @if ( $errors->has('thumbnail') )
                            <span class="help-block">{!!$errors->first('thumbnail')!!}</span>
                        @endif
                    </div>

                    <div class="form-group" @if ( $errors->has('name') ) has-error @endif>
                        {!!Form::label('Nombre')!!}
                        {!!Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
                        @if ( $errors->has('name') )
                            <span class="help-block">{!!$errors->first('name')!!}</span>
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
