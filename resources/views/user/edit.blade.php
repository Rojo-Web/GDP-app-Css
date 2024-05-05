@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} User
@endsection
@if (Auth::check())
@if (Auth::user()->rol == "Admin")
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

            <h1 style="text-align: center;color:#009d58; ">Editar usuario</h1>

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form')

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
