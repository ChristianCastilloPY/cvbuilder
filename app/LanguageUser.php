<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageUser extends Model
{
    public function Users()
    {
        return $this->hasMany('App\User');
    }
    public function languages()
    {
        return $this->hasMany('App\Language');
    }
}
