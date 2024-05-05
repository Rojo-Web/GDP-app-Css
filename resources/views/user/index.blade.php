@extends('layouts.app')

@section('template_title')
Users
@endsection
@if (Auth::check())
@if (Auth::user()->rol == "Admin")
@section('content')


<h1 class="fw-bold" style="display: flex;justify-content: center; color:#198754">Usuarios</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success m-4">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card-body " style="padding: 0% 10% 10% 10%; border-radius: 30%;">
    <div class="container-fluid">
        <div class="card" style="width: 15%; background-color: #0159A1; color: white;">
            <div class="card-body" style="display: inline-flex;">
                <h5 style="margin-right: 5px;">Total usuarios: </h5> <strong> {{$cantidad}}</strong>
            </div>
        </div>
        <!-- Mostrar enlaces de paginación -->
        <div style="display: flex; justify-content: flex-end; margin-bottom: 10px; padding-right: 10px; width: 100%;">
            @if ($users->previousPageUrl())
            <a href="{{ $users->previousPageUrl() }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg></a>
            @endif

            @if ($users->nextPageUrl())
            <a href="{{ $users->nextPageUrl() }}" style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg></a>
            @endif
        </div>
        <div style="display: flex; justify-content: flex-end;">
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                {{ __('Crear Usuario') }}
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead">
                    <tr style="text-align: center;">
                        <th>No</th>

                        <th>Cedula</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rol</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr style="text-align: center;">
                        <td>{{ ++$i }}</td>

                        <td>{{ $user->cedula }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol }}</td>

                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('users.show', $user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg></a>
                                <a class="btn btn-sm btn-success" href="{{ route('users.edit', $user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                    </svg></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No tienes permisos para entrar a esta pagina</h1>
@endsection
@endif
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
