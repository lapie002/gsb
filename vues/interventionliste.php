<?php

function afficher_corps()
{
    echo'<div class="divZonePage">
                    
            <h2>Liste des demandes</h2>
            <br/>';
        
        $result = Gestion::lister("demande");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td width="50">ID</td><td>Informations</td><td>Interventions</td></tr>';
        
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
                    Date demande : ' . afficher_date_formate($demande->datedemande) . '<br/><br/>
                    motif : '. $demande->motif . '</td>';
            
                //intervention
                $result1 = Gestion::lister("Intervention","idDemande",$demande->idDemande);
                $nomintervention="";
                $numintervention=-1;
                foreach ($result1 as &$intervention){
                    $nomintervention='date début : '.$intervention->datedebut.'<br/>
                    durée : '.$intervention->dureetotale;
                    
                    //posseder
                    $result2 = Gestion::lister("Posseder","idIntervention",$intervention->idIntervention);
                    foreach ($result2 as &$posseder){
                        
                        //etat
                        $result3 = Gestion::lister("Etat","idEtat",$posseder->idEtat);
                        foreach ($result3 as &$etat){
                             $nomintervention = $nomintervention.'<hr/>Etat : '.$etat->libelle;
                             $nomintervention = $nomintervention.'<br/>Commentaire : '.$posseder->commentaire;
                        }
                         
                    }
                    
                }
            
            echo'<td bgcolor="#ffffff">'.$nomintervention.'<hr/></td>';
            echo'</tr>'; 
        }            
                
        echo'</table>';
        
    echo'</div>';
}

?>
