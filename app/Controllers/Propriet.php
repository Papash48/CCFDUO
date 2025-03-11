<?php

namespace App\Controllers;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Propriete;


class Propriet extends BaseController
{
    public function getPropriete()
    {
        $data['titre'] = "Liste des propriétés";
        $data['soustitre'] = "";        
        $data['proprietes'] = Propriete::all();
        
        return view('template/header')
             . view('template/menu')
             . view('propriete_home',$data)
             . view('template/footer');
    }

    public function getInfo($id)
    {
        $data['titre'] = "Voici la propriété ".$id;
        $data['soustitre'] = "Voici ses informations : ";        
        $data['propriete'] = Propriete::find($id);
        
        return view('template/header')
             . view('template/menu')
             . view('propriete_info',$data)
             . view('template/footer');
        
    }

    public function getPropriet_ajout(){
        $data['titre'] = "Quel type de propriété";
        $data['soustitre'] = "";

        return view('template/header')
            . view('template/menu')
            . view('ajout_prop',$data)
            . view('template/footer');
    }
    public function getAjout_maison(){
        $data['titre'] = "Ajouter votre maison";
        $data['soustitre'] = "";

        return view('template/header')
            . view('template/menu')
            . view('ajout_maison',$data)
            . view('template/footer');
    }
    public function postAjout_maison()
    {
        $session = session();
        $id = $session->get('id');

        $Propriete = new Propriete();
        $Propriete->type_propriete = "Maison";
        $Propriete->nb_pieces = $this->request->getPost('nb_pieces');
        $Propriete->localisation = $this->request->getPost('localisation');
        $Propriete->prix = $this->request->getPost('prix');
        $Propriete->description = $this->request->getPost('description');
        $Propriete->charges = $this->request->getPost('charges');
        $Propriete->agent()->associate(Agent::find($id));
        $Propriete->save();

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadPath = FCPATH . 'public/img/';
            $fileName = 'Maison_' . $Propriete->id . '.jpg';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $file->move($uploadPath, $fileName);
        }

