@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiarios') }}</div>

                    <div class="card-body">
                        <form>
                            @csrf

                            @include('beneficiaries._form', ['type' => 'onlyShow'])

                            @include('partials.inputHome')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')