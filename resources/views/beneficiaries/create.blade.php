@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beneficiarios') }}</div>

                    <div class="card-body">
                        <form action="{{ route('beneficiaries.store')}}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" autocomplete="off" class="form-control @error('name') is-invalid @enderror" name="name" id="name" max="20" value="{{ old('name')}}">

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
                                    <input type="text" autocomplete="off" name="lastName" id="lastName" class="form-control @error('name') is-invalid @enderror" max="20" value="{{ old('lastName')}}">

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
                                    <input type="number" autocomplete="off" name="cedula" id="cedula" class="form-control @error('cedula') is-invalid @enderror" min="0" pattern="[0-9]" max="99999999" maxlength="10" value="{{ old('cedula')}}">

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
                                    <input type="radio" id="m" name="gender" value="m">
                                    <label for="male">Masculino</label><br>
                                    <input type="radio" id="f" name="gender" value="f">
                                    <label for="female">Femenino</label><br>
                                    <input type="radio" id="o" name="gender" value="o">
                                    <label for="other">Other</label>


                                    @if ($errors->has('gender'))
                                        <br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="dateBorn" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                                <div class="col-md-6">
                                    <input type="date" autocomplete="off" name="dateBorn" class="form-control @error('dateBorn') is-invalid @enderror" id="dateBorn" value="{{ old('dateBorn')}}">

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
                                    <input type="email" autocomplete="off" name="email" class="form-control @error('email') is-invalid @enderror" id="email" max="50" value="{{ old('email')}}">
                                    
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
                                    <textarea name="homeAddress" class="form-control @error('homeAddress') is-invalid @enderror" id="homeAddress" cols="30" rows="3">{{ old('homeAddress')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellPhone" class="col-md-4 col-form-label text-md-right">Número celular</label>

                                <div class="col-md-6">
                                    <div class="row ml-1">                                     

                                        <select name="codeCellPhone" class="form-control col-md-4 @error('codeCellPhone') is-invalid @enderror" id="codeCellPhone" value="{{ old('codeCellPhone')}}">
                                            <option value="{{ old('codeCellPhone') }}">{{ old('codeCellPhone')}}</option>
                                            @foreach ($codeCellPhone as $item)
                                                <option value="0{{$item}}">0{{$item}}</option>
                                            @endforeach
                                        </select>
                                        
                                        <span class="col-md-1"></span>

                                        <input type="number" autocomplete="off" name="cellPhone" class="form-control col-md-6 @error('cellPhone') is-invalid @enderror" id="cellPhone" min="0" max="999999" maxlength="7" pattern="[0-9]" value="{{ old('cellPhone')}}">
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
                                            <option value="{{ old('codeHomePhone')}}">{{ old('codeHomePhone')}}</option>
                                            @foreach ($codeHomePhone as $item)
                                                <option value="0{{$item}}">0{{$item}}</option>
                                            @endforeach
                                        </select>
                                            <span class="col-md-1"></span>
                                        <input type="number" autocomplete="off" name="homePhone" class="form-control col-md-6 @error('homePhone') is-invalid @enderror" id="homePhone" min="0" max="9999999" maxlength="7" pattern="[0-9]" value="{{ old('homePhone')}}">
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
                                        <option value="{{ old('education')}}">{{ old('education')}}</option>
                                        @foreach ($education as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('education'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('education') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ethnicGroup" class="col-md-4 col-form-label text-md-right">Grupo étnico</label>

                                <div class="col-md-6">
                                    <select name="ethnicGroup" class="form-control @error('ethnicGroup') is-invalid @enderror" id="ethnicGroup">
                                        <option value="{{ old('ethnicGroup')}}">{{ old('ethnicGroup')}}</option>
                                        @foreach ($ethnicGroup as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
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
