<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titre'] = " Bienvenue sur Akor Adams Immobilier ";
        $data['soustitre'] = " Comment souhaitez-vous vous connecter ? ";
        return view('template/header')
         . view('template/menu_accueil')
         . view('AccueilConnexion',$data) //a remettre vers la fin 'popup_view'
         . view('template/footer');
    }
}