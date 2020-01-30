{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
@extends('layouts.app')

{{-- definimos el titulo, se hereda de app.blade --}}
@section('title', 'Postulantes ')
 
{{-- heredamos del yield(content) --}}
@section('content')
    <nav class="navbar  ">
        <p href="#" class="navbar-brand">Postulante</p>
    </nav>

    @foreach($userdatas as $u)
        @if($loop->last)
            <header class="resume-header pt-4 pt-md-0 bg-light border border-dark">
                <div class="media flex-column flex-md-row ">
                    <img class="mt-2 mb-2 col-3" src="images/{{$u->avatar}}" alt="">
                    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                        <div class="primary-info">
                            <p class="card-text"><small class="text-muted">Candidato: {{$u->id}}</small></p>

                            <div class="card-body">
                                <h5 class="card-title">{{$u->name}}{{' ' }}{{$u->lastname}}</h5>
                                <p class="card-text"> {{$u->Intro}}</p>
                            </div>
                            <ul class="list-unstyled ">
                                <li class="bg-light"><a ><i class="fas fa-mobile-alt fa-fw mr-2"></i>{{$u->numero}}</a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info ml-md-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3"><a href="/postulantes/{{$u->id}}" class="btn btn-primary ml-2">Show Pdf</a></li>
                                <li class="mb-3"><a href="/postulantes/{{$u->id}}/edit" class="btn btn-warning ml-2">Editar</a></li>
                                <li class="mb-3">
                                    <form class="form-group mt-2 ml-2" method="POST" action="/postulantes/{{$u->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </li>
                            </ul>
                        </div><!--//secondary-info-->
                    </div><!--//media-body-->
                </div><!--//media-->
            </header>

          @endif
    @endforeach



@endsection