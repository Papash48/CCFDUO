<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agent';
    public $timestamps = false;


    public function proprietes(){
        return $this->hasMany('App\Models\Propriete');
    }

    public function estAgent($nom,$pwd) {
        $db = \Config\Database::connect();
        $builder = $db->table('agents');
        $query = $builder->getWhere(['nom' => $nom, 'mdp' => $pwd]);
        return count($query->getResult());
    }
    
}