        return redirect()->to('propriet/Propriete')->with('success', 'Maison ajoutée avec succès.');
    }

    public function getAjout_appart(){
    $data['titre'] = "Quel type de propriété";
    $data['soustitre'] = "";

    return view('template/header')
        . view('template/menu')
        . view('ajout_appart',$data)
        . view('template/footer');
    }

    public function postAjout_Appartement()
    {
        $session = session();
        $id = $session->get('id');

        $Propriete = new Propriete();
        $Propriete->type_propriete = "Appartement";
        $Propriete->nb_pieces = $this->request->getPost('nb_pieces');
        $Propriete->localisation = $this->request->getPost('localisation');
        $Propriete->prix = $this->request->getPost('prix');
        $Propriete->description = $this->request->getPost('description');
        $Propriete->charges = $this->request->getPost('charges');
        $Propriete->agent()->associate(Agent::find($id));
        $Propriete->save();

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadPath = FCPATH . 'public/img/';
            $fileName = 'Appartement_' . $Propriete->id . '.jpg';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $file->move($uploadPath, $fileName);
        }

        return redirect()->to('propriet/Propriete')->with('success', 'Appartement ajoutée avec succès.');
    }

    public function getSearch()
    {
        $prix_min = $this->request->getGet('prix_min');
        $prix_max = $this->request->getGet('prix_max');
        $nb_pieces = $this->request->getGet('nb_pieces');
        $localisation = $this->request->getGet('localisation');

        $query = Propriete::query();

        if ($prix_min) {
            $query->where('prix', '>=', $prix_min);
        }
        if ($prix_max) {
            $query->where('prix', '<=', $prix_max);
        }
        if ($nb_pieces) {
            $query->where('nb_pieces', $nb_pieces);
        }
        if ($localisation) {
            $query->where('localisation', 'LIKE', "%$localisation%");
        }

        $data['titre'] = "Résultats de la recherche";
        $data['soustitre'] = "";
        $data['proprietes'] = $query->get();

        return view('template/header')
            . view('template/menu')
            . view('propriete_home', $data)
            . view('template/footer');
    }

    public function getFavoris()
    {
        $session = session();
        $clientId = $session->get('id');

        $data['titre'] = "Voici vos favoris";
        $data['soustitre'] = "";
        $data['client'] = Client::find($clientId);

        foreach ($data['client']->proprietes as $propriete) {
            $propriete->estEnFavoris = $data['client']->proprietes()->where('propriete_id', $propriete->id)->exists();
        }

        return view('template/header')
            . view('template/menu')
            . view('favoris', $data)
            . view('template/footer');
    }


    public function postAjouterFavori($proprieteId)
    {
        $session = session();
        $clientId = $session->get('id');

        if ($clientId) {
            $client = Client::find($clientId);
            $propriete = Propriete::find($proprieteId);

            if ($client && $propriete) {
                $client->proprietes()->attach($propriete->id);

                return redirect()->back()->with('success', 'Propriété ajoutée aux favoris !');
            } else {
                return redirect()->back()->with('error', 'Client ou propriété non trouvé.');
            }
        } else {
            return redirect()->to('login')->with('error', 'Veuillez vous connecter pour ajouter des favoris.');
        }
    }


    public function postSupprimerFavori($proprieteId)
    {
        $session = session();
        $clientId = $session->get('id');

        if ($clientId) {
            $client = Client::find($clientId);

            if ($client) {
                $client->proprietes()->detach($proprieteId);
                return redirect()->back()->with('success', 'Propriété retirée des favoris !');
            } else {
                return redirect()->back()->with('error', 'Client ou propriété non trouvé.');
            }
        } else {
            return redirect()->to('login')->with('error', 'Veuillez vous connecter pour gérer vos favoris.');
        }
    }

    public function getCheckFavori($proprieteId)
    {
        $session = session();
        $clientId = $session->get('id');

        if ($clientId) {
            $client = Client::find($clientId);
            if ($client) {
                $estEnFavoris = $client->proprietes()->where('propriete_id', $proprieteId)->exists();
                return $this->response->setJSON(['estEnFavoris' => $estEnFavoris]);
            }
        }

        return $this->response->setJSON(['estEnFavoris' => false]);
    }

    public function getModifPropriete($proprieteId)
    {
        $session = session();

        $propriete = Propriete::find($proprieteId);

        // Vérifiez que la propriété appartient à l'agent connecté
        if ($propriete->agent->id != $session->id) {
            return redirect()->to('/')->with('error', 'Vous n\'avez pas les droits pour modifier cette propriété.');
        }

        $data['titre'] = "Modifier la propriété " . $proprieteId;
        $data['soustitre'] = "Veuillez modifier les informations";
        $data['propriete'] = $propriete;
        $data['agents'] = Agent::all(); // Si vous avez besoin de la liste des agents

        return view('template/header')
            . view('template/menu')
            . view('form_modif_propriete', $data)
            . view('template/footer');
    }

    public function postModifPropriete($proprieteid)
    {
        $session = session();
        $agent_id = $session->get('agent_id');


        $propriete = Propriete::find($proprieteid);

        // Vérifiez que la propriété appartient à l'agent connecté
        if ($propriete->agent_id != $agent_id) {
            return redirect()->to('/')->with('error', 'Vous n\'avez pas les droits pour modifier cette propriété.');
        }

        // Mise à jour des champs texte
        $propriete->type_propriete = $this->request->getPost('type_propriete');
        $propriete->nb_pieces = $this->request->getPost('nb_pieces');
        $propriete->localisation = $this->request->getPost('localisation');
        $propriete->prix = $this->request->getPost('prix');
        $propriete->description = $this->request->getPost('description');
        $propriete->charges = $this->request->getPost('charges');
        $propriete->EtatPropriete = $this->request->getPost('EtatPropriete');

        // Gestion de l'agent
        $agentId = $this->request->getPost('agent');
        if ($agentId) {
            $agent = Agent::find($agentId);
            if ($agent) {
                $propriete->agent()->associate($agent);
            } else {
                return redirect()->back()->with('error', 'Agent invalide.');
            }
        } else {
            $propriete->agent()->dissociate();
        }

        // Gestion de l'image
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadPath = FCPATH . 'public/img/';
            $fileName = $propriete->type_propriete . "_" . $proprieteid . '.jpg';

            // Assurez-vous que le dossier existe
            if (!is_dir($uploadPath)) {
                if (!mkdir($uploadPath, 0755, true)) {
                    return redirect()->back()->with('error', 'Impossible de créer le dossier d\'upload.');
                }
            }

            // Vérifiez si l'ancienne image existe et supprimez-la
            $oldImagePath = $uploadPath . $fileName;
            if (file_exists($oldImagePath)) {
                if (!unlink($oldImagePath)) {
                    return redirect()->back()->with('error', 'Impossible de supprimer l\'ancienne image.');
                }
            }

            // Déplacez la nouvelle image
            if (!$file->move($uploadPath, $fileName)) {
                return redirect()->back()->with('error', 'Erreur lors du déplacement de la nouvelle image.');
            }
        }

        // Sauvegarder les modifications
        $propriete->save();

        return redirect()->to('propriet/propriete')->with('success', 'Propriété mise à jour avec succès.');


        // Sauvegarder les modifications
        $propriete->save();

        return redirect()->to('propriet/propriete')->with('success', 'Propriété mise à jour avec succès.');
    }


}    

