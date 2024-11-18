<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    public function favoris(){
        return $this->hasMany('App\Models\Favori');
    }
    
}