<?php

function afficher_corps()
{
    echo'<div class="divZonePage">';
    
    echo'<h2>Ajouter un matériel acheté</h2>
         <br/>';
    
    echo'<form action="index.php?id_page=equipachatajouterbdd" method="POST">';
    
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
		* <span class="obligatoire">date achat : </span>
		<input class="validate[required]" type="text" name="dateachat" id="dateachat" /> jj/mm/aaaa
		</label></p>

        </fieldset>
	<p><input type="submit"  value="Ajouter" /></p>';
    
    echo'</form>';
    
    echo'</div>';
}
    
?>
