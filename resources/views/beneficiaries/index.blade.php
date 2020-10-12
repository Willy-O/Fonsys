@extends('layouts.app')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h1 class="text-center">{{ __('Beneficiarios') }}</h1>
                </div>

            
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($beneficiaries as $beneficiary)
                            <tr>
                                <td>{{$beneficiary->name}}</td>
                                <td>{{$beneficiary->lastName}}</td>
                                <td>{{$beneficiary->cedula}}</td>
                                <td>
                                    <a href="{{route('beneficiaries.show', $beneficiary) }}">
                                        Detalles
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('beneficiaries.edit', $beneficiary) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $beneficiaries->links() !!}
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')