<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    public $timestamps = false;

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
    
}