@extends('layouts.app')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h1 class="text-center">{{ __('Seguimiento') }}</h1>
                </div>

            
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($trackings as $tracking)
                            <tr>
                                <td>{{$tracking->name}}</td>
                                <td>{{$tracking->lastName}}</td>
                                <td>{{$tracking->cedula}}</td>
                                <td>
                                    <a href="{{route('trackings.show', $tracking) }}">
                                        Detalles
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('trackings.edit', $tracking) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $trackings->links() !!}
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')