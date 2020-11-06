@if ($type === 'edit' || $type === 'created')
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
    <label for="results" class="col-md-4 col-form-label text-md-right">Resultados</label>

    <div class="col-md-6">
        <textarea 
            name="results" 
            class="form-control @error('results') is-invalid @enderror" 
            id="results" 
            cols="30" 
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('results', $clousure->results) }}</textarea>
        @if ($errors->has('results'))
            <span class="help-block">
                <strong>{{ $errors->first('results') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="efects" class="col-md-4 col-form-label text-md-right">Efectos</label>

    <div class="col-md-6">
        <textarea 
            name="efects" 
            class="form-control @error('efects') is-invalid @enderror" 
            id="efects" 
            cols="30"
            rows="3"
            @if ($type === 'showOnly')
                disabled="disabled"
            @endif
            >{{ old('efects', $clousure->efects) }}</textarea>
        @if ($errors->has('efects'))
            <span class="help-block">
                <strong>{{ $errors->first('efects') }}</strong>
            </span>
        @endif
    </div>
</div>