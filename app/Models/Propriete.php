<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    public $timestamps = false;

    protected $table = 'propriete';
    public function agent(){
        return $this->belongsTo('App\Models\Agent');
    }
    
}