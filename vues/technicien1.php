<?php

function afficher_corps()
    {
        echo'<div class="divZonePage">
                
                    
                    <h2>Page technicien 1</h2>
                    <form method="POST" action="index.php?id_page=connexion">
                        <input type="hidden" name="user_n" value="">
                        <input type="hidden" name="user_p" value="">
                        <input type="submit" name="connexion" class="boutonConnexion" value=" se deconnecter ">
                    </form>
                    texte page technicien. texte page technicien.
                
            </div>';
    }

?>
