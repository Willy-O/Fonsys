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
                        
                        @include('trackings._form', ['type' => 'created'])
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