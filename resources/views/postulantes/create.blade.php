{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Create ')
 
{{-- heredamos del yield(content) --}}
@section('content')
    <form class="form-group" method="POST" action="/postulantes" enctype="multipart/form-data">
        @csrf
        <p>  </p>
        <div class="form-group">
            <nav class="navbar bg-info">
                <p>1. Perfil</p>
            </nav>
            <label for="">Nombres</label>
            <input type="text" name="name"  class="form-control"> 
            <label for="">Apellidos</label>
            <input type="text" name="lastname" class="form-control">
            <label for="">Intro</label>
            <input type="text" name="Intro" class="form-control">
            <label for="">Numero</label>
            <input type="text" name="numero" class="form-control">
            <p>  </p>
            <nav class="navbar bg-info">
                <p>2. Datos de contacto</p>
            </nav>
            <label for="">Seleccionar un pais</label>
            <select class="custom-select" name='namecountry' name='countryid'>
                @foreach($posts as $post)
                    <option value={{$post->name}}>{{$post->name}}</option>
                @endforeach
                <h1> posts </h1>
            </select> 
            {{-- {{ $posts[0]->languages[0]->name }} --}}

            <label for="">Estado-Ciudad</label>
            <input type="text" name="namestate" class="form-control">
            <label for="">Codigo Postal</label>
            <input type="text" name="codigopostal" class="form-control">
            <label for="">Perfil LinkeIn</label>
            <input type="text" name="linkedin" class="form-control">
            <label for="">Sitio Web</label>
            <input type="text" name="sitioweb" class="form-control">
            <p>  </p>

            <nav class="navbar bg-info">
                <p>3. Experiencia</p>
            </nav>
            <label for="">Puesto</label>
            <input type="text" name="rol" class="form-control">
            <label for="">Empresa</label>
            <input type="text" name="namecompany" class="form-control">
            <label for="">Desde</label>
            <input type="text" name="from" class="form-control">
            <label for="">Hasta</label>
            <input type="text" name="to" class="form-control">
            <label for="">Salario</label>
            <input type="text" name="salary" class="form-control">
            <p>  </p>
            
            <nav class="navbar bg-info">
                <p>4. Idioma</p>
            </nav>
            <label for="">Cargar un Idioma</label>
            <input type="text" name="language" class="form-control">
            <p>  </p>
            <nav class="navbar bg-info">
                Cargar Foto de Perfil
            </nav>
            <div class="form-group">
                <label for=""></label>
                {{-- se usa tipo file para manejar archivos de imagen --}}
                <input type="file" class="form-control-file" name="avatar">
            </div>

        </div>
        <button type=submit class="btn btn-primary">Guardar</button>
    </form>
@endsection
