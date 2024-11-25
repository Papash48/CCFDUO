<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    protected $table = 'propriete';
    public $timestamps = false;
    
    public function agent(){
        return $this->belongsTo('App\Models\Agent');
    }
    
}