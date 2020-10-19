@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiarios') }}</div>

                    <div class="card-body">
                        <form>
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input 
                                    type="text"
                                    autocomplete="off"
                                    class="form-control"
                                    id="name"value="{{ $beneficiary->name }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                
                                <div class="col-md-6">
                                    <input
                                    type="text"
                                    id="lastName"
                                    class="form-control"
                                    value="{{ $beneficiary->lastName }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>

                                <div class="col-md-6">
                                    <input 
                                    type="number"  
                                    name="cedula"
                                    id="cedula" 
                                    class="form-control"
                                    value="{{ $beneficiary->cedula }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>   
                                <div class="col-md-6">
                                    @switch($beneficiary->gender)
                                        @case('m')
                                                <input type="radio" id="m" checked name="gender" value="m" disabled="disabled">
                                                <label for="male">Masculino</label><br>
                                            @break
                                        @case('f')
                                                <input type="radio" id="f" checked name="gender" value="f" disabled="disabled">
                                                <label for="male">Femenino</label><br>
                                            @break
                                        @default
                                    @endswitch
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="dateBorn" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                                <div class="col-md-6">
                                    <input
                                    type="date"
                                    autocomplete="off"
                                    name="dateBorn"
                                    class="form-control"
                                    id="dateBorn"
                                    value="{{ $beneficiary->dateBorn }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                <div class="col-md-6">
                                    <input 
                                    type="email"
                                    autocomplete="off"
                                    name="email"
                                    class="form-control"
                                    id="email"
                                    value="{{ $beneficiary->email }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="homeAddress" class="col-md-4 col-form-label text-md-right">Dirección de habitación</label>

                                <div class="col-md-6">
                                    <textarea 
                                    name="homeAddress"
                                    class="form-control"
                                    id="homeAddress"
                                    cols="30"
                                    rows="3"
                                    disabled="disabled">{{ $beneficiary->homeAddress }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellPhone" class="col-md-4 col-form-label text-md-right">Número celular</label>

                                <div class="col-md-6">
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="cellPhone" 
                                    value="{{ '0'.$beneficiary->codeCellPhone.' '.$beneficiary->cellPhone }}"
                                    disabled="disabled">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="homePhone" class="col-md-4 col-form-label text-md-right">Número local</label>

                                <div class="col-md-6"> 
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="homePhone" 
                                    value="{{'0'.$beneficiary->codeHomePhone.' '.$beneficiary->homePhone}}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education" class="col-md-4 col-form-label text-md-right">Nivel academico</label>
                                <div class="col-md-6">
                                    <input 
                                    class="form-control"
                                    value="{{ $beneficiary->education }}"
                                    disabled="disabled">                                
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ethnicGroup" class="col-md-4 col-form-label text-md-right">Grupo étnico</label>

                                <div class="col-md-6">
                                    <input 
                                    name="ethnicGroup" 
                                    class="form-control" 
                                    id="ethnicGroup"
                                    value="{{ $beneficiary->ethnicGroup }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="workAddress" class="col-md-4 col-form-label text-md-right">Dirección de trabajo</label>

                                <div class="col-md-6">
                                    <textarea 
                                    name="workAddress"
                                    class="form-control"
                                    id="workAddress"
                                    cols="30"
                                    rows="3"
                                    disabled="disabled">{{ $beneficiary->workAddress }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="publicWorker" class="col-md-4 col-form-label text-md-right">¿Trabajador público?</label>

                                <div class="col-md-6">
                                    @switch($beneficiary->publicWorker)
                                        @case('SI')
                                                <input type="radio" id="si" checked name="publicWorker" disabled="disabled">
                                                <label for="si">SI</label><br>
                                            @break
                                        @case('NO')
                                                <input type="radio" id="no" checked name="publicWorker" disabled="disabled">
                                                <label for="no">NO</label><br>
                                            @break
                                        @default
                                    @endswitch
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="workInstitute" class="col-md-4 col-form-label text-md-right">Institución pública en la que trabaja</label>

                                <div class="col-md-6">
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    name="workInstitute" 
                                    id="workInstitute" 
                                    value="{{ $beneficiary->workInstitute }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="conmunity" class="col-md-4 col-form-label text-md-right">Comuna en la que vive</label>

                                <div class="col-md-6">
                                    <input 
                                    type="text" 
                                    class="form-control"
                                    name="conmunity"
                                    id="conmunity" 
                                    value="{{ $beneficiary->conmunity }}"
                                    disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="finance" class="col-md-4 col-form-label text-md-right">¿Ha optenido una subvención anteriormente?</label>

                                <div class="col-md-6">
                                    @switch($beneficiary->finance)
                                        @case('SI')
                                                <input type="radio" id="si" checked name="finance" disabled="disabled">
                                                <label for="si">SI</label><br>
                                            @break
                                        @case('NO')
                                                <input type="radio" id="no" checked name="finance" disabled="disabled">
                                                <label for="no">NO</label><br>
                                            @break
                                        @default
                                    @endswitch
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="financeType" class="col-md-4 col-form-label text-md-right">Tipo de subvención</label>

                                <div class="col-md-6">
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    name="financeType" 
                                    id="financeType" 
                                    value="{{ $beneficiary->financeType }}"
                                    disabled="disabled">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')