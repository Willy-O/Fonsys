@extends('layouts.app')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h1 class="text-center">{{ __('Beneficiarios') }}</h1>
                </div>

            
                <table class="table table-bordered">
                    <thead>
                        <th>Resultados</th>
                        <th>Efectos</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($clousures as $clousure)
                            <tr>
                                <td>{{$clousure->results}}</td>
                                <td>{{$clousure->efects}}</td>
                                <td>
                                    <a href="{{route('clousures.show', $clousure) }}">
                                        Detalles
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('clousures.edit', $clousure) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $clousures->links() !!}
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')