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
        . view('template/menu')
        . view('login_formClient',$data)
        . view('template/footer');
    }

    public function getAgent()
    {
        $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
        $data['soustitre'] = "Veuillez saisir vos identifiants de connexion en tant qu'agent. ";
        return view('template/header')
        . view('template/menu')
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
                $id = Client::where('nom', $login)->where('mdp', $pwd)->get()[0]->id;
                $sessiondata = array(
                       'nom'  => $this->request->getPost('login'),
                       'id'  => $id,
                       'type' => "client"
                    );
                $session->set($sessiondata);
                return redirect()->to('propriet/propriete');
                //return redirect()->to('test/TestConnexionClient');
            }
            else {
            // Si erreur d'identification
                $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant que client";
                return view('template/header')
                . view('template/menu')
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
            . view('template/menu_acceuil')
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
                $id = Agent::where('nom', $login)->where('mdp', $pwd)->get()[0]->id;
                $sessiondata = array(
                       'nom'  => $this->request->getPost('login'),
                        'id'  => $id,
                        'type' => "agent"
                    );
                $session->set($sessiondata);
                return redirect()->to('propriet/propriete');
                //return redirect()->to('test/TestConnexionAgent');
            }
            else {
            // Si erreur d'identification
                $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant qu'agent";
                return view('template/header')
                . view('template/menu')
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
             . view('template/menu_acceuil')
             . view('login_formAgent',$data)
             . view('template/footer');
        }
    } 

    public function getCompte()
    {
        $session = session();
        if($session->type === 'agent')
        {
        $data['session'] = $session = session();
        $data['id'] = $session->get('id');
        $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
        $data['soustitre'] = "Voici les informations de votre compte agent";
        return view('template/header')
        . view('template/menu')
        . view('info_compte_agent',$data)
        . view('template/footer');



        }
        else if($session->type === 'client') {
            $data['session'] = $session = session();
            $data['id'] = $session->get('id');
            $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
            $data['soustitre'] = "Voici les informations de votre compte client";
            return view('template/header')
            . view('template/menu')
            . view('info_compte_client',$data)
            . view('template/footer');
        }
        else {
            $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
            $data['soustitre'] = "Veuillez vous connecter";
            return view('template/header')
            . view('template/menu')
            . view('AcceuilConnexion',$data)
            . view('template/footer');
        }
        }

    public function getCreation()
    {
        $data['titre'] = "Bienvenue sur Akor Adams Immobilier";
        $data['soustitre'] = "Veuillez créer votre compte";
        return view('template/header')
        . view('template/menu')
        . view('creation_compte',$data)
        . view('template/footer');
    }

    public function postCreationcompte()
    {
        $client = new Client();
        $client->nom = $this->request->getPost('nom');
        $client->prenom = $this->request->getPost('prenom');
        $client->datedenaissance = $this->request->getPost('daten');
        $client->mail = $this->request->getPost('mail');
        $client->num = $this->request->getPost('num');
        $client->mdp = $this->request->getPost('mdp');
        $client->save();

        return redirect()->to('connexion/client');
    }

    public function getLogout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('AcceuilConnexion');
    }

}