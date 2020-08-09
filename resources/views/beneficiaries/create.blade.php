@extends('layouts.header')
    @section('tittle')
    @endsection

    @section('content')
        <h1>PRUEBA</h1>
        <form action="{{ route('beneficiaries.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name')}}">

                @if ($errors->has('name'))
                    <span class="helb-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            
            <button type="submit">Guardar</button>
        </form>
    @endsection
@extends('layouts.foot')