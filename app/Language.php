<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
    ];
    public function languages()
    {
        return $this->belongsTo('App\LanguageUser');
    }
}
