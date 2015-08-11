<?php

// fichier dans donnees
include_once 'gestion.class.php';

class WSClient
{
    public function listerTous()
    {
        return Gestion::lister("Client");
    }
    
    public function listerUn($id)
    {
        $clients = Gestion::lister("Client","idClient",$id);
        if(!empty($clients)) return $clients[0]; else return null;
    }
    
    public function ajouterUn($nom,$cp)
    {
        $cli = new Client(null,$nom,$cp);
        Gestion::ajouter($cli);
    }
    
    public function supprimerUn($id)
    {
        return Gestion::supprimer("Client","idClient",$id);
    }
    
    public function modifierUn($id,$nom,$cp)
    {
        $cli = new Client($id,$nom,$cp);
        Gestion::modifier($cli);
    }
    
}

?>
