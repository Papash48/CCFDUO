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
         . view('popup_view',$data) //a remettre vers la fin 'popup_view'
         . view('template/footer');
    }
    public function mentions_legales()
    {
      $data['titre'] = "Mentions légales - Akor Adams Immobilier";
        
        return view('template/header')  
            . view('template/menu_accueil') 
            . view('mentions_legales', $data) 
            . view('template/footer'); 
    }
}