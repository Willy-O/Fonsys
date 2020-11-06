@csrf

<div class="form-group">
    <label for="project" class="col-md-4 col-form-label">{{ __('Project') }}</label>
    <select name="project" id="project" class="form-control">
        <option value="">{{ __('Select a project') }}</option>
        @foreach ($projectsData as $id => $title)
          <option value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="ticket" class="col-md-4 col-form-label">Exposición de motivos</label>

    <input 
      id="ticket" 
      type="hidden" 
      name="ticket" 
      id="ticket"
      required>
    
    <trix-editor 
        class="@error('ticket') is-invalid @enderror"
        input="ticket"
        value="{{ old('ticket', $tracking->ticket) }}">
    </trix-editor>
    
    @if ($errors->has('ticket'))
        <span class="help-block" role="alert">
            <strong>{{ $errors->first('ticket') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="files" class="col-md-4 col-form-label">Archivos</label>

    <input 
      type="text" 
      class="form-control @error('files') is-invalid @enderror" 
      name="files" 
      id="files" 
      max="20" 
      value="{{ old('files', $tracking->files ) }}">


    @if ($errors->has('files'))
        <span class="help-block">
            <strong>{{ $errors->first('files') }}</strong>
        </span>
    @endif
</div>
