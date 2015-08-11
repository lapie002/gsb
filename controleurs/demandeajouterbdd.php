<?php

function afficher_corps()
{
    $idEquipement=$_POST['idEquipement'];
    $motif=$_POST['motif'];
    $datedemande=retourne_date_formate($_POST['datedemande']);
    $idUtilisateur=$_POST['idUtilisateur'];
    
         
    $demande=new Demande(null,$idEquipement,$idUtilisateur,$motif, $datedemande);
                               
    echo'<div class="divZonePage">
                    
            <h2>Création Demande</h2>
            <br/>';

            Gestion::ajouter($demande);
            
            echo'Demande ajoutée<br/>
                <a href="index.php?id_page=demande">- Retour -</a>';
    
    echo'</div>';
}   

?>
