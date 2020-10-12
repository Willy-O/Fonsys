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
                                    <input type="text" autocomplete="off" class="form-control @error('name') is-invalid @enderror" name="name" id="name" max="20" value="{{ $beneficiary->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                
                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" name="lastName" id="lastName" class="form-control @error('name') is-invalid @enderror" max="20" value="{{ $beneficiary->lastName }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>

                                <div class="col-md-6">
                                    <input type="number" autocomplete="off" name="cedula" id="cedula" class="form-control @error('cedula') is-invalid @enderror" min="0" pattern="[0-9]" max="99999999" maxlength="10" value="{{ $beneficiary->cedula }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>   
                                <div class="col-md-6">
                                    @switch($beneficiary->gender)
                                        @case('m')
                                                <input type="radio" id="m" checked name="gender" value="m">
                                                <label for="male">Masculino</label><br>
                                            @break
                                        @case('f')
                                                <input type="radio" id="f" checked name="gender" value="f">
                                                <label for="male">Femenino</label><br>
                                            @break
                                        @default
                                    @endswitch
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="dateBorn" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>
                                <div class="col-md-6">
                                    <input type="date" autocomplete="off" name="dateBorn" class="form-control @error('dateBorn') is-invalid @enderror" id="dateBorn" value="{{ $beneficiary->dateBorn }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                <div class="col-md-6">
                                    <input type="email" autocomplete="off" name="email" class="form-control @error('email') is-invalid @enderror" id="email" max="50" value="{{ $beneficiary->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="homeAddress" class="col-md-4 col-form-label text-md-right">Dirección de habitación</label>

                                <div class="col-md-6">
                                    <textarea name="homeAddress" class="form-control @error('homeAddress') is-invalid @enderror" id="homeAddress" cols="30" rows="3">{{ $beneficiary->homeAddress }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellPhone" class="col-md-4 col-form-label text-md-right">Número celular</label>

                                <div class="col-md-6">
                                        <input type="number" autocomplete="off" name="cellPhone" class="form-control col-md-6 @error('cellPhone') is-invalid @enderror" id="cellPhone" min="0" max="9999999" maxlength="7" pattern="[0-9]" value="{{ $beneficiary->codeCellPhone.' '.$beneficiary->cellPhone }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="homePhone" class="col-md-4 col-form-label text-md-right">Número local</label>
                                <div class="col-md-6">
                                    <div class="row ml-1">
                                        <input type="number" autocomplete="off" name="homePhone" class="form-control col-md-6 @error('homePhone') is-invalid @enderror" id="homePhone" min="0" max="9999999" maxlength="7" pattern="[0-9]" value="{{$beneficiary->homeCellPhone}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education" class="col-md-4 col-form-label text-md-right">Nivel academico</label>
                                <div class="col-md-6">
                                    <input disabled value="{{ $beneficiary->education }}"/>                                
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ethnicGroup" class="col-md-4 col-form-label text-md-right">Grupo étnico</label>

                                <div class="col-md-6">
                                    <select name="ethnicGroup" class="form-control @error('ethnicGroup') is-invalid @enderror" id="ethnicGroup">
                                        <option value="{{ old('ethnicGroup')}}">{{ old('ethnicGroup')}}</option>

                                    </select>
                                    @if ($errors->has('ethnicGroup'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ethnicGroup') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="workAddress" class="col-md-4 col-form-label text-md-right">Dirección de trabajo</label>

                                <div class="col-md-6">
                                    <textarea name="workAddress" class="form-control @error('workAddress') is-invalid @enderror" id="workAddress" cols="30" rows="3">{{ old('workAddress')}}</textarea>
                                </div>
                                @if ($errors->has('workAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('workAddress') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="publicWorker" class="col-md-4 col-form-label text-md-right">¿Trabajador público?</label>

                                <div class="col-md-6">
                                        <input type="radio" id="SI" name="publicWorker" value="SI">
                                    <label for="SI">SI</label><br>
                                        <input type="radio" id="NO" name="publicWorker" value="NO">
                                    <label for="NO">NO</label><br>
                                </div>
                                @if ($errors->has('workAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('workAddress') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="workInstitute" class="col-md-4 col-form-label text-md-right">Institución pública en la que trabaja</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('workInstitute') is-invalid @enderror" name="workInstitute" id="workInstitute" max="50" value="{{ old('workInstitute')}}">

                                    @if ($errors->has('workInstitute'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('workInstitute') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="conmunity" class="col-md-4 col-form-label text-md-right">Comuna en la que vive</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('conmunity') is-invalid @enderror" name="conmunity" id="conmunity" max="50" value="{{ old('conmunity')}}">
                                    
                                    @if ($errors->has('conmunity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('conmunity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="finance" class="col-md-4 col-form-label text-md-right @error('finance') is-invalid @enderror">¿Ha optenido una subvención anteriormente?</label>

                                <div class="col-md-6">
                                    <input type="radio" name="finance" value="SI">
                                    <label for="SI">SI</label><br>
                                    <input type="radio" name="finance" value="NO">
                                    <label for="NO">NO</label><br>
                                    @if ($errors->has('finance'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('finance') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="financeType" class="col-md-4 col-form-label text-md-right">Tipo de financiamiento</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('financeType') is-invalid @enderror" name="financeType" id="financeType" value="{{ old('financeType')}}">

                                    @if ($errors->has('financeType'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('financeType') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @include('partials.inputSave')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@extends('layouts.foot')