<?php

namespace App\Controllers;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Propriete;


class Propriet extends BaseController
{
    public function getPropriete()
    {
        $data['titre'] = "Liste des propriétés";
        $data['soustitre'] = "";        
        $data['proprietes'] = Propriete::all();
        
        return view('template/header')
             . view('template/menu')
             . view('propriete_home',$data)
             . view('template/footer');
    }
}    


