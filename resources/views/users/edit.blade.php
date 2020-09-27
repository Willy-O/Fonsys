@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Datos personales') }}</div>

                    <div class="card-body">
                        <form method="PUT" action="{{ route('users.update', $user->id)}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $user->lastName }}" required autocomplete="lastName" autofocus>

                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>
                                <div class="col-md-6">
                                    <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" min="0" name="cedula" value="{{ $user->cedula }}" required autofocus>
                                    @error('cedula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    
                    <div class="card card-header">{{ __('Datos de usuario') }}</div>

                        <div class="card-footer">

                            <div class="form-group row">
                                <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>
                                <div class="col-md-6">
                                    <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ $user->userName }}" required autocomplete="userName">
                                    @error('userName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password }}" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$user->password}}" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                                <div class="col-md-6">
                                    <select name="rol" id="rol" class="form-control @error('rol') is-invalid @enderror">
                                        <option value="{{$user->rol}}">{{$user->rol}}</option>
                                        <option value="Gerente de proyecto">Gerente de proyecto</option>
                                        <option value="Analista de gestión de riesgo">Analista de gestión de riesgo</option>
                                        <option value="Gerente de planificación, presupuesto y organización">Gerente de planificación, presupuesto y organización</option>
                                        <option value="Consultor juridico">Consultor juridico</option>
                                        <option value="Coordinador de seguimiento y control">Coordinador de seguimiento y control</option>
                                        <option value="Coordinador de cierre y difusión">Coordinador de cierre y difusión</option>
                                        <option value="Auditor">Auditor</option>
                                    </select>
                                </div>
                            </div>


                            @include('partials.inputSave')
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection