@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col">
            @if ( Session::has('message') )
                <div class="alert alert-success alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{Session('message')}}
                </div>
            @endif

            @if ( Session::has('delete-message') )
                <div class="alert alert-danger alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{Session('delete-message')}}
                </div>
            @endif
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista - Posts
                    <a href="{{route('posts.create')}}" class="btn btn-primary float-right btn-sm">Agregar Nueva</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered mb-1">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col" width="200">Creado Por</th>
                                <th scope="col" width="129">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>
                                        <div class="flx-cent">
                                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary ">Editar</a>
                                            <!--Creacion de Boton para eliminar-->
                                            {!!Form::open([
                                                'route' => ['posts.destroy',$post->id],
                                                'method' => 'delete',
                                                'style' => 'margin-left:20px'
                                                ])!!}

                                            {!!Form::submit('Borrar',['class' => 'btn btn-sm btn-danger '])!!}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
