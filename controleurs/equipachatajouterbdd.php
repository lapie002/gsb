<?php

function afficher_corps()
{
    $idUtilisateur=$_POST['idUtilisateur'];
    $processeur=$_POST['processeur'];
    $memoire=$_POST['memoire'];
    $disque=$_POST['disque'];
    $logiciels=$_POST['logiciels'];
    $typemateriel=$_POST['typemateriel'];
    $dateachat=  retourne_date_formate($_POST['dateachat']);
    
    
    $equipementachat=new EquipementAchat(null,$idUtilisateur, $processeur, $memoire, $disque, $logiciels, $typemateriel, $dateachat);
                                
    echo'<div class="divZonePage">
                    
            <h2>Ajout équipement achat</h2>
            <br/>';

            Gestion::ajouter($equipementachat);
            
            echo'Matériel ajouté<br/>
                <a href="index.php?id_page=materiel">- Retour -</a>';
    
    echo'</div>';
}   

?>
