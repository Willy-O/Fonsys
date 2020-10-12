@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiarios') }}</div>

                    <div class="card-body">
                        <form action="{{ route('beneficiaries.update', $beneficiary->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}


                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right" >Nombre</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('name') is-invalid @enderror" name="name" id="name" max="20" value="{{ $beneficiary->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                
                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" name="lastName" id="lastName" class="form-control @error('lastName') is-invalid @enderror" max="20" value="{{ $beneficiary->lastName }}">

                                    @if ($errors->has('lastName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>

                                <div class="col-md-6">
                                    <input type="number" autocomplete="off" name="cedula" id="cedula" class="form-control @error('cedula') is-invalid @enderror" min="0" pattern="[0-9]" max="99999999" maxlength="10" value="{{ $beneficiary->cedula }}">

                                    @if ($errors->has('cedula'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>
                                
                                <div class="col-md-6">
                                    <input type="radio" id="m" name="gender" value="male">
                                    <label for="male">Masculino</label><br>
                                    <input type="radio" id="f" name="gender" value="female">
                                    <label for="female">Femenino</label><br>
                                    <input type="radio" id="o" name="gender" value="other">
                                    <label for="other">Other</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dateBorn" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                                <div class="col-md-6">
                                    <input type="date" autocomplete="off" name="dateBorn" class="form-control @error('dateBorn') is-invalid @enderror" id="dateBorn" value="{{ $beneficiary->dateBorn }}">

                                    @if ($errors->has('dateBorn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dateBorn') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                <div class="col-md-6">
                                    <input type="email" autocomplete="off" name="email" class="form-control @error('email') is-invalid @enderror" id="email" max="50" value="{{ $beneficiary->email }}">
                                    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
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
                                    <div class="row ml-1">                                     

                                        <select name="codeCellPhone" class="form-control col-md-4 @error('codeCellPhone') is-invalid @enderror" id="codeCellPhone" value="{{ $beneficiary->codeCellphone }}">
                                            <option value="0{{ $beneficiary->codeCellPhone }}">0{{ $beneficiary->codeCellPhone }}</option>
                                            @foreach ($codeCellPhone as $item)
                                                <option value="0{{$item}}">0{{$item}}</option>
                                            @endforeach
                                        </select>
                                        
                                        <span class="col-md-1"></span>

                                        <input type="number" autocomplete="off" name="cellPhone" class="form-control col-md-6 @error('cellPhone') is-invalid @enderror" id="cellPhone" min="0" max="9999999" maxlength="7" pattern="[0-9]" value="{{ $beneficiary->cellPhone }}">
                                    </div>
                                   
                                    @if ($errors->has('codeCellPhone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('codeCellPhone') }}</strong>
                                        </span>
                                    @else
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cellPhone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="homePhone" class="col-md-4 col-form-label text-md-right">Número local</label>
                                <div class="col-md-6">
                                    <div class="row ml-1">
                                        <select name="codeHomePhone" value="{{ old('codeHomePhone')}}" class="form-control col-md-4 @error('codeHomePhone') is-invalid @enderror" id="codeHomePhone">
                                            <option value="0{{ $beneficiary->codeHomePhone }}">0{{ $beneficiary->codeHomePhone }}</option>
                                            @foreach ($codeHomePhone as $item)
                                                <option value="0{{$item}}">0{{$item}}</option>
                                            @endforeach
                                        </select>
                                            <span class="col-md-1"></span>
                                        <input type="number" autocomplete="off" name="homePhone" class="form-control col-md-6 @error('homePhone') is-invalid @enderror" id="homePhone" min="0" max="9999999" maxlength="7" pattern="[0-9]" value="{{ $beneficiary->homePhone }}">
                                    </div>
                                    @if ($errors->has('codeHomePhone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('codeHomePhone') }}</strong>
                                        </span>
                                    @else
                                        <span class="help-block">
                                            <strong>{{ $errors->first('homePhone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education" class="col-md-4 col-form-label text-md-right">Nivel academico</label>

                                <div class="col-md-6">
                                    <select name="education" class="form-control @error('education') is-invalid @enderror" id="education">
                                        <option value="{{$beneficiary->education}}">{{$beneficiary->education}}</option>
                                        <option value="primaria">primaria</option>
                                        <option value="bachiller">bachiller</option>
                                        <option value="universitario">universitaria</option>
                                        <option value="postgrado">Post grado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ethnicGroup" class="col-md-4 col-form-label text-md-right">Grupo étnico</label>

                                <div class="col-md-6">
                                    <select name="ethnicGroup" class="form-control @error('ethnicGroup') is-invalid @enderror" id="ethnicGroup">
                                        <option value="{{$beneficiary->ethnicGroup}}">{{$beneficiary->ethnicGroup}}</option>
                                        <option value="ad">ad</option>
                                        <option value="da">da</option>
                                        <option value="aa">aa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="workAddress" class="col-md-4 col-form-label text-md-right">Dirección de trabajo</label>

                                <div class="col-md-6">
                                    <textarea name="workAddress" class="form-control @error('workAddress') is-invalid @enderror" id="workAddress" cols="30" rows="3">{{$beneficiary->workAddress}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="publicWorker" class="col-md-4 col-form-label text-md-right">¿Trabajador público?</label>

                                <div class="col-md-6">
                                        <input type="radio" id="1" name="publicWorker" value="1">
                                    <label for="1">Si</label><br>
                                        <input type="radio" id="0" name="publicWorker" value="0">
                                    <label for="0">No</label><br>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="workInstitute" class="col-md-4 col-form-label text-md-right">Institución pública en la que trabaja</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('workInstitute') is-invalid @enderror" name="workInstitute" id="workInstitute" max="50" value="{{ $beneficiary->workInstitute }}">

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
                                    <input type="text" autocomplete="off" class="form-control @error('conmunity') is-invalid @enderror" name="conmunity" id="conmunity" max="50" value="{{ $beneficiary->conmunity }}">
                                    
                                    @if ($errors->has('conmunity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('conmunity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="finance" class="col-md-4 col-form-label text-md-right">¿Ha optenido una subvención anteriormente?</label>

                                <div class="col-md-6">
                                    <input type="radio" id="1" name="finance" value="1">
                                    <label for="1">Si</label><br>
                                    <input type="radio" id="0" name="finance" value="0">
                                    <label for="0">No</label><br>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="financeType" class="col-md-4 col-form-label text-md-right">Tipo de financiamiento</label>

                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('financeType') is-invalid @enderror" name="financeType" id="financeType" value="{{ $beneficiary->financeType }}">

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