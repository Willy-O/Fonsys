@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Datos personales') }}</div>

                    <div class="card-body">
                        <form>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $user->lastName }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                                <div class="col-md-6">
                                    <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" min="0" name="cedula" value="{{ $user->cedula }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" disabled>
                                </div>
                            </div>

                        </div>
                    
                    <div class="card card-header">{{ __('Datos de usuario') }}</div>

                        <div class="card-footer">

                            <div class="form-group row">
                                <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ $user->userName }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                                <div class="col-md-6">
                                    <input id="rol" type="text" class="form-control" name="rol" value="{{ $user->rol }}" disabled>
                                </div>
                            </div>

                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection