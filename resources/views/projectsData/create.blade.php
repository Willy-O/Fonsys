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

                        @include('projectsData._form', ['type' => 'created'])

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
