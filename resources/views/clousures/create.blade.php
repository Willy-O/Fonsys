@extends('layouts.header')
@section('tittle')
    Seguimiento de proyecto
@endsection 

@section('content')
    <h1>Cierre de proyecto</h1>
    <form action="{{ route('clousures.store')}}">

        <div class="form-group">
            <label for="results">Resultados</label>
            <input type="text" name="results" id="results" max="20" value="{{ old('results')}}">
            @if ($errors->has('results'))
                <span class="help-block">
                    <strong>{{ $errors->first('results') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="efects">Efectos</label>
            <input type="text" name="efects" id="efects" max="20" value="{{ old('efects')}}">
            @if ($errors->has('efects'))
                <span class="help-block">
                    <strong>{{ $errors->first('efects') }}</strong>
                </span>
            @endif
        </div>
    </form>
@endsection