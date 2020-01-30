{{-- le decimos a blade que tiene que heredar el disenho de un layout dentro de la vista create --}}
{{-- @extends('layouts.app') --}}

{{-- definimos el titulo, se hereda de app.blade --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <title>Document</title>
</head>
<body>
        <nav class="navbar  ">
            <p  class="navbar-brand">Postulante</p>
        </nav>

                <header class="resume-header pt-4 pt-md-0 bg-light border border-dark">
                    <div class="media flex-column flex-md-row ">
                        <img class="mt-2 mb-2 col-3" src="images/{{$userdatas->avatar}}" alt="">
                        <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                            <div class="primary-info">
                                <h3>Candidato: {{$userdatas->id}}</h3>

                                <div class="card-body">
                                    <h3 class="card-title">{{$userdatas->name}}{{' ' }}{{$userdatas->lastname}}</h3>
                                    <p class="card-text"> {{$userdatas->Intro}}</p>
                                </div>
                        
                            </div><!--//primary-info-->
                        </div><!--//media-body-->
                    </div><!--//media-->
                </header>
 
</body>
</html>