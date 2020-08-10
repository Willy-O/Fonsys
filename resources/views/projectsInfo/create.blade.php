@extends('layouts.header')

@section('tittle')
    Información de proyecto
@endsection

@section('content')
    <h1>Información del proyecto</h1>
    <form action="{{ route('projectsData.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="summary">Resumen</label>
            <input type="text" name="summary" id="summary" max="20" value="{{ old('summary')}}">
            @if ($errors->has('summary'))
                <span class="help-block">
                    <strong>{{ $errors->first('summary') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="time">Tiempo</label>
            <input type="text" name="time" id="time" max="20" value="{{ old('time')}}">
            @if ($errors->has('time'))
                <span class="help-block">
                    <strong>{{ $errors->first('time') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="problem">Problema</label>
            <input type="text" name="problem" id="problem" max="20" value="{{ old('problem')}}">
            @if ($errors->has('problem'))
                <span class="help-block">
                    <strong>{{ $errors->first('problem') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="precedent">Presedentes</label>
            <input type="text" name="precedent" id="precedent" max="20" value="{{ old('precedent')}}">
            @if ($errors->has('precedent'))
                <span class="help-block">
                    <strong>{{ $errors->first('precedent') }}</strong>
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
            <label for="generalObjetive">Objetivo general</label>
            <input type="text" name="generalObjetive" id="generalObjetive" max="20" value="{{ old('generalObjetive')}}">
            @if ($errors->has('generalObjetive'))
                <span class="help-block">
                    <strong>{{ $errors->first('generalObjetive') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="specificObjective">Objetivos especificos</label>
            <input type="text" name="specificObjective" id="specificObjective" max="20" value="{{ old('specificObjective')}}">
            @if ($errors->has('specificObjective'))
                <span class="help-block">
                    <strong>{{ $errors->first('specificObjective') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="hopedResults">Resultados esperados</label>
            <input type="text" name="hopedResults" id="hopedResults" max="20" value="{{ old('hopedResults')}}">
            @if ($errors->has('hopedResults'))
                <span class="help-block">
                    <strong>{{ $errors->first('hopedResults') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="hopedEfects">Efectos esperados</label>
            <input type="text" name="hopedEfects" id="hopedEfects" max="20" value="{{ old('hopedEfects')}}">
            @if ($errors->has('hopedEfects'))
                <span class="help-block">
                    <strong>{{ $errors->first('hopedEfects') }}</strong>
                </span>
            @endif
        </div>
    </form>
@endsection