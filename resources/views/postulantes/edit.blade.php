{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes Edit ')
 
{{-- heredamos del yield(content) --}}
@section('content')
<p></p>
{{-- action es la ruta a la cual se va a referir el formulario --}}
<form class="form-group" method="POST" action="/postulantes/{{$userdatas->id}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <p>  </p>
        <div class="form-group">
            <nav class="navbar bg-info">
                <p>1. Perfil</p>
            </nav>
            <label for="">Nombres</label>
            <input type="text" name="name"  value="{{$userdatas->name}}" class="form-control"> 
            <label for="">Apellidos</label>
            <input type="text" name="lastname"  value="{{$userdatas->lastname}}" class="form-control">
            <label for="">Intro</label>
            <input type="text" name="Intro"  value="{{$userdatas->Intro}}" class="form-control">
            <label for="">Numero</label>
            <input type="text" name="numero"  value="{{$userdatas->numero}}" class="form-control">
            <p>  </p>
            <nav class="navbar bg-info">

                <p>2. Datos de contacto</p>
            </nav>
            <label for="">Seleccionar un pais</label>
            <input class="custom-select" name='namecountry'  value="{{$countries->name}}" >
            <label for="">Seleccionar un Estado</label>
            <input class="custom-select" name='namestate' value="{{$states->name}}" >
            <nav class="navbar bg-info">

                <p>3. Experiencia</p>
            </nav>

            <label for="">Puesto</label>
            <input type="text" name="rol" value="{{$rols->title}}" class="form-control">
            <label for="">Empresa</label>
            <input type="text" name="namecompany" value="{{$companies->name}}" class="form-control">
            <label for="">Desde</label>
            <input type="text" name="from" value="{{$jobs->from}}" class="form-control">
            <label for="">Hasta</label>
            <input type="text" name="to" value="{{$jobs->to}}" class="form-control">
            <label for="">Salario</label>
            <input type="text" name="salary" value="{{$jobs->salary}}" class="form-control">
            <p>  </p>

            <nav class="navbar bg-info">
                <p>4. Idioma</p>
            </nav>

            <label for="">Cargar un Idioma</label>
            <input type="text" name="language" value="{{$languages->name}}" class="form-control">
            <p>  </p>
            
            <nav class="navbar bg-info">
                Cargar Foto de Perfil
            </nav>
            <div class="form-group">
                <label for=""></label>
                <input type="file" class="form-control-file" value="{{$userdatas->avatar}}" name="avatar">
            </div>
        </div>
        <button type=submit class="btn btn-primary">Actualizar</button>
    </form>


@endsection