<?php

namespace App\Controllers;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Propriete;


class Propriet extends BaseController
{
    public function getPropriete()
    {
        $lesProprietes = Propriete::all();
        foreach ($lesProprietes as $propriete) {
            echo $propriete->type_propriete ."<br>";
            echo $propriete->nb_pieces ."<br>";
            echo $propriete->localisation ."<br>";
            echo $propriete->prix ."<br>";
            echo $propriete->description ."<br>";
            echo $propriete->charges ."<br>";
            echo $propriete->EtatPropriete ."<br>";
            echo "<hr>";
        }
    }
}    