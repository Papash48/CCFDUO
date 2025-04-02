<?php

namespace App\Controllers;
use App\Models\Client;
class Clien extends BaseController
{
    public function postModifinfo($id)
    {
        $client = Client::where('id', $id)->first();

        if (!$client) {
            return redirect()->to('/')->with('error', 'Client introuvable.');
        }

        // Règles de validation
        $rules = [
            'nom' => 'required|min_length[2]',
            'prenom' => 'required|min_length[2]',
            'datedenaissance' => 'required|valid_date',
            'num' => 'required',
            'mail' => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $client->nom = $this->request->getPost('nom');
        $client->prenom = $this->request->getPost('prenom');
        $client->datedenaissance = $this->request->getPost('datedenaissance');
        $client->num = $this->request->getPost('num');
        $client->mail = $this->request->getPost('mail');

        $nouveauMdp = $this->request->getPost('mdp');
        if (!empty($nouveauMdp)) {
            $client->mdp = $nouveauMdp;
            $client->mdp_crypte = password_hash($nouveauMdp, PASSWORD_BCRYPT);
        }

        if ($client->save()) {
            return redirect()->to('connexion/compte')->with('success', 'Informations client mises à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la mise à jour des informations.');
        }
    }



}