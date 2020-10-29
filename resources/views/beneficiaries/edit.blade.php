@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiaries') }}</div>

                    <div class="card-body">
                        <form action="{{ route('beneficiaries.update', $beneficiary->id)}}" method="POST">
                            @method('PUT')
                            
                            @include('beneficiaries._form', ['type' => 'edit'])

                            @include('partials.inputSave')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')