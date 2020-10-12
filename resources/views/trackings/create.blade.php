@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seguimiento de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('trackings.store')}}" method="POST">
                        {{ csrf_field() }}


                        <div class="form-group row">
                            <label for="ticket" class="col-md-4 col-form-label text-md-right">Exposición de motivos</label>

                            <div class="col-md-6">
                                    <textarea name="ticket" class="form-control @error('ticket') is-invalid @enderror" id="ticket" cols="30" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="files" class="col-md-4 col-form-label text-md-right">Archivos</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tittle') is-invalid @enderror" name="files" id="files" max="20" value="{{ old('files')}}">

                                @if ($errors->has('files'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('files') }}</strong>
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