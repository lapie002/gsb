<?php

function afficher_corps()
{
    $idUtilisateur=$_GET['idUtilisateur'];
    
    //$utilisateur=Gestion::lister("Utilisateur","idUtilisateur",$idUtilisateur);     
                               
    echo'<div class="divZonePage">
                    
            <h2>Supprimer Demande</h2>
            <br/>';

            Gestion::supprimer("Utilisateur","idUtilisateur", $idUtilisateur);
            
            echo'Utilisateur Supprimé<br/>
                <a href="index.php?id_page=utilisateurliste">- Retour -</a>';
    
    echo'</div>';
}
?>
