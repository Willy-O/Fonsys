@extends('layouts.header')
    @section('tittle')
    @endsection

    @section('content')
        <h1>Beneficiario</h1>
        <form action="{{ route('beneficiaries.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" max="20" value="{{ old('name')}}">
                @if ($errors->has('name'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="lastName">Apellido</label>
                <input type="text" name="lastName" id="lastName" max="20" value="{{ old('lastName')}}">
                @if ($errors->has('lastName'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="gender">Genero</label>
                <input type="radio" id="m" name="gender" value="male">
                <label for="male">Masculino</label><br>
                <input type="radio" id="f" name="gender" value="female">
                <label for="female">Femenino</label><br>
                <input type="radio" id="o" name="gender" value="other">
                <label for="other">Other</label>
            </div>

            <div class="form-group">
                <label for="dateBorn">Fecha de nacimiento</label>
                <input type="date" name="dateBorn" id="dateBorn" value="{{ old('dateBorn')}}">
                @if ($errors->has('dateBorn'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('dateBorn') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" max="50" value="{{ old('email')}}">
                @if ($errors->has('email'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="hAddress">Dirección de habitación</label>
                    {{-- {{
                        ##########################################
                        ####################################################
                    }} --}}
            </div>

            <div class="form-group">
                <label for="cellPhone">Número celular</label>
                <input type="tel" name="cellPhone" id="cellPhone" max="11" pattern="[0-9]" value="{{ old('cellPhone')}}">
                @if ($errors->has('cellPhone'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('cellPhone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="homePhone">Número local</label>
                <input type="tel" name="homePhone" id="homePhone" max="11" pattern="[0-9]" value="{{ old('homePhone')}}">
                @if ($errors->has('homePhone'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('homePhone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="education">Nivel academico</label>
                {{-- {{
                    ##########################################
                    ####################################################
                }} --}}
            </div>

            <div class="form-group">
                <label for="ethnicGroup">Grupo étnico</label>
                {{-- {{
                    ##########################################
                    ####################################################
                }} --}}
            </div>

            <div class="form-group">
                <label for="wAddress">Dirección de trabajo</label>
                {{-- {{
                    ##########################################
                    ####################################################
                }} --}}
            </div>

            <div class="form-group">
                <label for="publicWorker">¿Trabajador público?</label>
                    <input type="radio" id="si" name="publicWorker" value="si">
                <label for="si">Si</label><br>
                    <input type="radio" id="no" name="publicWorker" value="no">
                <label for="no">No</label><br>
            </div>

            <div class="form-group">
                <label for="workInstitute">Institución pública en la que trabaja</label>
                <input type="text" name="workInstitute" id="workInstitute" max="50" value="{{ old('workInstitute')}}">
                @if ($errors->has('workInstitute'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('workInstitute') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="conmunity">Comuna en la que vive</label>
                <input type="text" name="conmunity" id="conmunity" max="50" value="{{ old('conmunity')}}">
                @if ($errors->has('conmunity'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('conmunity') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="finance">¿Ha optenido una subvención anteriormente?</label>
                    <input type="radio" id="si" name="finance" value="si">
                    <label for="si">Si</label><br>
                    <input type="radio" id="no" name="finance" value="no">
                    <label for="no">No</label><br>
            </div>
            
            <div class="form-group">
                <label for="financeType">Tipo de financiamiento</label>
                <input type="text" name="financeType" id="financeType" value="{{ old('financeType')}}">
                @if ($errors->has('financeType'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('financeType') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit">Guardar</button>
        </form>
    @endsection
@extends('layouts.foot')