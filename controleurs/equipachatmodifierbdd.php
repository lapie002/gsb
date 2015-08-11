<?php
function afficher_corps()
{
    $idEquipement=$_POST['idEquipement'];
    $idUtilisateur=$_POST['utilisateur'];
    $processeur=$_POST['processeur'];
    $memoire=$_POST['memoire'];
    $disque=$_POST['disque'];
    $logiciels=$_POST['logiciels'];
    $typemateriel=$_POST['typemateriel'];
    $dateachat=retourne_date_formate($_POST['dateachat']);
        
    $equipementachat=new EquipementAchat(null,$idUtilisateur, $processeur, $memoire, $disque, $logiciels, $typemateriel, $dateachat);
    $equipementachat->idEquipement=$idEquipement;
    
    echo'<div class="divZonePage">
                    
            <h2>Modification equipement achat</h2>
            <br/>';

            Gestion::modifier(equipementachat);
            
            echo'Equipement ajouté<br/>
                <a href="index.php?id_page=materiel">- Retour -</a>';
    
    echo'</div>';
}
?>
