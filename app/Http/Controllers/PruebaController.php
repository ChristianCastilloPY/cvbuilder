<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PruebaController extends Controller{
    public Function prueba(){
        return 'Estoy dentro de pruebaController :D';
    }
    public Function login(){
        return view('postulantes.login');
    }
    public Function signin(){
        return view('postulantes.signin');
    }
}
