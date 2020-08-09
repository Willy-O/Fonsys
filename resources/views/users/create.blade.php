@extends('layouts.header')
@section('tittle')
    Usuario
@endsection

@section('content')
    <h1>Usuario</h1>
    <form action="{{ route('users.store')}}" method="POST"> 

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" max="20" value="{{ old('name')}}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" id="lastName" max="20" value="{{ old('lastName')}}">
            @if ($errors->has('lastName'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" name="cedula" id="cedula" max="20" value="{{ old('cedula')}}">
            @if ($errors->has('cedula'))
                <span class="help-block">
                    <strong>{{ $errors->first('cedula') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="userName">Nombre de usuario</label>
            <input type="text" name="userName" id="userName" max="20" value="{{ old('userName')}}">
            @if ($errors->has('userName'))
                <span class="help-block">
                    <strong>{{ $errors->first('userName') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="text" name="email" id="email" max="20" value="{{ old('email')}}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="rol">Rol del usuario</label>
            <input type="text" name="rol" id="rol" max="20" value="{{ old('rol')}}">
            @if ($errors->has('rol'))
                <span class="help-block">
                    <strong>{{ $errors->first('rol') }}</strong>
                </span>
            @endif
        </div>
    </form>
@endsection