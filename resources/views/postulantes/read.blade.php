{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Read ')
 
{{-- heredamos del yield(content) --}}
@section('content')

    <nav class="navbar  bg-info">
        <p href="#" class="navbar-brand">Postulante</p>
    </nav>
    @foreach($userdatas as $u)
        @if($loop->last)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{$u->name}}{{$u->lastname}}</h5>
                    <p class="card-text"> {{$u->Intro}}</p>
                    <p class="card-text"><small class="text-muted">{{$u->numero}}</small></p>
                    </div>
                </div>
                </div>
            </div>
          @endif
    @endforeach



@endsection