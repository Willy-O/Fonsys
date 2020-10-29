@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cierre de proyecto') }}</div>

                <div class="card-body">
                    <form>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Project title') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $project_title }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="results" class="col-md-4 col-form-label text-md-right">Resultados</label>

                            <div class="col-md-6">
                                <textarea name="results" class="form-control @error('results') is-invalid @enderror" id="results" cols="30" rows="3" disabled>{{ $clousure->results }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="efects" class="col-md-4 col-form-label text-md-right">Efectos</label>

                            <div class="col-md-6">
                                <textarea name="efects" class="form-control @error('efects') is-invalid @enderror" id="efects" cols="30" rows="3" disabled>{{ $clousure->efects }}</textarea>
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