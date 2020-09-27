@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Datos de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('projectsData.update', $projectData->id )}}" method="PUT">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="tittle" class="col-md-4 col-form-label text-md-right">Titulo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tittle') is-invalid @enderror" name="tittle" id="tittle" max="20" value="{{ $projectData->tittle }}">

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
                                <input type="number" class="form-control @error('sum') is-invalid @enderror" name="sum" id="sum" min="0" value="{{ $projectData->sum }}">
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
                                <input type="text" class="form-control @error('objective') is-invalid @enderror" name="objective" id="objective" max="20" value="{{ $projectData->objective }}">

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
                                <input type="text" class="form-control @error('addressLocation') is-invalid @enderror" name="addressLocation" id="addressLocation" max="20" value="{{ $projectData->addressLocation }}">

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
                                    <option value="{{ $projectData->area }}">{{ $projectData->area }}</option>
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
                        </div>

                        <div class="form-group row">
                            <label for="justification" class="col-md-4 col-form-label text-md-right">Justificación</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('justification') is-invalid @enderror" name="justification" id="justification" max="20" value="{{ $projectData->justification }}">

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
                                <input type="text" class="form-control @error('countPoint') is-invalid @enderror" name="countPoint" id="countPoint" max="20" value="{{ $projectData->countPoint }}">

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