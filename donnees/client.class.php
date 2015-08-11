<?php

class Client extends Modele {

    public function __construct($id = null, $nom = null, $cp = null) {  //pour pdo fetchall
        if (!($id == null && $nom == null && $cp == null)) {    //different de pdo fetchall
            $this->proprietes['idClient'] = $id;
            $this->proprietes['nom'] = $nom;
            $this->proprietes['cp'] = $cp;
        }
    }

}

?>
