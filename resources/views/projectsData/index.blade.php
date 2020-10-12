@extends('layouts.app')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h1 class="text-center">{{ __('Proyectos') }}</h1>
                </div>

            
                <table class="table table-bordered">
                    <thead>
                        <th>Titulo</th>
                        <th>Motor Productivo</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($projectsData as $projectData)
                            <tr>
                                <td>{{$projectData->tittle}}</td>
                                <td>{{$projectData->area}}</td>
                                <td>
                                    <a href="{{route('projectsData.show', $projectData) }}">
                                        Detalles
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('projectsData.edit', $projectData) }}">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $projectsData->links() !!}
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')