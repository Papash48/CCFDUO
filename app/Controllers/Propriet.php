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

    public function getInfo($id)
    {
        $data['titre'] = "Voici la propriété ".$id;
        $data['soustitre'] = "Voici ses informations.";        
        $data['propriete'] = Propriete::find($id);
        
        return view('template/header')
             . view('template/menu')
             . view('propriete_info',$data)
             . view('template/footer');
        
    }

    public function getPropriet_ajout(){
        $data['titre'] = "Quel type de propriété";
        $data['soustitre'] = "";

        return view('template/header')
            . view('template/menu')
            . view('ajout_prop',$data)
            . view('template/footer');
    }
}    



