@extends('layouts.app')


@section('content')
    <h1>Seguimiento de proyecto</h1>
    <form action="{{ route('trackings.store')}}">

        <div class="form-group">
            <label for="ticket">Exposición de motivos</label>
            <input type="text" name="ticket" id="ticket" max="20" value="{{ old('ticket')}}">
            @if ($errors->has('ticket'))
                <span class="help-block">
                    <strong>{{ $errors->first('ticket') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="files">Archivos</label>
            <input type="text" name="files" id="files" max="20" value="{{ old('files')}}">
            @if ($errors->has('files'))
                <span class="help-block">
                    <strong>{{ $errors->first('files') }}</strong>
                </span>
            @endif
        </div>
    </form>
@endsection