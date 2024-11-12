<?php

namespace App\Controllers;

class Liv extends BaseController
{    
    public function getIndex()
    {        
        $data['titre'] = "Catalogue";
        $data['entete'] = "Les livres disponibles chez eloBooks";		
        $data['contenu'] = array(
            1 => array("titre"=>"La disparition de Stéphanie Mayer","auteur"=>"Joël Dicker","categorie"=>"Littérature","prix"=>23,"isbn"=>"979-1032102008"),
            2 => array("titre"=>"L'amie prodigieuse : Enfance, adolescence","auteur"=>"Elena Ferrante","categorie"=>"Littérature","prix"=>8.90,"isbn"=>"978-2070466122"),
            3 => array("titre"=>"Glacé","auteur"=>"Bernard Minier","categorie"=>"Thriller","prix"=>8.90,"isbn"=>"978-2266219976")
        );	        
        return view('livre_catalogue', $data);
    }
    
}
