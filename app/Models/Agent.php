<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $timestamps = false;

    protected $table = 'agent';

    public function proprietes(){
        return $this->hasMany('App\Models\Propriete');
    }
    
}