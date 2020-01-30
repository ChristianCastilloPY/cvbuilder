<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $fillable = [
        'name','lastname','Intro','numero',
    ];
}
