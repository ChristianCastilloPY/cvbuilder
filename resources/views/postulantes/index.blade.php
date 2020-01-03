{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Create ')
 
{{-- heredamos del yield(content) --}}
@section('content')
    @foreach($postulantes as $postulante)
        <p>{{$postulante->name}}</p>
    @endforeach
@endsection