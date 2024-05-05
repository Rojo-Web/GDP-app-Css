@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Tarea
@endsection
@if (Auth::check())
@section('content')
<section class="content container-fluid">


    <div class="card-body bg-white">
        <form method="POST" action="{{ route('tareas.store') }}" role="form" enctype="multipart/form-data">
        <h1 style="text-align: center;color:#009d58; ">Nueva tarea</h1>
            @csrf

            @include('tarea.form')

        </form>
    </div>

</section>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
