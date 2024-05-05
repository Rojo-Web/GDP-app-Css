@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tarea
@endsection
@if (Auth::check())
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
            <h1 style="text-align: center; color:#009d58;">Editar tarea</h1>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tareas.update', $tarea->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tarea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
