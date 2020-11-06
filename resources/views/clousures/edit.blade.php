@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cierre de proyecto') }}</div>
                <div class="card-body">
                    <form action="{{ route('clousures.update', $clousure->id)}}" method="POST">
                        @method('PUT')

                        @include('clousures', ['type' => 'edit'])

                        @include('partials.inputSave')
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
