<?php

function afficher_corps()
{
    echo'<div class="divZonePage">';
    
    echo'<h2>Ajouter un matériel location</h2>
         <br/>';
    
    echo'<form action="index.php?id_page=equiplocajouterbdd" method="POST">';
    
    echo'<fieldset>
		<legend><i>Les champs signalés par * sont obligatoires<i></legend>
		<p><label>
		* <span class="obligatoire">Utilisateur : </span>
                <select name="idUtilisateur" id="idUtilisateur">';
                    $result = Gestion::lister("Utilisateur");
                    foreach ($result as &$utilisateur){
                        $fonction=str_replace(" ","",$utilisateur->fonction);
                        if($fonction=="utilisateur"){
                            echo'<option value="'. $utilisateur->idUtilisateur .'">'.$utilisateur->nom.' '.$utilisateur->prenom.'</option>';
                        }                    
                    }
                echo'</select>
		</label></p>
		<p></p>
		<p><label>
		* <span class="obligatoire">processeur : </span>
		<input class="validate[required]" type="text" name="processeur" id="processeur" />
		</label></p>
                <p><label>
		* <span class="obligatoire">memoire : </span>
		<input class="validate[required]" type="text" name="memoire" id="memoire" />
		</label></p>
                <p><label>
		* <span class="obligatoire">disque : </span>
		<input class="validate[required]" type="text" name="disque" id="disque" />
		</label></p>
                <p><label>
		* <span class="obligatoire">logiciels : </span>
		<input class="validate[required]" type="text" name="logiciels" id="logiciels" />
		</label></p>
                <p><label>
		* <span class="obligatoire">type materiel : </span>
		<input class="validate[required]" type="text" name="typemateriel" id="typemateriel" />
		</label></p>
                <p><label>
		* <span class="obligatoire">Société : </span>
                <select name="idSociete" id="idSociete">';
                    $result = Gestion::lister("Societe");
                    foreach ($result as &$societe){
                        echo'<option value="'. $societe->idSociete .'">'.$societe->nom.'</option>';
                    }
                echo'</select>
		</label></p>
                <p><label>
		* <span class="obligatoire">duree : </span>
		<input class="validate[required]" type="text" name="duree" id="duree" /> mois
		</label></p>
                <p><label>
		* <span class="obligatoire">date début : </span>
		<input class="validate[required]" type="text" name="datedebut" id="datedebut" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">date fin : </span>
		<input class="validate[required]" type="text" name="datefin" id="datefin" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">date pré-étude : </span>
		<input class="validate[required]" type="text" name="datepreetude" id="datepreetude" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">date pré rapport : </span>
		<input class="validate[required]" type="text" name="dateprerapport" id="dateprerapport" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">date cahier des charges : </span>
		<input class="validate[required]" type="text" name="datecahiercharge" id="datecahiercharge" /> jj/mm/aaaa
		</label></p>

        </fieldset>
	<p><input type="submit"  value="Ajouter" /></p>';
    
    echo'</form>';
    
    echo'</div>';
}
    
?>
