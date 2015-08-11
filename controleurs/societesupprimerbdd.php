<?php

function afficher_corps()
{
    $idSociete=$_GET['idSociete'];
       
                               
    echo'<div class="divZonePage">
                    
            <h2>Supprimer Societe</h2>
            <br/>';

            Gestion::supprimer("Societe","idSociete", $idSociete);
            
            echo'Societe Supprimé<br/>
                <a href="index.php?id_page=societe">- Retour -</a>';
    
    echo'</div>';
}
?>
