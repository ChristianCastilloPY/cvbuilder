{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Create ')
 
{{-- heredamos del yield(content) --}}
@section('content')

<p> </p>
    @foreach($postulantes as $postulante)
        {{-- <nav class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand">Id     Nombre      Apellido</a>
        </nav> --}}
        <ul class="list-inline navbar navbar-dark bg-info">
            <li class="list-inline-item ml-4 ">  <p class="text-light">Id:</p>   {{$postulante->id}}</li>
            <li class="list-inline-item ml-4 ">  <p class="text-light">Nombre:</p>   {{$postulante->nombre}}</li>
            <li class="list-inline-item ml-5"><p class="text-light">Apellido:</p>  {{$postulante->apellido}}</li>
            <li class="list-inline-item ml-5"><p class="text-light">Posicion:</p>   {{$postulante->posicion}}</li>
            <li class="list-inline-item ml-4"><p class="text-light">Telefono:</p>  {{$postulante->numero}}</li>
            <li class="list-inline-item ml-4"><p class="text-light">Correo:</p>    {{$postulante->correo}}</li>
            <li class="list-inline-item ml-4"><p class="text-light">Pais:</p> {{$postulante->pais}}</li>
            <li class="list-inline-item ml-4"><p class="text-light">Direccion:</p>    {{$postulante->direccion}}</li>

        </ul>
    @endforeach

@endsection