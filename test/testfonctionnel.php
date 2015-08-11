<?php

include_once("../donnees/gestion.class.php");
include_once("../donnees/wsservice.class.php");

try {
    //Achat
    var_dump(WSService::achatListerTous());
    echo'<br/><br/>';

    //Client
    /*var_dump(Gestion::lister("Client"));
    $obj=new Client(NULL,"Marcos","34500");
    Gestion::ajouter($obj);
    //$obj=new Client(NULL"Marcos","34000");
    //Gestion::modifier($obj);
    var_dump(Gestion::lister("Client", "idClient", 0));
    echo'<br/><br/>';*/
    
    //Demande
    var_dump(Gestion::lister("Demande"));
    echo'<br/><br/>';
    
    //Equipement
    var_dump(Gestion::lister("Equipement"));
    echo'<br/><br/>';
    
    //EquipementAchat
    var_dump(Gestion::lister("EquipementAchat"));
    echo'<br/><br/>';
    
    //EquipementLocation
    var_dump(Gestion::lister("EquipementLocation"));
    echo'<br/><br/>';
    
    //Etat
    var_dump(Gestion::lister("Etat"));
    echo'<br/><br/>';
    
    //Intervention
    var_dump(Gestion::lister("Intervention"));
    echo'<br/><br/>';
    
    //Location
    var_dump(Gestion::lister("Location"));
    echo'<br/><br/>';
    
    //Posseder
    var_dump(Gestion::lister("Posseder"));
    echo'<br/><br/>';
    
    //Secteur
    var_dump(Gestion::lister("Secteur"));
    echo'<br/><br/>';
    
    //Societe
    var_dump(Gestion::lister("Societe"));
    echo'<br/><br/>';
    
    //Utilisateur
    var_dump(Gestion::lister("Utilisateur"));
    echo'<br/><br/>';
    
} catch (PDO3Exception $e) {
    //var_dump($e);
    echo $e->getCodePDO3() . "   " . $e->getMessage();
}
?>
