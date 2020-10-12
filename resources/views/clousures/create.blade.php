@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cierre de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('clousures.store')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Titulo del proyecto</label>

                            <div class="col-md-6">
                                <select class="form-control" name="title" id="title">
                                    <option value=""></option>
                                    @foreach ($titles as $id =>$title)
                                        <option value="{{$id}}">{{$title}}</option>                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="results" class="col-md-4 col-form-label text-md-right">Resultados</label>

                            <div class="col-md-6">
                                <textarea name="results" class="form-control @error('results') is-invalid @enderror" id="results" cols="30" rows="3">{{ old('results') }}</textarea>
                                @if ($errors->has('results'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('results') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="efects" class="col-md-4 col-form-label text-md-right">Efectos</label>

                            <div class="col-md-6">
                                <textarea name="efects" class="form-control @error('efects') is-invalid @enderror" id="efects" cols="30" rows="3">{{ old('efects') }}</textarea>
                                @if ($errors->has('efects'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('efects') }}</strong>
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