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
                $_SESSION['idSecteur'] = $utilisateur->idSecteur;
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
    $_SESSION['idSecteur'] = "";
    return false;

}

function renvoi_secteur_utilisateur($idUtilisateur) {
    
    try {
        
        $client = new SoapClient(WSDL);
        $result = $client->utilisateurListerUn($idUtilisateur);
        //$result = Gestion::lister("Utilisateur","idUtilisateur",$idUtilisateur);

        //return $reponse;
        
        foreach($result as &$utilisateur)
        {
            return $utilisateur->idSecteur;
        }
        
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
}

?>
