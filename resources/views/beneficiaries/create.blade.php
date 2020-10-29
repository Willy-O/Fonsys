@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiarios') }}</div>

                    <div class="card-body">
                        <form action="{{ route('beneficiaries.store')}}" method="POST">

                            @include('beneficiaries._form', ['type' => 'created'])

                            @include('partials.inputSave')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection


@extends('layouts.foot')
