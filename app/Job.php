<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'from','to','salary',
    ];
    public function user()
    {
        return $this->belongto('App\User');
    }
    public function company()
    {
        return $this->belongto('App\Company');
    }
    public function rol()
    {
        return $this->belongto('App\Rol');
    }
}
