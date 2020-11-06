@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cierre de proyecto') }}</div>

                <div class="card-body">
                    <form>

                        @include('clousures._form', ['type' => 'showOnly'])

                        @include('partials.inputHome')

                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>
@endsection