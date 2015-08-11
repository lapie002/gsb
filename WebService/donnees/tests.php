<?php

    include_once 'gestion.class.php';

    echo'<br/>lister tous les clients :<br/>';
    $retour=Gestion::lister("Client");
    var_dump($retour);
    
    echo'<br/>lister un client :<br/>';
    $retour1=Gestion::lister("Client","idClient",1);
    var_dump($retour1);
    
    echo'<br/>ajouter un client :<br/>';
    $cli=new Client(null,"lenom","34000");
    Gestion::ajouter($cli);
    $retour2=Gestion::lister("Client");
    var_dump($retour2);
    
    echo'<br/>modifier un client :<br/>';
    $cli=new Client(1,"modifie","01000");
    Gestion::modifier($cli);
    $retour3=Gestion::lister("Client");
    var_dump($retour3);
    
    echo'<br/>supprimer un client :<br/>';
    Gestion::supprimer("Client","idClient",2);
    $retour4=Gestion::lister("Client");
    var_dump($retour4);
    
    
?>
