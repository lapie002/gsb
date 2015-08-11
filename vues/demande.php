<?php

function afficher_corps()
{
    echo'<div class="divZonePage">
                    
            <h2>Liste des demandes</h2>
            <br/>';
        
        $result = Gestion::lister("demande");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="3">Demande : <a href="index.php?id_page=demandeajouter">Ajouter</a></td></tr>
            <tr><td width="50">ID</td><td colspan="2">Informations</td></tr>';
        
        foreach ($result as &$demande){
            echo'<tr>';
                //utilisateur
                $result1 = Gestion::lister("Utilisateur","idUtilisateur",$demande->idUtilisateur);
                $nomutilisateur="";
                foreach ($result1 as &$utilisateur){
                    $nomutilisateur=$utilisateur->nom .' '.$utilisateur->prenom;
                }
                //equipement
                $result1 = Gestion::lister("Equipement","idEquipement",$demande->idEquipement);
                $nomequipement="";
                foreach ($result1 as &$equipement){
                    $nomequipement='id "'.$equipement->idEquipement .'" - proc. '.$equipement->processeur .' - ram. '.$equipement->memoire.' - os. '.$equipement->logiciels;
                }
            echo'<td bgcolor="#ffffff">' . $demande->idDemande . '</td>';
            echo'<td bgcolor="#ffffff">Equipement : ' . $nomequipement . '<br/><br/>
                    Utilisateur : '. $nomutilisateur . '<br/><br/>
                    motif : '. $demande->motif . '<br/><br/>
                    Date demande : ' . afficher_date_formate($demande->datedemande) . '</td>';
            
            $result2=Gestion::lister("Intervention","idDemande",$demande->idDemande);
            
            $nbIntervention=count($result2);
            if($nbIntervention==0)
            {
                echo '<td bgcolor="#ffffff"><a href="index.php?id_page=demandesupprimerbdd&idDemande='.$demande->idDemande.'">supprimer</a></td>';    
            }else{
                echo '<td bgcolor="#ffffff"></td>';
            }
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
    echo'</div>';
}

?>
