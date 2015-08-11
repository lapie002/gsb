<?php
include("donnees/session_php.php");
include("vues/zones_template.php");

if (isset($_GET["id_page"])) {
    $id = $_GET["id_page"];

    if ($id == "connexion") {
        if (test_connexion()) {
            if ($_SESSION['type_co'] == 'technicien' && $_SESSION['niveau'] == '1') {
                include("vues/technicien1.php");
            } elseif ($_SESSION['type_co'] == 'technicien' && $_SESSION['niveau'] == '2') {
                include("vues/technicien1.php");
            } elseif ($_SESSION['type_co'] == 'technicien' && $_SESSION['niveau'] == '3') {
                include("vues/technicien3.php");
            } elseif ($_SESSION['type_co'] == 'utilisateur' && $_SESSION['niveau'] == '1') {
                include("vues/utilisateur.php");
            }else{
                include("vues/utilisateur.php");
            }
        } else {
            include("vues/accueil.php");
        }
    } else {
        if (test_connexion()) {
            $pos = strrpos($id, "bdd");
            if ($pos === false) { // note : 3 signes "="
                $lapage = 'vues/' . $id . '.php';// non trouvé ...
            }else{
                $lapage = 'controleurs/' . $id . '.php';// non trouvé ...
            }
            include $lapage;
            
        }else{
            include("vues/accueil.php");
        }
        
    }
} else {
    include("vues/accueil.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>GSB : gestion parc</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="js/fonctions.js"></script>
        <script src="js/controles.js"></script>
        <script type="text/javascript" src="js/refresh.js"></script> 
    </head>
    <body>
        <div class="divCorps">

<?php
    afficher_connexion();
?>

            <div class="divTitreSite">

            </div>

<?php
    afficher_menu();
?>

<?php
    afficher_corps();
?>            

        </div>
        <br/><br/>
    </body>
</html>