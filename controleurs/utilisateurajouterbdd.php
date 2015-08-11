<?php

function afficher_corps()
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $codepostal=$_POST['codepostal'];
    $ville=$_POST['ville'];
    $fonction=$_POST['fonction'];
    $dateembauche=$_POST['dateembauche'];
    $email=$_POST['email'];
    $matricule=$_POST['matricule'];
    $niveauacces=$_POST['niveauacces'];
    $motdepasse=$_POST['motdepasse'];
    $idSecteur=$_POST['idSecteur'];
        
    $utilisateur=new Utilisateur(null,$idSecteur,$nom, $prenom, $adresse, $codepostal, $ville, $fonction, $dateembauche, $email, $matricule, $niveauacces, $motdepasse);
                             
    echo'<div class="divZonePage">
                    
            <h2>Création utilisateur</h2>
            <br/>';

            Gestion::ajouter($utilisateur);
            
            echo'Utilisateur ajouté<br/>
                <a href="index.php?id_page=utilisateurliste">- Retour -</a>';
    
    echo'</div>';
}   

?>
