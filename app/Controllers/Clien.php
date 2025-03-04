<?php

namespace App\Controllers;
use App\Models\Client;
class Clien extends BaseController
{
    public function postModifinfo($id){
        $client = Client::where('id', $id)->first();

    if (!$client) {
        return redirect()->to('/')->with('error', 'Client introuvable.');
    }

    $client->nom = $this->request->getPost('nom');
    $client->prenom = $this->request->getPost('prenom');
    $client->datedenaissance = $this->request->getPost('datedenaissance');
    $client->num = $this->request->getPost('num');
    $client->mail = $this->request->getPost('mail');
    $client->mdp = $this->request->getPost('mdp');


    $client->save();
    return redirect()->to('/')->with('success', 'Client mis à jour avec succès.');
    }


}