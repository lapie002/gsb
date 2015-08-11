<?php

function afficher_corps()
{
    echo'<div class="divZonePage">
                    
            <h2>Liste des sociétés</h2>
            <br/>';
            
        $result = Gestion::lister("Societe");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="4">Société : <a href="index.php?id_page=societeajouter">Ajouter</a></td></tr>
            <tr><td>Nom</td><td>Informations</td><td>Editer</td><td>Supprimer</td></tr>';
        
        foreach ($result as &$societe){
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $societe->nom . '</td>';
            echo'<td bgcolor="#ffffff">Capital de ' . $societe->capital . ' €<br/>'
                    . $societe->adresse . ' - ' . $societe->codepostal . ' ' . $societe->ville . '<br/>
                    RCS : '. $societe->villercs . ' - ' . $societe->numerorcs . '<br/>
                    Représentant : '. $societe->nomrepresentant . ' : ' . $societe->qualiterepresentant . '<hr/>
                    <a href="index.php?id_page=materielsociete&num_so='.$societe->idSociete.'&nom_so='.$societe->nom.'">Liste du matériel en location</a><hr/></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=societe">Editer</a></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=societesupprimerbdd&idSociete='.$societe->idSociete.'">Supprimer</a></td>';
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
    echo'</div>';
}

?>
