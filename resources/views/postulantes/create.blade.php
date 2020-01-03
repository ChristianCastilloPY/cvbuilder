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
            <input type="text" name="nombre" class="form-control">
            <label for="">Apellidos</label>
            <input type="text" name="apellido" class="form-control">
            <label for="">Intro</label>
            <input type="text" name="intro" class="form-control">
            <label for="">Posicion</label>
            <input type="text" name="posicion" class="form-control">
            <p>  </p>

            <nav class="navbar bg-info">
                <p>2. Datos de contacto</p>
            </nav>
            <label for="">Numero de telefono</label>
            <input type="text" name="numero" class="form-control">
            <label for="">Correo electronico</label>
            <input type="text" name="correo" class="form-control">
            <label for="">Pais</label>
            <input type="text" name="pais" class="form-control">
            <label for="">Direccion</label>
            <input type="text" name="direccion" class="form-control">
            <label for="">Estado</label>
            <input type="text" name="estado" class="form-control">
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
            <input type="text" name="puesto" class="form-control">
            <label for="">Empresa</label>
            <input type="text" name="empresa" class="form-control">
            <label for="">Desde-Hasta</label>
            <input type="text" name="desdehastapuesto" class="form-control">
            <label for="">Description</label>
            <input type="text" name="descriptionpuesto" class="form-control">
            <p>  </p>
            
            <nav class="navbar bg-info">
                <p>4. Educacion</p>
            </nav>
            <label for="">Titulo/Formacion</label>
            <input type="text" name="titulo" class="form-control">
            <label for="">Escuela/Centro de Formacion</label>
            <input type="text" name="escuela" class="form-control">
            <label for="">Desde-Hasta</label>
            <input type="text" name="desdehastaeducacion" class="form-control">
            <label for="">Description</label>
            <input type="text" name="descriptioneducacion" class="form-control">
            <p>  </p>

            <nav class="navbar bg-info">
                <p>5. Habilidades</p>
            </nav>
            <label for="">Habilidad</label>
            <input type="text" name="habilidad" class="form-control">
            <label for="">Nivel</label>
            {{-- <input type="text" name="nivelhabilidad" class="form-control"> --}}
            <select multiple class="form-control" id="nivelhabilidad" name="nivelhabilidad">
                <option>i. Basico</option>
                <option>ii. Intermedio</option>
                <option>iii. Bueno</option>
                <option>iv. Avanzado</option>
            </select>
            <p>  </p>

            <nav class="navbar bg-info">
                <p>6. Hoobie</p>
            </nav>
            <label for="">Hoobie</label>
            <input type="text" name="hoobie" class="form-control">
            <p>  </p>

            <nav class="navbar bg-info">
                <p>7. Idiomas</p>
            </nav>
            <label for="">Idioma</label>
            <input type="text" name="idioma" class="form-control">
            <label for="">Nivel</label>
            {{-- <input type="text" name="nivelidioma" class="form-control"> --}}
            <select multiple class="form-control" id="nivelidioma" name="nivelidioma">
                <option>i. Basico</option>
                <option>ii. Medio</option>
                <option>iii. Aceptable</option>
                <option>iv. Fluido</option>
                <option>v. Nativo</option>
            </select>
            <p>  </p>
            
            <nav class="navbar bg-info">
                Cargar CV
            </nav>
            <div class="form-group">
                <label for=""></label>
                <input type="file" class="form-control-file" id="cv" name="cv">
            </div>

        </div>
        <button type=submit class="btn btn-primary">Guardar</button>
    </form>
@endsection
