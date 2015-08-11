<?php

function afficher_corps()
{
    if (isset($_GET["num_so"]))
    {
        $num_so=$_GET["num_so"];
    }else{
        $num_so=-1;
    }
    
    if (isset($_GET["nom_so"]))
    {
        $nom_so=$_GET["nom_so"];
    }else{
        $nom_so=-1;
    }
        
    echo'<div class="divZonePage">
                    
            <h2>Liste du materiel société : '.$nom_so.'</h2>
            <br/>';
            
        $result = Gestion::lister("EquipementLocation","idSociete",$num_so);
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="4">Materiel loué : <a href="index.php?id_page=equiplocajouter">Ajouter</a></td></tr>
            <tr><td width="50">ID</td><td>Informations</td><td>Editer</td><td>Supprimer</td></tr>';
        
        foreach ($result as &$equipementlocation){
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $equipementlocation->idEquipement . '</td>';
            echo'<td bgcolor="#ffffff">Proc. : ' . $equipementlocation->processeur . ' - 
                    Mémoire : '. $equipementlocation->memoire . ' - 
                    Disque : ' . $equipementlocation->disque . ' - 
                    logiciels : ' . $equipementlocation->logiciels . '<br/>
                    Type : '. $equipementlocation->typemateriel . '<hr/>
                    Utilisateur : '. $equipementlocation->idUtilisateur . '<br/>
                    Société : '. $equipementlocation->idSociete . '<hr/>
                    Durée : '. $equipementlocation->duree . ' mois<br/>
                    Date début : '. afficher_date_formate($equipementlocation->datedebut) . '<br/>
                    Date fin : '. afficher_date_formate($equipementlocation->datefin) . '<br/>    
                    Date pré-étude : '. afficher_date_formate($equipementlocation->datepreetude) . '<br/>
                    Date rapport : '. afficher_date_formate($equipementlocation->dateprerapport) . '<br/>
                    Date cahier des charges : ' . afficher_date_formate($equipementlocation->datecahiercharge) . '<hr/></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=materiel">Editer</a></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=materiel">Supprimer</a></td>';
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
    echo'</div>';
}

?>
