@if ($type === 'created' || $type === 'edit')
    @csrf
@endif

<div class="form-group row">
    <label for="project_title" class="col-md-4 col-form-label text-md-right">{{ __('Project title') }}</label>

    <div class="col-md-6">
        <select 
            class="form-control @error('project_title') is-invalid @enderror" 
            name="project_title" 
            id="project_title"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            @if ($type === 'edit')
                aria-readonly="true"
            @endif
            >
            @if ($type === 'created')
                <option value="">Seleccione un projecto</option>
            @endif
            @if ($type === 'edit'))
               <option value="{{ $projectInfo->project_data_id }}">{{ $project_title[0]->tittle }}</option>
            @else
            @foreach ($project_title as $id =>$title)
                <option value="{{$id}}">{{$title}}</option>                                    
            @endforeach
           @endif
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="summary" class="col-md-4 col-form-label text-md-right">Resumen</label>
    
    <div class="col-md-6">
        <textarea 
            name="summary"
            class="form-control @error('summary') is-invalid @enderror" 
            id="summary" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('summary', $projectInfo->summary) }}</textarea>
        @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{ $errors->first('summary') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="time"  class="col-md-4 col-form-label text-md-right">Tiempo</label>
    
    <div class="col-md-6">
        <select 
            name="time" 
            class="form-control @error('time') is-invalid @enderror" 
            id="time"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif>
            <option value="{{ $projectInfo->time }}">{{ $projectInfo->time }}</option>
            <option value="1">1 año</option>
            <option value="3">3 años</option>
            <option value="5">5 años</option>
        </select>
        @if ($errors->has('time'))
            <span class="help-block">
                <strong>{{ $errors->first('time') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="problem"  class="col-md-4 col-form-label text-md-right">Problema</label>
   
    <div class="col-md-6">
        <textarea 
            name="problem" 
            class="form-control @error('problem') is-invalid @enderror" 
            id="problem" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('problem', $projectInfo->problem) }}</textarea>
        @if ($errors->has('problem'))
            <span class="help-block">
                <strong>{{ $errors->first('problem') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="precedent"  class="col-md-4 col-form-label text-md-right">Presedentes</label>
    
    <div class="col-md-6">
        <textarea 
            name="precedent" 
            class="form-control @error('precedent') is-invalid @enderror" 
            id="precedent" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('precedent', $projectInfo->precedent) }}</textarea>
        @if ($errors->has('precedent'))
            <span class="help-block">
                <strong>{{ $errors->first('problem') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="justification"  class="col-md-4 col-form-label text-md-right">Justificación</label>

    <div class="col-md-6">
        <textarea 
            name="justification" 
            class="form-control @error('justification') is-invalid @enderror" 
            id="justification" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('justification', $projectInfo->justification) }}</textarea>
        @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{ $errors->first('summary') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="generalObjective"  class="col-md-4 col-form-label text-md-right">Objetivo general</label>

    <div class="col-md-6">
        <input 
            type="text" 
            autocomplete="off" 
            class="form-control @error('generalObjective') is-invalid @enderror" 
            name="generalObjective" 
            id="generalObjective" 
            max="20" 
            value="{{ old('generalObjective', $projectInfo->generalObjective)}}"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >
        
        @if ($errors->has('generalObjective'))
            <span class="help-block">
                <strong>{{ $errors->first('generalObjective') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="specificObjective"  class="col-md-4 col-form-label text-md-right">Objetivos especificos</label>
    
    <div class="col-md-6">
        <textarea 
            name="specificObjective" 
            class="form-control @error('specificObjective') is-invalid @enderror" 
            id="specificObjective" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('specificObjective', $projectInfo->specificObjective) }}</textarea>
        @if ($errors->has('specificObjective'))
            <span class="help-block">
                <strong>{{ $errors->first('specificObjective') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="hopedResults"  class="col-md-4 col-form-label text-md-right">Resultados esperados</label>
  
    <div class="col-md-6">
        <textarea 
            name="hopedResults" 
            class="form-control @error('hopedResults') is-invalid @enderror" 
            id="hopedResults" 
            cols="30"
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('hopedResults', $projectInfo->hopedResults) }}</textarea>
        @if ($errors->has('hopedResults'))
            <span class="help-block">
                <strong>{{ $errors->first('hopedResults') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="hopedEfects"  class="col-md-4 col-form-label text-md-right">Efectos esperados</label>
    
    <div class="col-md-6">
        <textarea 
            name="hopedEfects" 
            class="form-control @error('hopedEfects') is-invalid @enderror" 
            id="hopedEfects" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('hopedEfects', $projectInfo->hopedEfects ) }}</textarea>
        @if ($errors->has('hopedEfects'))
            <span class="help-block">
                <strong>{{ $errors->first('hopedEfects') }}</strong>
            </span>
        @endif
    </div>
</div>
