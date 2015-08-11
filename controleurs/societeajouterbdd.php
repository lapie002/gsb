<?php

function afficher_corps()
{
    $nom=$_POST['nom'];
    $capital=$_POST['capital'];
    $adresse=$_POST['adresse'];
    $codepostal=$_POST['codepostal'];
    $ville=$_POST['ville'];
    $villercs=$_POST['villercs'];
    $numerorcs=$_POST['numerorcs'];
    $nomrepresentant=$_POST['nomrepresentant'];
    $qualiterepresentant=$_POST['qualiterepresentant'];
    
    
    $societe=new Societe(null,$nom, $capital, $adresse, $codepostal, $ville, $villercs, $numerorcs, $nomrepresentant, $qualiterepresentant);
                                
    echo'<div class="divZonePage">
                    
            <h2>Création société</h2>
            <br/>';

            Gestion::ajouter($societe);
            
            echo'Société ajoutée<br/>
                <a href="index.php?id_page=societe">- Retour -</a>';
    
    echo'</div>';
}   

?>
