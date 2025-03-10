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

        return redirect()->to('/')->with('success', 'Maison ajoutée avec succès.');
    }

    public function postAjout_appart(){
    $data['titre'] = "Quel type de propriété";
    $data['soustitre'] = "";

    return view('template/header')
        . view('template/menu')
        . view('ajout_prop',$data)
        . view('template/footer');
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





}    

