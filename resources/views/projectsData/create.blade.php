@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('select2-4.0.13/dist/css/select2.css') }}">
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Datos de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('projectsData.store')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="beneficiary_id" class="col-md-4 col-form-label text-md-right">Beneficiario</label>
                            <div class="col-md-6 ">
                                <select name="beneficiary_id" id="beneficiary_id" class="form-control">
                                    <option value="">Seleccione un beneficiario</option>
                                    @foreach ($beneficiaries as $beneficiary_id => $beneficiary_cedula)
                                        <option value="{{ $beneficiary_id }}">{{ $beneficiary_cedula }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('beneficiary_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('beneficiary_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tittle" class="col-md-4 col-form-label text-md-right">Titulo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tittle') is-invalid @enderror" name="tittle" id="tittle" max="20" value="{{ old('tittle')}}">

                                @if ($errors->has('tittle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tittle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="sum" class="col-md-4 col-form-label text-md-right">Monto</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('sum') is-invalid @enderror" name="sum" id="sum" min="0" value="{{ old('sum')}}">
                                @if ($errors->has('sum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objective" class="col-md-4 col-form-label text-md-right">Objetivo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('objective') is-invalid @enderror" name="objective" id="objective" max="20" value="{{ old('objective')}}">

                                @if ($errors->has('objective'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objective') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressLocation" class="col-md-4 col-form-label text-md-right">Ubicación</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('addressLocation') is-invalid @enderror" name="addressLocation" id="addressLocation" max="20" value="{{ old('addressLocation')}}">

                                @if ($errors->has('addressLocation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLocation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">Motor productivo</label>

                            <div class="col-md-6">
                                <select name="area" class="form-control @error('area') is-invalid @enderror" id="area">
                                    <option value="{{ old('area')}}">{{ old('area')}}</option>
                                    @foreach ($area as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="justification" class="col-md-4 col-form-label text-md-right">Justificación</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('justification') is-invalid @enderror" name="justification" id="justification" max="20" value="{{ old('justification')}}">

                                @if ($errors->has('justification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('justification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="countPoint" class="col-md-4 col-form-label text-md-right">Punto de cuenta</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('countPoint') is-invalid @enderror" name="countPoint" id="countPoint" max="20" value="{{ old('countPoint')}}">

                                @if ($errors->has('countPoint'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('countPoint') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @include('partials.inputSave')

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}" ></script>
    <script src="{{ asset('select2-4.0.13/dist/js/select2.js') }}" ></script>
    <script type="text/javascript">
        $("#beneficiary_id").select2({ });
    </script>
@endsection
