<?php

namespace App\Controllers;
use App\Models\Agent;
use App\Models\Propriete;
use App\Models\Client;

class Test extends BaseController
{
 public function getIndex()
   {


   /*$unlivre = Livre::find(1);
   echo "Titre du livre : ".$unlivre->titre;
   echo "<br>Catégorie du livre : ".$unlivre->categorie;

   echo "<hr>";
   $lesLivres = Livre::all();
   echo "Liste des livres : ";
   foreach ($lesLivres as $livre) {
   echo $livre->titre." / ";
   }
   echo "<hr>";
   $lesThrillers = Livre::where('categorie', 'Thriller')->get();
   echo "Nombre de Thriller : ".$lesThrillers->count();
   /*echo "<hr>";
      $unauteur = new Auteur();
      $unauteur-> nom = 'Kerouac';
      $unauteur-> prenom = 'Jack';
      $unauteur-> biographie =  'Jean-Louis Kérouac ou Jean-Louis Lebris de Kérouac dit Jack Kerouac, né le 12 mars 1922 à Lowell, dans le Massachusetts, et mort le 21 octobre 1969 à St. Petersburg, en Floride, est un écrivain et poète américain.';
      $unauteur->save();




   echo "<hr>";
   $Modif = Livre::where('isbn', '978-2266283786')->first();
   $Modif ->prix = '7.90';
   $Modif ->save(); 
   echo "<hr>";
   echo "<hr>";

   echo Livre::find(8)->auteur->nom;
   echo "<hr>";
   $lelivre = Livre::where('titre','Nuit')->first();
   echo $lelivre->auteur->prenom;

   echo "<hr>";
   $lesLivres = Auteur::find(2)->livres;
   echo $lesLivres;

   echo "<hr>";
   echo "<hr>";

   /*$LesLivres = Auteur::where('nom', 'Minier')->where('prenom','Bernard')->get()[0]->livres;
   foreach($LesLivres as $UnLivre){
     echo $UnLivre->titre."<br>";
   }
   echo "<hr>";
   $Total = 0;
   $LesTitres = Client::where('nom', 'Rochefort')->where('prenom','Jean')->get()[0]->livres;
   foreach($LesTitres as $Untitre){
      echo $Untitre->titre."<br>";
      $Total += $Untitre->prix;
    }
   echo $Total;
   echo "<hr>";
   echo "<hr>";

   $LesClients = Livre::where('titre', 'Nuit')->get()[0]->clients;
   foreach($LesClients as $UnClient){
      echo $UnClient->nom." ";
      echo $UnClient->prenom."<br>";
    }
   echo "<hr>";
   echo "<hr>";

   $leLivre = Livre::Find(2);
   foreach($leLivre->clients as $unClient){
      echo "<br>".$unClient->pivot->note;
   }
   echo "<hr>";
   echo "<hr>";
   $unClient = Client::Find(3);
   foreach($unClient->livres as $unLivre){
      echo "<br>".$unLivre->titre." : ".$unLivre->pivot->avis;
   } */
   $LesProprietes = Propriete::all();
   foreach ($LesProprietes as $unePropriete) {
      echo "Type de propriete : ".$unePropriete->type_propriete ."<br>"; 

   }

   }
}
