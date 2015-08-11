<?php

function afficher_corps()
    {
        echo'<div class="divZonePage">
                
                    
                    <h2>Page utilisateur</h2>
                    <form method="POST" action="index.php?id_page=connexion">
                        <input type="hidden" name="user_n" value="">
                        <input type="hidden" name="user_p" value="">
                        <input type="submit" name="connexion" class="boutonConnexion" value=" se deconnecter ">
                    </form>
                    <br/>
                    
                    <a href="index.php?id_page=demande">Liste des demandes</a><br/>
                    <br/>
                    <a href="index.php?id_page=interventionliste">Liste des interventions</a><br/>
                    <hr/><br/>
                    
                    <h2>Mon matériel</h2>
                    <br/>';
                 
        $result = Gestion::lister("EquipementAchat");
        
        foreach ($result as &$equipementachat){
                //utilisateur
                $result1 = Gestion::lister("Utilisateur","idUtilisateur",$equipementachat->idUtilisateur);
                $nomutilisateur="";
                foreach ($result1 as &$utilisateur){
                    $nomutilisateur=$utilisateur->nom .' '.$utilisateur->prenom;
                }
                
            echo'<table border="0" bgcolor="#FFB4AD">
                <tr><td width="50">ID</td><td>Informations</td></tr>';
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $equipementachat->idEquipement . '</td>';
            echo'<td bgcolor="#ffffff">Proc. : ' . $equipementachat->processeur . '<br/>
                    Mémoire : '. $equipementachat->memoire . '<br/>
                    Disque : ' . $equipementachat->disque . '<br/>
                    logiciels : ' . $equipementachat->logiciels . '<br/>
                    Type : '. $equipementachat->typemateriel . '<br/><br/>
                    Utilisateur : '. $nomutilisateur . '<br/><br/>
                    Date achat : ' . afficher_date_formate($equipementachat->dateachat) . '</td>';
            echo'</tr>'; 
            echo'</table>
                <br/><br/>';  
        }         
        
        $result = Gestion::lister("EquipementLocation");
        
        foreach ($result as &$equipementlocation){
                //utilisateur
                $result1 = Gestion::lister("Utilisateur","idUtilisateur",$equipementlocation->idUtilisateur);
                $nomutilisateur="";
                foreach ($result1 as &$utilisateur){
                    $nomutilisateur=$utilisateur->nom .' '.$utilisateur->prenom;
                }
                
                //societe
                $result1 = Gestion::lister("Societe","idSociete",$equipementlocation->idSociete);
                $nomsociete="";
                foreach ($result1 as &$societe){
                    $nomsociete=$societe->nom ;
                }
                
            echo'<table border="0" bgcolor="#FFB4AD">
                <tr><td width="50">ID</td><td>Informations</td></tr>';
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $equipementlocation->idEquipement . '</td>';
            echo'<td bgcolor="#ffffff">Proc. : ' . $equipementlocation->processeur . '<br/>
                    Mémoire : '. $equipementlocation->memoire . '<br/>
                    Disque : ' . $equipementlocation->disque . '<br/>
                    logiciels : ' . $equipementlocation->logiciels . '<br/>
                    Type : '. $equipementlocation->typemateriel . '<br/><br/>
                    Utilisateur : '. $nomutilisateur . '<br/><br/>
                    Société : '. $nomsociete . '<br/><br/>
                    Durée : '. $equipementlocation->duree . ' mois<br/><br/>
                    Date début : '. afficher_date_formate($equipementlocation->datedebut) . '<br/><br/>
                    Date fin : '. afficher_date_formate($equipementlocation->datefin) . '<br/><br/>    
                    Date pré-étude : '. afficher_date_formate($equipementlocation->datepreetude) . '<br/><br/>
                    Date rapport : '. afficher_date_formate($equipementlocation->dateprerapport) . '<br/><br/>
                    Date cahier des charges : ' . afficher_date_formate($equipementlocation->datecahiercharge) . '</td>';
            echo'</tr>'; 
            echo'</table>';
        }            
                    
        echo'</div>';
    }

?>
