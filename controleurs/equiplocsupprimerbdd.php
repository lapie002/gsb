<?php
function afficher_corps()
{
    $idEquipement=$_GET['idEquipement'];
    
    //$utilisateur=Gestion::lister("Utilisateur","idUtilisateur",$idUtilisateur);     
                               
    echo'<div class="divZonePage">
                    
            <h2>Supprimer Equipement</h2>
            <br/>';

            Gestion::supprimer("EquipementLocation","idEquipement", $idEquipement);
            
            echo'Equipement Supprimé<br/>
                <a href="index.php?id_page=materiel">- Retour -</a>';
    
    echo'</div>';
}
?>
