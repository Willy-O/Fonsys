@extends('layouts.app')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h1 class="text-center">{{ __('Beneficiarios') }}</h1>
                </div>

            
                <table class="table table-bordered">
                    <thead>
                        <th>Problema</th>
                        <th>Objetivo general</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($projectsInfo as $projectInfo)
                            <tr>
                                <td>{{$projectInfo->name}}</td>
                                <td>{{$projectInfo->lastName}}</td>
                                <td>
                                    <a href="{{route('projectsInfo.show', $projectInfo) }}">
                                        Detalles
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('projectsInfo.edit', $projectInfo) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $projectsInfo->links() !!}
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')