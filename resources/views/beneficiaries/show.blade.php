@extends('layouts.app')


    @section('content')
    <h1>{{$beneficiary->name}}</h1>
    <form>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" max="20" value="{{ $beneficiary->name }}" disabled>
        </div>

        <div class="form-group">
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" id="lastName" max="20" value="{{ $beneficiary->lastName }}" disabled>
        </div>

        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="number" name="cedula" id="cedula" max="20" value="{{ $beneficiary->cedula }}" disabled>
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
            <input type="date" name="dateBorn" id="dateBorn" value="{{ $beneficiary->date }}" disabled>
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" max="50" value="{{ $beneficiary->email }}" disabled>
        </div>

        <div class="form-group">
            <label for="homeAddress">Dirección de habitación</label>
            <textarea name="homeAddress" id="homeAddress" cols="30" rows="10" disabled>{{$beneficiary->homeAddress}}</textarea>
        </div>

        <div class="form-group">
            <label for="cellPhone">Número celular</label>
            <input type="number" name="cellPhone" id="cellPhone" max="11" pattern="[0-9]" value="{{ $beneficiary->cellPhone}}" disabled>
        </div>

        <div class="form-group">
            <label for="homePhone">Número local</label>
            <input type="number" name="homePhone" id="homePhone" max="11" pattern="[0-9]" value="{{ $beneficiary->homePhone }}" disabled>
        </div>

        <div class="form-group">
            <label for="education">Nivel academico</label>
            <input type="text" name="education" id="education" max="11" pattern="[0-9]" value="{{ $beneficiary->education }}" disabled>
        </div>

        <div class="form-group">
            <label for="ethnicGroup">Grupo étnico</label>
            <input type="text" name="ethnicGroup" id="ethnicGroup" max="11" pattern="[0-9]" value="{{ $beneficiary->ethnicGroup }}" disabled>
        </div>

        <div class="form-group">
            <label for="workAddress">Dirección de trabajo</label>
            <textarea name="workAddress" id="workAddress" cols="30" rows="10" disabled>{{ $beneficiary->workAddress}}</textarea>
        </div>

        <div class="form-group">
            <label for="publicWorker">¿Trabajador público?</label>
                <input type="radio" id="1" name="publicWorker" value="1">
            <label for="1">Si</label><br>
                <input type="radio" id="0" name="publicWorker" value="0">
            <label for="0">No</label><br>
        </div>

        <div class="form-group">
            <label for="workInstitute">Institución pública en la que trabaja</label>
            <input type="text" name="workInstitute" id="workInstitute" max="50" value="{{ $beneficiary->workInstitute}}" disabled>
        </div>

        <div class="form-group">
            <label for="conmunity">Comuna en la que vive</label>
            <input type="text" name="conmunity" id="conmunity" max="50" value="{{ $beneficiary->conmunity }}" disabled>
        </div>

        <div class="form-group">
            <label for="finance">¿Ha optenido una subvención anteriormente?</label>
                <input type="radio" id="1" name="finance" value="1">
                <label for="1">Si</label><br>
                <input type="radio" id="0" name="finance" value="0">
                <label for="0">No</label><br>
        </div>
        
        <div class="form-group">
            <label for="financeType">Tipo de financiamiento</label>
            <input type="text" name="financeType" id="financeType" value="{{ $beneficiary->financeType}}" disabled>
        </div>
    </form>
    @endsection
@extends('layouts.foot')