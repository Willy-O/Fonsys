@extends('layouts.app')


@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
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
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" id="password" max="30" value="{{ old('password')}}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
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
                        <label for="rol">Rol de usuario</label>
                        <select name="rol" id="rol">
                            <option value="administrador">Administrador</option>
                            <option value="gerenteDeProyecto">Gerente de proyecto</option>
                            <option value="analistaDeGestionDeProyectos">Analista de gestión de proyectos</option>
                            <option value="gerenteDePlanificaciónPresupuestoYOrganización">Gerente de planificación, presupuesto y organización</option>
                            <option value="consultorJuridico">Consultor juridico</option>
                            <option value="coordinadorDeSeguimientoYControl">Coordinador de seguimiento y control</option>
                            <option value="coordinadorDeCierreYDifusion">Coordinador de cierre y difusión</option>
                            <option value="auditoria">Auditoría</option>
                        </select>
                        @if ($errors->has('rol'))
                            <span class="help-block">
                                <strong>{{ $errors->first('area') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection