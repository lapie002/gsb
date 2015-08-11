<?php

function afficher_connexion() {
    echo'<form method="POST" action="index.php?id_page=connexion">
                    <div class="divConnexion">
                        <span class="formConnect">Login <input type="text" name="user_n" class="zoneSaisie" placeholder="votre mail">
                         &nbsp;&nbsp;&nbsp;
                         Mot de passe <input type="password" name="user_p" class="zoneSaisie" placeholder="mot de passe">
                         &nbsp;&nbsp;
                         <input type="submit" name="connexion" class="boutonConnexion" value=" se connecter ">
                         &nbsp;&nbsp;&nbsp;</span>
                    </div>
                </form>';
    if (test_connexion()) {
        echo'<div class="btnEspacePerso"><a href="index.php?id_page=connexion">Espace pro</a></div>';
    } else {
        echo'<div class="btnConnect">Connexion</div>';
    }
}

function afficher_menu() {
    if (isset($_SESSION['user_name'])) {
        $lafonction = $_SESSION['type_co'];
        $leniveau = $_SESSION['niveau'];
    } else {
        $lafonction = "";
        $leniveau = "";
    }
    
    if ($lafonction == 'technicien' && $leniveau == '1') {
        
    } elseif ($lafonction == 'technicien' && $leniveau == '2') {
        
    } elseif ($lafonction == 'technicien' && $leniveau == '3') {
        echo'<ul class="divMenu">
                <li class="divMenuA"><a href="index.php?id_page=accueil">Accueil</a></li>
                <li class="divMenuA"><a href="index.php?id_page=societe">Sociétés</a></li>
                <li class="divMenuA"><a href="index.php?id_page=materiel">Materiel</a></li>
                <li class="divMenuA"><a href="index.php?id_page=demandelist">Demandes</a></li>
                <li class="divMenuA"><a href="index.php?id_page=connexion">Interventions</a></li>
                <li class="divMenuA"><a href="index.php?id_page=utilisateurliste">Utilisateurs</a></li>
             </ul>';
    } elseif ($lafonction == 'utilisateur' && $leniveau == '1') {
        echo'<ul class="divMenu">
                <li class="divMenuA"><a href="index.php?id_page=accueil">Accueil</a></li>
                <li class="divMenuA"><a href="index.php?id_page=demande">Demandes</a></li>
                <li class="divMenuA"><a href="index.php?id_page=interventionliste">Interventions</a></li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
             </ul>';
    } else {
        echo'<ul class="divMenu">
                <li class="divMenuA"><a href="index.php?id_page=accueil">Accueil</a></li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
                <li class="divMenuA"> </li>
             </ul>';
    }
   
    
}

function retourne_date_formate($unedate) {
    
    $lst=explode("/", $unedate);
    // echo $lst[0]; // jour    // echo $lst[1]; // mois    // echo $lst[2]; // annee
    
    $strtmp=$lst[2]."/".$lst[1]."/".$lst[0];
    
    return $strtmp;
    
}



function afficher_date_formate($unedate) {
    
    $lst=explode(" ", $unedate);
    // echo $lst[0]; // jour    // echo $lst[1]; // mois    // echo $lst[2]; // annee
    
    $lsttmp=explode("-",$lst[0]);
    
    return $lsttmp[2]."/".$lsttmp[1]."/".$lsttmp[0];
    
}

?>
