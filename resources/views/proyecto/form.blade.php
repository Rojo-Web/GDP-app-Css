


<div class="row" style="padding: 0% 5% 5% 5%;justify-content: center;">
    <div class="col" style="max-width: 30%;">
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $proyecto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <select class="form-select" id="estado" name="estado" required>
                <Option selected disabled value="">Elije uno</Option>
                @if($proyecto->estado != '')
                @foreach(['Iniciado', 'En ejecucion', 'Finalizado'] as $opcion)
                <option value="{{ $opcion }}" {{ $proyecto->estado == $opcion ? 'selected' : '' }}>
                    {{ $opcion }}
                </option>
                @endforeach
                @else
                <option value="Iniciado"> Iniciado </option>
                <option value="En ejecucion"> En ejecucion </option>
                <option value="Finalizado"> Finalizado </option>
                @endif
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lider_id" class="form-label">{{ __('Lider') }}</label>
            <select class="form-select" id="lider_id" name="lider_id" required>
                <Option selected disabled value="">Elije uno</Option>
                @foreach ($users as $user)
                @if($user->cedula == $proyecto->lider_id)
                <option selected value="{{$user->cedula}}"> {{$user->name}} </option>
                @else
                <option value="{{$user->cedula}}"> {{$user->name}} </option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('lider_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <textarea type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $proyecto?->descripcion) }}" id="descripcion" placeholder="Descripcion" style="resize: vertical; field-sizing: content;  min-height: 100px;">{{$proyecto?->descripcion}}</textarea>
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col" style="max-width: 30%;">
        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ substr(old('fecha_inicio', $proyecto?->fecha_inicio), 0, 10) }}" id="Fecha/Cita" name="fecha_inicio">
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_final" class="form-label">{{ __('Fecha Final') }}</label>
            <input type="date" class="form-control @error('fecha_final') is-invalid @enderror" value="{{ substr(old('fecha_final', $proyecto?->fecha_final), 0, 10) }}" id="Fecha/Cita" name="fecha_final">
            {!! $errors->first('fecha_final', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="integrantes">Selecciona los integrantes con [control]:</label>
            <select id="integrantes" class="form-select" name="integrantes[]" multiple>
                @foreach ($users as $user)
                <option value="{{$user->cedula}}"> {{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row" style="display: inline-flex; justify-content: end; width: 100%; gap: 10px;">
            <button type="submit" class="btn btn-primary" style="width: 30%;">{{ __('Submit') }}</button>
            <a href="{{ route('proyectos.index')}}" class="btn btn-warning" style="width: 30%;">cancel</a>
        </div>
    </div>
</div>
