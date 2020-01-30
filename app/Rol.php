<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'title',
    ];
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
