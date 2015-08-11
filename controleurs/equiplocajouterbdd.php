<?php

function afficher_corps()
{
    $idUtilisateur=$_POST['idUtilisateur'];
    $processeur=$_POST['processeur'];
    $memoire=$_POST['memoire'];
    $disque=$_POST['disque'];
    $logiciels=$_POST['logiciels'];
    $typemateriel=$_POST['typemateriel'];
    $idSociete=$_POST['idSociete'];
    $duree=$_POST['duree'];
    $datedebut=retourne_date_formate($_POST['datedebut']);
    $datefin=retourne_date_formate($_POST['datefin']);
    $datepreetude=retourne_date_formate($_POST['datepreetude']);
    $dateprerapport=retourne_date_formate($_POST['dateprerapport']);
    $datecahiercharge= retourne_date_formate($_POST['datecahiercharge']);
    
    $equipementlocation=new EquipementLocation(null,$idUtilisateur, $processeur, $memoire, $disque, $logiciels, $typemateriel, $idSociete, $duree, $datedebut, $datefin, $datepreetude, $dateprerapport, $datecahiercharge);
    
    echo'<div class="divZonePage">
                    
            <h2>Ajout équipement location</h2>
            <br/>';

            Gestion::ajouter($equipementlocation);
            
            echo'Matériel ajouté<br/>
                <a href="index.php?id_page=materiel">- Retour -</a>';
    
    echo'</div>';
}   

?>
