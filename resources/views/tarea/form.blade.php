    <div class="row" style="padding: 0% 5% 5% 5%;justify-content: center;">
        <div class="col" style="max-width: 30%;">
            <div class="form-group mb-2 mb20">
                <label for="nombre" class="form-label">{{ __('Tarea') }}</label>
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $tarea?->nombre) }}" id="nombre" placeholder="Tarea">
                {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="estado" class="form-label">{{ __('Estado') }}</label>
                <select class="form-select" id="estado" name="estado" required>
                    <Option selected disabled value="">Elije uno</Option>
                    @if($tarea->estado != '')
                    @foreach(['Iniciado', 'En ejecucion', 'Finalizado'] as $opcion)
                    <option value="{{ $opcion }}" {{ $tarea->estado == $opcion ? 'selected' : '' }}>
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
                <label for="responsable_id" class="form-label">{{ __('Responsable') }}</label>
                <select class="form-select" id="responsable_id" name="responsable_id" required>
                    <Option selected disabled value="">Elije uno</Option>
                    @foreach ($users as $user)
                    @if($user->cedula == $tarea->responsable_id)
                    <option selected value="{{$user->cedula}}"> {{$user->name}} </option>
                    @else
                    <option value="{{$user->cedula}}"> {{$user->name}} </option>
                    @endif
                    @endforeach
                </select>
                {!! $errors->first('responsable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20">
                <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                <textarea type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $tarea?->descripcion) }}" id="descripcion" placeholder="Descripcion" style="resize: vertical; field-sizing: content;  min-height: 100px;">{{$tarea?->descripcion}}</textarea>
                {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>


        </div>
        <div class="col" style="max-width: 30%;">
        <div class="form-group mb-2 mb20">
                <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
                <input type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ substr(old('fecha_inicio', $tarea?->fecha_inicio), 0, 10) }}" id="Fecha/Cita" name="fecha_inicio">
                {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="fecha_final" class="form-label">{{ __('Fecha Final') }}</label>
                <input type="date" class="form-control @error('fecha_final') is-invalid @enderror" value="{{ substr(old('fecha_final', $tarea?->fecha_final), 0, 10) }}" id="Fecha/Cita" name="fecha_final">
                {!! $errors->first('fecha_final', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20">
                <label for="proyecto_id" class="form-label">{{ __('Proyecto') }}</label>
                <select class="form-select" id="proyecto_id" name="proyecto_id" required>
                    <Option selected disabled value="">Elije uno</Option>
                    @foreach ($proyectos as $proyecto)
                    @if($proyecto->id == $tarea->proyecto_id)
                    <option selected value="{{$proyecto->id}}"> {{$proyecto->nombre}} </option>
                    @else
                    <option value="{{$proyecto->id}}"> {{$proyecto->nombre}} </option>
                    @endif
                    @endforeach
                </select>
                {!! $errors->first('proyecto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="row" style="display: inline-flex; justify-content: end; width: 100%; gap: 10px;">
                <button type="submit" class="btn btn-primary" style="width: 30%;">{{ __('Submit') }}</button>
                <a href="{{ route('tareas.index')}}" class="btn btn-warning" style="width: 30%;">cancel</a>


            </div>

        </div>

    </div>
