<?php

session_start();

include('connexion_php.php');
include('gestion.class.php');
include ('utilisateur.class.php');

// session
if (isset($_POST['user_n'])) {
    $_SESSION['user_name'] = $_POST['user_n'];
    //echo $_POST['user_ident'].'<br/>';
}

if (isset($_POST['user_p'])) {
    $_SESSION['user_pass'] = $_POST['user_p'];
}

/**
 * test les infos de connexion admin/organisateur/exposant/participant
 * @return boolean
 */
function test_connexion() {
    if (isset($_SESSION['user_name'])) {
        $lenom = $_SESSION['user_name'];
        $lemdp = $_SESSION['user_pass'];
    } else {
        $lenom = "";
        $lemdp = "";
    }

    
    try{
        $result = Gestion::lister("Utilisateur");
        
        foreach ($result as &$utilisateur){
        if ($lenom == $utilisateur->email && $lemdp = $utilisateur->motdepasse){
                $_SESSION['user_name'] = $utilisateur->email;
                $_SESSION['user_pass'] = $utilisateur->motdepasse;
                $fcttmp=  str_replace(" ", "", $utilisateur->fonction);
                $_SESSION['type_co'] = $fcttmp;
                $_SESSION['niveau'] = $utilisateur->niveauacces;
                $_SESSION['num_auto'] = $utilisateur->idUtilisateur;
                return true;
            }
        }
    }catch(Exception $e){
        return false;
    }
    $_SESSION['user_name'] = "";
    $_SESSION['user_pass'] = "";
    $_SESSION['type_co'] = "";
    $_SESSION['niveau'] = "";
    $_SESSION['num_auto'] = "";
    return false;

}

function renvoi_utilisateur() {
    if (isset($_SESSION['user_name'])) {
        $lenom = $_SESSION['user_name'];
        $lemdp = $_SESSION['user_pass'];
    } else {
        $lenom = "";
        $lemdp = "";
    }

    try {
        //$bdd = new PDO('mysql:host=db479668836.db.1and1.com;dbname=db479668836', 'dbo479668836', 'ukxnJqFf');
        $bdd = new PDO('mysql:host=' . connexion_mysql_server() . ';dbname=' . connexion_mysql_bdd() . '', connexion_mysql_user(), connexion_mysql_mdp());

        $reponse = $bdd->query('SELECT * FROM user_table WHERE mail="' . $lenom . '" AND pass="' . $lemdp . '"');

        return $reponse;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

?>
