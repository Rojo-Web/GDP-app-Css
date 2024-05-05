@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Proyecto
@endsection
@if (Auth::check())
@if (Auth::user()->rol == "Admin" || Auth::user()->rol == "Gestor")
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
            <h1 style="text-align: center; color:#009d58;">Editar proyecto</h1>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

