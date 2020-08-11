@extends('layouts.app')

@section('content')
    <h1>Datos del proyecto</h1>
    <form action="{{ route('projectsData.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="tittle">Titulo</label>
            <input type="text" name="tittle" id="tittle" max="20" value="{{ old('tittle')}}">
            @if ($errors->has('tittle'))
                <span class="help-block">
                    <strong>{{ $errors->first('tittle') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="sum">Monto</label>
            <input type="text" name="sum" id="sum" max="20" value="{{ old('sum')}}">
            @if ($errors->has('sum'))
                <span class="help-block">
                    <strong>{{ $errors->first('sum') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="objetive">Objetivo</label>
            <input type="text" name="objetive" id="objetive" max="20" value="{{ old('objetive')}}">
            @if ($errors->has('objetive'))
                <span class="help-block">
                    <strong>{{ $errors->first('objetive') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="addressLocation">Ubicación</label>
            <input type="text" name="addressLocation" id="addressLocation" max="20" value="{{ old('addressLocation')}}">
            @if ($errors->has('addressLocation'))
                <span class="help-block">
                    <strong>{{ $errors->first('addressLocation') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="area">Motor productivo</label>
            <select name="area" id="area">
                <option value="{{ old('area')}}">{{ old('area')}}</option>
                <option value="agroalimentario">Agroalimentario</option>
                <option value="farmaceutico">Farmacéutico</option>
                <option value="industrial">Industrial</option>
                <option value="esportador">Exportador</option>
                <option value="economiaComunal">Economía Comunal, Social y Socialista</option>
                <option value="hidrocarburos">Hidrocarburos</option>
                <option value="petroquimico">Petroquímico</option>
                <option value="minero">Minero</option>
                <option value="turismo">Turismo</option>
                <option value="construccion">Construcción</option>
                <option value="forestal">Forestal</option>
                <option value="industrialMilitar">Industrial militar</option>
                <option value="telecomunicacionesEInformatica">Telecomunicaciones e informática</option>
                <option value="bancaYFinanzas">Banca y finanzas</option>
                <option value="industriasBasicas">Industrias Básicas, estratégicas y socialistas</option>
            </select>
            @if ($errors->has('area'))
                <span class="help-block">
                    <strong>{{ $errors->first('area') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="justification">Justificación</label>
            <input type="text" name="justification" id="justification" max="20" value="{{ old('justification')}}">
            @if ($errors->has('justification'))
                <span class="help-block">
                    <strong>{{ $errors->first('justification') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="countPoint">Punto de cuenta</label>
            <input type="text" name="countPoint" id="countPoint" max="20" value="{{ old('countPoint')}}">
            @if ($errors->has('countPoint'))
                <span class="help-block">
                    <strong>{{ $errors->first('countPoint') }}</strong>
                </span>
            @endif
        </div>
    </form>
@endsection