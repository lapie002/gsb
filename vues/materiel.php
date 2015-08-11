<?php

function afficher_corps()
{
    echo'<div class="divZonePage">
                    
            <h2>Liste du materiel</h2>
            <br/>';
            
        $result = Gestion::lister("EquipementAchat");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="3">Materiel acheté : <a href="index.php?id_page=equipachatajouter">Ajouter</a></td></tr>
            <tr><td width="50">ID</td><td>Informations</td><td>Supprimer</td></tr>';
        
        foreach ($result as &$equipementachat){
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $equipementachat->idEquipement . '</td>';
            echo'<td bgcolor="#ffffff">Proc. : ' . $equipementachat->processeur . ' - 
                    Mémoire : '. $equipementachat->memoire . ' - 
                    Disque : ' . $equipementachat->disque . ' - 
                    logiciels : ' . $equipementachat->logiciels . '<br/>
                    Type : '. $equipementachat->typemateriel . '<hr/>
                    Utilisateur : '. $equipementachat->idUtilisateur . '<br/>
                    Date achat : ' . afficher_date_formate($equipementachat->dateachat) . '<hr/></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=equipachatsupprimerbdd&idEquipement='.$equipementachat->idEquipement.'">Supprimer</a></td>';
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
        echo'<br/><br/>';
        
        $result = Gestion::lister("EquipementLocation");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="4">Materiel loué : <a href="index.php?id_page=equiplocajouter">Ajouter</a></td></tr>
            <tr><td width="50">ID</td><td>Informations</td><td>Editer</td><td>Supprimer</td></tr>';
        
        foreach ($result as &$equipementlocation){
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $equipementlocation->idEquipement . '</td>';
            echo'<td bgcolor="#ffffff">Proc. : ' . $equipementlocation->processeur . ' - 
                    Mémoire : '. $equipementlocation->memoire . ' - 
                    Disque : ' . $equipementlocation->disque . ' - 
                    logiciels : ' . $equipementlocation->logiciels . ' - 
                    Type : '. $equipementlocation->typemateriel . '<hr/>
                    Utilisateur : '. $equipementlocation->idUtilisateur . '<br/>
                    Société : '. $equipementlocation->idSociete . '<hr/>
                    Durée : '. $equipementlocation->duree . ' mois<br/>
                    Date début : '. afficher_date_formate($equipementlocation->datedebut) . '<br/>
                    Date fin : '. afficher_date_formate($equipementlocation->datefin) . '<br/>    
                    Date pré-étude : '. afficher_date_formate($equipementlocation->datepreetude) . '<br/>
                    Date rapport : '. afficher_date_formate($equipementlocation->dateprerapport) . '<br/>
                    Date cahier des charges : ' . afficher_date_formate($equipementlocation->datecahiercharge) . '<hr/></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=equiplocmodifier&idEquipement='.$equipementlocation->idEquipement.'">Editer</a></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=equiplocsupprimerbdd&idEquipement='.$equipementlocation->idEquipement.'">Supprimer</a></td>';
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
    echo'</div>';
}

?>
