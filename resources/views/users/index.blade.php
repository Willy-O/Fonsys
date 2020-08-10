@extends('layouts.header')

@section('tittle')
    Usuraio
@endsection

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <h1>Usuarios</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Nombre de usuario</th>
                    <th>Correo electronico</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->lastName }}</th>
                        <th>{{ $user->cedula }}</th>
                        <th>{{ $user->userName }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->rol }}</th>
                        <th><a href="{{route('users.show', ['user' => $user->id]) }}">Ver más</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection