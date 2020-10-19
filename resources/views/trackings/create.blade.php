@extends('layouts.app')


@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seguimiento de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('trackings.store')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="project" class="col-md-4 col-form-label">{{ __('Project') }}</label>
                            <select name="project" id="project" class="form-control">
                                <option value="">{{ __('Select a project') }}</option>
                                @foreach ($projectsData as $projectData)
                                    <option value="{{ $projectData->id}}">{{ $projectData->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="ticket" class="col-md-4 col-form-label">Exposición de motivos</label>

                            <input id="ticket" type="hidden" name="ticket" id="ticket"  required>
                            
                            <trix-editor 
                                class="@error('ticket') is-invalid @enderror"
                                input="ticket">
                            </trix-editor>
                            
                            @if ($errors->has('ticket'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('ticket') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="files" class="col-md-4 col-form-label">Archivos</label>

                    
                            <input type="text" class="form-control @error('files') is-invalid @enderror" name="files" id="files" max="20" value="{{ old('files')}}">


                            @if ($errors->has('files'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('files') }}</strong>
                                </span>
                            @endif
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
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
@endsection