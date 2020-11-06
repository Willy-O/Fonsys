@if ($type === 'edit' || $type === 'created')
    @csrf
@endif

<div class="form-group row">
    <label for="beneficiary_id" class="col-md-4 col-form-label text-md-right">Beneficiario</label>
    <div class="col-md-6 ">
        <select 
            name="beneficiary_id"
            id="beneficiary_id"
            class="form-control @error('beneficiary_id') is-invalid @enderror"
            value="{{ old('beneficiary_id') }}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            @if ($type === 'edit')
                aria-readonly="true"
            @endif
            >
            @if ($type === 'created')
                <option value="">Introduzca la cedula del beneficiario</option>
            @endif            
            @foreach ($beneficiaries as $beneficiary_id => $beneficiary_cedula)
                <option value="{{ $beneficiary_id }}">{{ $beneficiary_cedula }}</option>
            @endforeach
        </select>

        @if ($errors->has('beneficiary_id'))
            <span class="help-block">
                <strong>{{ $errors->first('beneficiary_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="tittle" class="col-md-4 col-form-label text-md-right">Titulo</label>

    <div class="col-md-6">
        <input 
            type="text" 
            class="form-control @error('tittle') is-invalid @enderror" 
            name="tittle" 
            id="tittle" 
            max="20" 
            value="{{ old('tittle', $projectData->tittle  )}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >

        @if ($errors->has('tittle'))
            <span class="help-block">
                <strong>{{ $errors->first('tittle') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="sum" class="col-md-4 col-form-label text-md-right">Monto</label>

    <div class="col-md-6">
        <input 
            type="number" 
            class="form-control @error('sum') is-invalid @enderror" 
            name="sum" 
            id="sum" 
            min="0" 
            value="{{ old('sum', $projectData->sum)}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >
        @if ($errors->has('sum'))
            <span class="help-block">
                <strong>{{ $errors->first('sum') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="objective" class="col-md-4 col-form-label text-md-right">Objetivo</label>

    <div class="col-md-6">
        <input 
            type="text" 
            class="form-control @error('objective') is-invalid @enderror" 
            name="objective" 
            id="objective" 
            max="20" 
            value="{{ old('objective', $projectData->objective)}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >

        @if ($errors->has('objective'))
            <span class="help-block">
                <strong>{{ $errors->first('objective') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="addressLocation" class="col-md-4 col-form-label text-md-right">Ubicación</label>

    <div class="col-md-6">
        <input 
            type="text" 
            class="form-control @error('addressLocation') is-invalid @enderror" 
            name="addressLocation" 
            id="addressLocation" 
            max="20" 
            value="{{ old('addressLocation', $projectData->addressLocation )}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif  
            >

        @if ($errors->has('addressLocation'))
            <span class="help-block">
                <strong>{{ $errors->first('addressLocation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="area" class="col-md-4 col-form-label text-md-right">Motor productivo</label>

    <div class="col-md-6">
        <select 
            name="area" 
            class="form-control @error('area') is-invalid @enderror" 
            id="area"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif  
            >
            <option value="{{ old('area', $projectData->area  )}}">{{ old('area', $projectData->area )}}</option>
            @foreach ($area as $item)
                <option value="{{ $item }}">{{ $item }}</option>
            @endforeach
        </select>

        @if ($errors->has('area'))
            <span class="help-block">
                <strong>{{ $errors->first('area') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="justification" class="col-md-4 col-form-label text-md-right">Justificación</label>

    <div class="col-md-6">
        <input 
            type="text" 
            class="form-control @error('justification') is-invalid @enderror" 
            name="justification" 
            id="justification" 
            max="20" 
            value="{{ old('justification', $projectData->justification)}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >

        @if ($errors->has('justification'))
            <span class="help-block">
                <strong>{{ $errors->first('justification') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="countPoint" class="col-md-4 col-form-label text-md-right">Punto de cuenta</label>

    <div class="col-md-6">
        <input 
            type="text" 
            class="form-control @error('countPoint') is-invalid @enderror" 
            name="countPoint" 
            id="countPoint" 
            max="20" 
            value="{{ old('countPoint', $projectData->countPoint)}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >

        @if ($errors->has('countPoint'))
            <span class="help-block">
                <strong>{{ $errors->first('countPoint') }}</strong>
            </span>
        @endif
    </div>
</div>