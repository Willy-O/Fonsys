@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información de proyecto') }}</div>

                <div class="card-body">
                    <form>

                        <div class="form-group row">
                            <label for="summary"  class="col-md-4 col-form-label text-md-right">Resumen</label>
                            
                            <div class="col-md-6">
                                <textarea name="summary" class="form-control @error('summary') is-invalid @enderror" id="summary" cols="30" rows="3" disabled>{{ $projectInfo->summary}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time"  class="col-md-4 col-form-label text-md-right">Tiempo</label>
                            
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('time') is-invalid @enderror" name="time" id="time" max="20" value="{{ $projectInfo->time }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="problem"  class="col-md-4 col-form-label text-md-right">Problema</label>
                           
                            <div class="col-md-6">
                                <textarea name="problem" class="form-control @error('problem') is-invalid @enderror" id="problem" cols="30" rows="3" disabled>{{ $projectInfo->problem }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="precedent"  class="col-md-4 col-form-label text-md-right">Presedentes</label>
                            
                            <div class="col-md-6">
                                <textarea name="precedent" class="form-control @error('precedent') is-invalid @enderror" id="precedent" cols="30" rows="3" disabled>{{ $projectInfo->precedent }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="justification"  class="col-md-4 col-form-label text-md-right">Justificación</label>

                            <div class="col-md-6">
                                <textarea name="justification" class="form-control @error('justification') is-invalid @enderror" id="justification" cols="30" rows="3" disabled>{{ $projectInfo->justification}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="generalObjective"  class="col-md-4 col-form-label text-md-right">Objetivo general</label>

                            <div class="col-md 6">
                                <input type="text" class="form-control @error('generalObjective') is-invalid @enderror" name="generalObjective" id="generalObjective" max="20" value="{{ $projectInfo->generalObjective }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specificObjective"  class="col-md-4 col-form-label text-md-right">Objetivos especificos</label>
                            
                            <div class="col-md-6">
                                <textarea name="specificObjective" class="form-control @error('specificObjective') is-invalid @enderror" id="specificObjective" cols="30" rows="3" disabled>{{ $projectInfo->specificObjective}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hopedResults"  class="col-md-4 col-form-label text-md-right">Resultados esperados</label>
                          
                            <div class="col-md-6">
                                <textarea name="hopedResults" class="form-control @error('hopedResults') is-invalid @enderror" id="hopedResults" cols="30" rows="3" disabled>{{ $projectInfo->hopedResults }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hopedEfects"  class="col-md-4 col-form-label text-md-right">Efectos esperados</label>
                            
                            <div class="col-md-6">
                                <textarea name="hopedEfects" class="form-control @error('hopedEfects') is-invalid @enderror" id="hopedEfects" cols="30" rows="3" disabled>{{ $projectInfo->hopedEfects }}</textarea>
                            </div>
                        </div>

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection