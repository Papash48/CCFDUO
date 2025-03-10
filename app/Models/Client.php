<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client'; 
    public $timestamps = false;
    
    public function estClient($nom,$pwd) {
        $db = \Config\Database::connect();
        $builder = $db->table('clients');
        $query = $builder->getWhere(['nom' => $nom, 'mdp' => $pwd]);
        return count($query->getResult());
    }
    public function proprietes()
    {
        return $this->belongsToMany('App\Models\Propriete', 'client_propriete', 'client_id', 'propriete_id');
    }


}