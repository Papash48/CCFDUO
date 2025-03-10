<?php

namespace App\Controllers;
use App\Models\Agent;

class Agen extends BaseController
{
    public function postModifinfo($id){
        $agent = Agent::where('id', $id)->first();

    if (!$agent) {
        return redirect()->to('/')->with('error', 'Agent introuvable.');
    }

    $agent->nom = $this->request->getPost('nom');
    $agent->prenom = $this->request->getPost('prenom');
    $agent->num = $this->request->getPost('num');
    $agent->mail = $this->request->getPost('mail');
    $agent->mdp = $this->request->getPost('mdp');


    $agent->save();
    return redirect()->to('connexion/compte')->with('success', 'Agent mis à jour avec succès.');
    }
}