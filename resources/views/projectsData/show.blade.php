@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Datos de proyecto') }}</div>

                <div class="card-body">
                    <form>

                        <div class="form-group row">
                            <label for="tittle" class="col-md-4 col-form-label text-md-right">Titulo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tittle') is-invalid @enderror" name="tittle" id="tittle" max="20" value="{{ $projectData->tittle }}" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="sum" class="col-md-4 col-form-label text-md-right">Monto</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('sum') is-invalid @enderror" name="sum" id="sum" min="0" value="{{ $projectData->sum }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objective" class="col-md-4 col-form-label text-md-right">Objetivo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('objective') is-invalid @enderror" name="objective" id="objective" max="20" value="{{ $projectData->objective }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressLocation" class="col-md-4 col-form-label text-md-right">Ubicación</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('addressLocation') is-invalid @enderror" name="addressLocation" id="addressLocation" max="20" value="{{ $projectData->addressLocation }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">Motor productivo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('area') is-invalid @enderror" name="area" id="area" max="20" value="{{ $projectData->area }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="justification" class="col-md-4 col-form-label text-md-right">Justificación</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('justification') is-invalid @enderror" name="justification" id="justification" max="20" value="{{ $projectData->justification }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="countPoint" class="col-md-4 col-form-label text-md-right">Punto de cuenta</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('countPoint') is-invalid @enderror" name="countPoint" id="countPoint" max="20" value="{{ $projectData->countPoint }}" disabled>
                            </div>
                        </div>
                        @include('partials.inputHome')
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection