<?php

function __autoload($class_name) { // charge les classes à la demande
    include_once '../donnees/' . $class_name . '.class.php';
}

try {
    /*     * ************ Utilisateur ************* */

    echo 'Classe : Utilisateur<br/>';
    $obj = new Utilisateur(0, 1, "le nom", "le prenom", "adresse", "34000", "ville", "fonction", "12/10/2014", "lemail", "matricule", "1", "mdp");
    var_dump($obj);
    echo'<br/><br/>';

    echo 'Classe : Utilisateur<br/>';
    $obj = new Utilisateur(1, 1, "le nom1", "le prenom1", "adresse1", "34000", "ville", "fonction", "12/10/2014", "lemail", "matricule", "1", "mdp");
    echo $obj; //méthode __toString() de la classe Modele
    echo'<br/><br/>';

    /* $class = new ReflectionClass("Utilisateur"); //description de la classe Client fichier par fichier
      echo "<pre>".$class."</pre>"; //affichage de la description
      echo'<br/><br/>';
     */

    /*     * ************ Achat ************* */

    echo 'Classe : Achat<br/>';
    $obj = new Achat(1, "12/10/2014");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Client ************* */

    echo 'Classe : Client<br/>';
    $obj = new Client(0, "Nom", "34000");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Demande ************* */

    echo 'Classe : Demande<br/>';
    $obj = new Demande(1, 2, 3, "motif", "12/10/2014");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Etat ************* */

    echo 'Classe : Etat<br/>';
    $obj = new Etat(1, "libelle");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Intervention ************* */

    echo 'Classe : Intervention<br/>';
    $obj = new Intervention(0, 1, "12/10/2014", "duree");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Location ************* */

    echo 'Classe : Location<br/>';
    $obj = new Location(0, 1, "duree", "12/10/2014", "12/10/2014", "12/10/2014", "12/10/2014", "12/10/2014");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Posseder ************* */

    echo 'Classe : Posseder<br/>';
    $obj = new Posseder(0, 1, "commentaire");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Secteur ************* */

    echo 'Classe : Secteur<br/>';
    $obj = new Secteur(0, "libelle", "nomregion");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Societe ************* */

    echo 'Classe : Societe<br/>';
    $obj = new Societe(1, "nom", "capital", "adresse", "34500", "ville", "villercs", "numerorcs", "nom representant", "qualite");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ Equipement ************* */

    echo 'Classe : Equipement<br/>';
    $obj = new Equipement(1, 2, "processeur", "memoire", "disque", "logiciels", "type");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ EquipementAchat ************* */

    echo 'Classe : EquipementAchat<br/>';
    $obj = new EquipementAchat(1, 2, "processeur", "memoire", "disque", "logiciels", "type", "12/10/2014");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * ************ EquipementLocation ************* */

    echo 'Classe : EquipementLocation<br/>';
    $obj = new EquipementLocation(1, 2, "processeur", "memoire", "disque", "logiciels", "type", 1, "duree", "12/10/2014", "12/10/2014", "12/10/2014", "12/10/2014", "12/10/2014");
    var_dump($obj);
    echo'<br/><br/>';

    /*     * **************** Errors ****************** */


//try {
    //throw new Exception("Une erreur fatale a été provoquée", 42);
} catch (Exception $e) {
    echo "Exception " . $e->getCode() . ": " . $e->getMessage() . "<br />" .
    " dans le fichier " . $e->getFile() . " à la ligne " . $e->getLine() . "<br />";
}
?>