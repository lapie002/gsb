<?php
function afficher_corps()
{
    $idDemande=$_GET['idDemande'];
    
    $demande=new Demande(null,null,null,null,null);
    
    $demande=Gestion::lister("Demande","idDemande",$idDemande);     
                               
    echo'<div class="divZonePage">
                    
            <h2>Supprimer Demande</h2>
            <br/>';

            Gestion::supprimer("Demande","idDemande", $idDemande);
            
            echo'Demande Supprimée<br/>
                <a href="index.php?id_page=demande">- Retour -</a>';
    
    echo'</div>';
}   
?>
