<?php

function afficher_corps()
{
    echo'<div class="divZonePage">
                    
            <h2>Liste des utilisateurs</h2>
            <br/>';
            
        $result = Gestion::lister("Utilisateur");
        
        echo'<table border="0" bgcolor="#FFB4AD">
            <tr><td colspan="4">Utilisateur : <a href="index.php?id_page=utilisateurajouter">Ajouter</a></td></tr>
            <tr><td>ID</td><td>Informations</td><td>Editer</td><td>Supprimer</td></tr>';
        
        foreach ($result as &$utilisateur){
            $libellesecteur="";
                    $result1 = Gestion::lister("Secteur","idSecteur",$utilisateur->idSecteur);
                    foreach ($result1 as &$secteur){
                        $libellesecteur=$secteur->libelle.' - '.$secteur->nomregion;
                    }
            echo'<tr>';
            echo'<td bgcolor="#ffffff">' . $utilisateur->idUtilisateur . '</td>';
            echo'<td bgcolor="#ffffff">' . $utilisateur->nom . ' '.$utilisateur->prenom.' - '
                    . $utilisateur->adresse . ' - ' . $utilisateur->codepostal . ' ' . $utilisateur->ville . '<br/>
                    date embauche : ' . $utilisateur->dateembauche . ' - matricule : ' . $utilisateur->matricule . '<br/>
                    fonction : '. $utilisateur->fonction . ' - niveau accès : ' . $utilisateur->niveauacces . ' - Secteur : '.$libellesecteur.'<hr/>    
                    email : '. $utilisateur->email . ' - 
                    mot de passe : ' . $utilisateur->motdepasse . '<br/>
                    
                    <hr/></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=utilisateurediter&idUtilisateur='.$utilisateur->idUtilisateur.'">Editer</a></td>';
            echo'<td bgcolor="#ffffff"><a href="index.php?id_page=utilisateursupprimerbdd&idUtilisateur='.$utilisateur->idUtilisateur.'">supprimer</a></td>';
           
            echo'</tr>'; 
        }
                
        echo'</table>';
        
    echo'</div>';
}

?>
