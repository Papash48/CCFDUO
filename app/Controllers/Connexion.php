<?php

namespace App\Controllers;

use App\Models\Agent;
use App\Models\Client;
use App\Models\Propriete;

class Connexion extends BaseController
{    
    public function getClient()
    {
        $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Veuillez saisir vos identifiants de connexion en tant que client.";
                return view('template/header')
                     . view('login_formClient',$data)
                     . view('template/footer');
    }

    public function getAgent()
    {
        $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Veuillez saisir vos identifiants de connexion en tant qu'agent. ";
                return view('template/header')
                     . view('login_formAgent',$data)
                     . view('template/footer');
    }


    public function postLoginClient()
    {
        $rules = [
            "login" => [
                "label" => "'Identifiant'", 
                "rules" => "required"
            ],
            "pwd" => [
                "label" => "'Mot de passe'", 
                "rules" => "required"
            ]
        ];
        
        if ($this->validate($rules)) {
            $login = $this->request->getPost('login');
            $pwd = $this->request->getPost('pwd');
            $clientModele = new Client();
            if ($clientModele->estClient($login,$pwd)) {
                $session = session();
                $sessiondata = array(
                       'nom'  => $this->request->getPost('login'),
                       'admin'=> true
                    );
                $session->set($sessiondata);
                return redirect()->to('test/TestConnexionClient');
            }
            else {
            // Si erreur d'identification
                $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant qu'utilisateur";
                return view('template/header')
                     . view('login_formClient',$data)
                     . view('template/footer');
            }
        }
        else {
            // Si saisie non valide
            $data['erreurs'] = $this->validator->getErrors();
            $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
            $data['soustitre'] = "Saisie invalide";
            return view('template/header')
                 . view('login_formClient',$data)
                 . view('template/footer');
        }
    }



    public function postLoginAgent()
    {
        $rules = [
            "login" => [
                "label" => "'Identifiant'", 
                "rules" => "required"
            ],
            "pwd" => [
                "label" => "'Mot de passe'", 
                "rules" => "required"
            ]
        ];
        
        if ($this->validate($rules)) {
            $login = $this->request->getPost('login');
            $pwd = $this->request->getPost('pwd');
            $agentModele = new Agent();
            if ($agentModele->estAgent($login,$pwd)) {
                $session = session();
                $sessiondata = array(
                       'nom'  => $this->request->getPost('login'),
                       'admin'=> true
                    );
                $session->set($sessiondata);
                return redirect()->to('test/TestConnexionAgent');
            }
            else {
            // Si erreur d'identification
                $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant qu'utilisateur";
                return view('template/header')
                     . view('login_formAgent',$data)
                     . view('template/footer');
            }
        }
        else {
            // Si saisie non valide
            $data['erreurs'] = $this->validator->getErrors();
            $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
            $data['soustitre'] = "Saisie invalide";
            return view('template/header')
                 . view('login_formAgent',$data)
                 . view('template/footer');
        }
    } 
}