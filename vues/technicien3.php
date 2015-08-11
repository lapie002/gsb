<?php

function afficher_corps()
    {
        echo'<div class="divZonePage">
                
                    
                    <h2>Page technicien 3</h2>
                    <form method="POST" action="index.php?id_page=connexion">
                        <input type="hidden" name="user_n" value="">
                        <input type="hidden" name="user_p" value="">
                        <input type="submit" name="connexion" class="boutonConnexion" value=" se deconnecter ">
                    </form>
                    <br/>
                    
                    <a href="index.php?id_page=societe">Liste des Sociétés</a><br/>
                    <br/>
                    <a href="index.php?id_page=materiel">Liste du Materiel</a><br/>
                    <br/>
                    <a href="index.php?id_page=demandelist">Liste des Demandes</a><br/>
                    <br/>
                    <a href="index.php?id_page=connexion">Liste des Interventions</a><br/>
                    <br/>
                    <a href="index.php?id_page=utilisateurliste">Liste des Utilisateurs</a><br/>
                    <br/>
                
            </div>';
    }

?>
