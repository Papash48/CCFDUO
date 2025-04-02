<?php

namespace App\Controllers;
use App\Models\Agent;

class Agen extends BaseController
{
    public function postModifinfo($id)
    {
        $agent = Agent::where('id', $id)->first();

        if (!$agent) {
            return redirect()->to('/')->with('error', 'Agent introuvable.');
        }

        $rules = [
            'nom' => 'required|min_length[2]',
            'prenom' => 'required|min_length[2]',
            'num' => 'required',
            'mail' => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $agent->nom = $this->request->getPost('nom');
        $agent->prenom = $this->request->getPost('prenom');
        $agent->num = $this->request->getPost('num');
        $agent->mail = $this->request->getPost('mail');

        $nouveauMdp = $this->request->getPost('mdp');
        if (!empty($nouveauMdp)) {
            $agent->mdp = $nouveauMdp;
            $agent->mdp_crypte = password_hash($nouveauMdp, PASSWORD_BCRYPT);
        }

        if ($agent->save()) {
            return redirect()->to('connexion/compte')->with('success', 'Informations mises à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la mise à jour.');
        }
    }
}