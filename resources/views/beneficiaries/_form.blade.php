@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
    <div class="col-md-6">
        <input 
            type="text"
            autocomplete="off"
            class="form-control @error('name') is-invalid @enderror" 
            name="name" 
            id="name" 
            max="20" 
            value="{{ old('name', $beneficiary->name ) }}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

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
        <input 
            type="text" 
            autocomplete="off" 
            name="lastName" 
            id="lastName" 
            class="form-control @error('name') is-invalid @enderror" 
            max="20" 
            value="{{ old('lastName', $beneficiary->lastName)}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

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
        <input 
            type="number" 
            autocomplete="off" 
            name="cedula" 
            id="cedula" 
            class="form-control @error('cedula') is-invalid @enderror" 
            min="0" 
            pattern="[0-9]" 
            max="99999999" 
            maxlength="10" 
            value="{{ old('cedula', $beneficiary->cedula)}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

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
        <input 
            type="radio" 
            id="m" 
            name="gender" 
            value="m" 
            @if ($beneficiary->gender === 'm')
                checked
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        <label for="male">Masculino</label><br>
        <input 
            type="radio" 
            id="f" 
            name="gender" 
            value="f" 
            @if ($beneficiary->gender === 'f')
                checked
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        <label for="female">Femenino</label><br>
        <input 
            type="radio" 
            id="o" 
            name="gender" 
            value="o" 
            @if ($beneficiary->gender === 'o')
                checked
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
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
        <input 
            type="date" 
            autocomplete="off" 
            name="dateBorn" 
            class="form-control @error('dateBorn') is-invalid @enderror" 
            id="dateBorn" 
            value="{{ old('dateBorn', $beneficiary->dateBorn )}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

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
        <input 
            type="email" 
            autocomplete="off" 
            name="email" 
            class="form-control @error('email') is-invalid @enderror" 
            id="email" 
            max="50" 
            value="{{ old('email', $beneficiary->email)}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        
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
        <textarea 
            name="homeAddress" 
            class="form-control @error('homeAddress') is-invalid @enderror" 
            id="homeAddress" 
            cols="30" 
            rows="3"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >{{ old('homeAddress', $beneficiary->homeAddress)}}</textarea>
        @if ($errors->has('homeAddress'))
            <span class="help-block">
                <strong>{{ $errors->first('homeAddress') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="cellPhone" class="col-md-4 col-form-label text-md-right">Número celular</label>

    <div class="col-md-6">
        <div class="row ml-1">                                     

            <select 
                name="codeCellPhone" 
                class="form-control col-md-4 @error('codeCellPhone') is-invalid @enderror" id="codeCellPhone" 
                value="{{ old('codeCellPhone', $beneficiary->codeCellPhone)}}"
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif
                >
                <option value="{{ old('codeCellPhone', '0'+$beneficiary->codeCellPhone) }}">{{ old('codeCellPhone', $beneficiary->codeCellPhone)}}</option>
                @foreach ($codeCellPhone as $item)
                    <option value="0{{$item}}">0{{$item}}</option>
                @endforeach
            </select>
            
            <span class="col-md-1"></span>

            <input 
                type="number" 
                autocomplete="off" 
                name="cellPhone" 
                class="form-control col-md-6 @error('cellPhone') is-invalid @enderror" 
                id="cellPhone" 
                min="0" 
                max="999999" 
                maxlength="7" 
                pattern="[0-9]" 
                value="{{ old('cellPhone', $beneficiary->cellPhone)}}"
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif
                >
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
            <select 
                name="codeHomePhone" 
                value="{{ old('codeHomePhone', $beneficiary->codeHomePhone)}}"
                class="form-control col-md-4 @error('codeHomePhone') is-invalid @enderror"
                id="codeHomePhone"
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif>
                
                <option value="{{ old('codeHomePhone', '0'+$beneficiary->codeHomePhone)}}">{{ old('codeHomePhone', $beneficiary->codeHomePhone)}}</option>
                @foreach ($codeHomePhone as $item)
                    <option value="0{{$item}}">0{{$item}}</option>
                @endforeach
            </select>

            <span class="col-md-1"></span>

            <input 
                type="number" 
                autocomplete="off" 
                name="homePhone" 
                class="form-control col-md-6 @error('homePhone') is-invalid @enderror" 
                id="homePhone" 
                min="0" 
                max="9999999" 
                maxlength="7" 
                pattern="[0-9]" 
                value="{{ old('homePhone', $beneficiary->homePhone)}}"
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif
                >
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
        <select 
            name="education"
            class="form-control @error('education') is-invalid @enderror" 
            id="education"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
            <option value="{{ old('education', $beneficiary->education)}}">{{ old('education', $beneficiary->education)}}</option>
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
        <select 
            name="ethnicGroup" 
            class="form-control @error('ethnicGroup') is-invalid @enderror" 
            id="ethnicGroup"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
            <option value="{{ old('ethnicGroup', $beneficiary->ethnicGroup)}}">{{ old('ethnicGroup', $beneficiary->ethnicGroup)}}</option>
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
        <textarea 
            name="workAddress" 
            class="form-control @error('workAddress') is-invalid @enderror" 
            id="workAddress" 
            cols="30" 
            rows="3"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >{{ old('workAddress', $beneficiary->workAddress)}}</textarea>
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
            <input 
                type="radio" 
                id="SI" 
                name="publicWorker" 
                value="SI" 
                @if ($beneficiary->publicWorker === 'SI')
                    checked
                @endif
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif>
        <label for="SI">SI</label><br>
            <input 
                type="radio" 
                id="NO" 
                name="publicWorker" 
                value="NO" 
                @if($beneficiary->publicWorker === 'NO')
                    checked
                @endif
                @if ($type === 'onlyShow')
                    disabled="disable"
                @endif
                >
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
        <input 
            type="text" 
            autocomplete="off" 
            class="form-control @error('workInstitute') is-invalid @enderror" 
            name="workInstitute" 
            id="workInstitute" 
            max="50" 
            value="{{ old('workInstitute',$beneficiary->workInstitute )}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

        @if ($errors->has('workInstitute'))
            <span class="help-block">
                <strong>{{ $errors->first('workInstitute') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="community" class="col-md-4 col-form-label text-md-right">Comuna en la que vive</label>

    <div class="col-md-6">
        <input 
            type="text" 
            autocomplete="off" 
            class="form-control @error('conmunity') is-invalid @enderror" 
            name="community" 
            id="community" 
            max="50" 
            value="{{ old('community', $beneficiary->community)}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        
        @if ($errors->has('community'))
            <span class="help-block">
                <strong>{{ $errors->first('community') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="finance" class="col-md-4 col-form-label text-md-right @error('finance') is-invalid @enderror">¿Ha optenido una subvención anteriormente?</label>

    <div class="col-md-6">
        <input 
            type="radio" 
            name="finance" 
            value="SI"
            @if ($beneficiary->finance === 'SI')
                checked
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        <label for="SI">SI</label>
        <br>

        <input 
            type="radio" 
            name="finance" 
            value="NO"
            @if ($beneficiary->finance === 'NO')
                checked
            @endif
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >
        <label for="NO">NO</label>
        <br>

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
        <input 
            type="text" 
            autocomplete="off" 
            class="form-control @error('financeType') is-invalid @enderror" 
            name="financeType" 
            id="financeType" 
            value="{{ old('financeType', $beneficiary->financeType)}}"
            @if ($type === 'onlyShow')
                disabled="disable"
            @endif
            >

        @if ($errors->has('financeType'))
            <span class="help-block">
                <strong>{{ $errors->first('financeType') }}</strong>
            </span>
        @endif
    </div>

</div>