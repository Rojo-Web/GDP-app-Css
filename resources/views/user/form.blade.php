<div class="row" style="padding: 0% 5% 5% 5%;justify-content: center;">
    <div class="col" style="max-width: 30%;">
        <div class="form-group mb-2 mb20">
            <label for="cedula" class="form-label">{{ __('Cedula') }}</label>
            <input type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{ old('cedula', $user?->cedula) }}" id="cedula" placeholder="Cedula">
            {!! $errors->first('cedula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col" style="max-width: 30%;">
        <div class="form-group mb-2 mb20">
            <label for="rol" class="form-label">{{ __('Rol') }}</label>
            <select id="rol" name="rol" class="form-select mt-1" required>
                <Option selected disabled value="">Elije uno</Option>
                @if($user->rol != '')
                @foreach(['Admin', 'Gestor', 'Integrante'] as $opcion)
                <option value="{{ $opcion }}" {{ $user->rol == $opcion ? 'selected' : '' }}>
                    {{ $opcion }}
                </option>
                @endforeach
                @else
                <option value="Admin"> Admin </option>
                <option value="Gestor"> Gestor </option>
                <option value="Integrante"> Integrante </option>
                @endif

            </select>
            @if($errors->has('rol'))
            <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rol') }}</strong>
            </div>
            @endif
        </div>
        <!--Password-->
        <div class="form-group mb-2 mb20">
            <label for="password" class="form-label">{{ __('Password') }}</label>

            <div class="form-group mb-2 mb20">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', $user?->password) }}" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-2 mb20">
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

            <div class="form-group mb-2 mb20">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 30px;">
        <button type="submit" class="btn btn-primary" style="width: 30%;">{{ __('Submit') }}</button>
        <a href="{{ route('users.index')}}" class="btn btn-warning" style="width: 30%;">cancel</a>

    </div>
</div>
</div>
