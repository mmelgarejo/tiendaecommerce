@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div class="container py-8">
        <h1> Asignar Rol </h1>
        <div class="card">
            <div class="card-body">
                <p class="h5">Nombre:</p>
                <p class="form-control">{{$user->name}}</p>

                <h2 class="h5">Listado de Roles</h2>
                {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'put']) !!}
                    @foreach ($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                    {!! Form::submit('Asignar rol', ['class' => 'bg-indigo-500 rounded p-2 shadow mt-2 text-white hover:bg-indigo-600']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection