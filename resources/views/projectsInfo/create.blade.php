@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('projectsInfo.store')}}" method="POST">
                        
                        @include('projectsInfo._form', ['type' => 'created'])

                        @include('partials.inputSave')

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection