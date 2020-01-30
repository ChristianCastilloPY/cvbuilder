<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $fillable = ['nombre','apellido','intro','posicion','numero','email','pais','direccion','estado','codigopostal','linkedin','sitioweb','puesto','empresa','desdehastapuesto','descriptionpuesto','titulo','escuela','desdehastaeducacion','descriptioneducacion','habilidad','nivelhabilidad','hoobie','idioma','nivelidioma'];


}
