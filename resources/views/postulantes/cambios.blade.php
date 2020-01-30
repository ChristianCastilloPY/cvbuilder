{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Create ')
 
{{-- heredamos del yield(content) --}}
@section('content')

    <h5>Se realizaron algunos cambios, click en CV BUILDER para retornar al Create</h5>
@endsection