<?php

function afficher_corps()
{
    
    echo'<div class="divZonePage">';
  
    echo'<h2>Ajouter une société</h2>
         <br/>';
    
    echo'<form action="index.php?id_page=utilisateurajouterbdd" method="POST">';
    
    echo'<fieldset>
		<legend><i>Les champs signalés par * sont obligatoires<i></legend>
		<p><label>
		* <span class="obligatoire">Secteur : </span>
                <select name="idSecteur" id="idSecteur">';
                    $result = Gestion::lister("Secteur");
                    foreach ($result as &$secteur){
                        echo'<option value="'. $secteur->idSecteur .'">'.$secteur->libelle.' - '.$secteur->nomregion.'</option>';                        
                    }
                echo'</select>
		</label></p>
		<p></p>
		<p><label>
		* <span class="obligatoire">nom : </span>
		<input class="validate[required]" type="text" name="nom" id="nom" />
		</label></p>
                <p><label>
		* <span class="obligatoire">prenom : </span>
		<input class="validate[required]" type="text" name="prenom" id="prenom" />
		</label></p>
                <p><label>
		* <span class="obligatoire">adresse : </span>
		<input class="validate[required]" type="text" name="adresse" id="adresse" />
		</label></p>
                <p><label>
		* <span class="obligatoire">code postal : </span>
		<input class="validate[required]" type="text" name="codepostal" id="codepostal" />
		</label></p>
                <p><label>
		* <span class="obligatoire">ville : </span>
		<input class="validate[required]" type="text" name="ville" id="ville" />
		</label></p>
                <p><label>
		* <span class="obligatoire">fonction : </span>
                <select name="fonction" id="fonction">
                    <option value="utilisateur">Utilisateur</option>
                    <option value="techinicien">Technicien</option>
                </select>
		</label></p>
                <p><label>
		* <span class="obligatoire">date embauche : </span>
		<input class="validate[required]" type="text" name="dateembauche" id="dateembauche" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">email : </span>
		<input class="validate[required]" type="text" name="email" id="email" />
		</label></p>
                <p><label>
		* <span class="obligatoire">matricule : </span>
		<input class="validate[required]" type="text" name="matricule" id="matricule" />
		</label></p>
                <p><label>
		* <span class="obligatoire">niveau acces : </span>
                <select name="niveauacces" id="niveauacces">
                    <option value="1">niveau 1</option>
                    <option value="2">niveau 2</option>
                    <option value="3">niveau 3</option>
                </select>
		</label></p>
                <p><label>
		* <span class="obligatoire">motdepasse : </span>
		<input class="validate[required]" type="text" name="motdepasse" id="motdepasse" />
		</label></p>

        </fieldset>
	<p><input type="submit"  value="Ajouter" /></p>';
    
    echo'</form>';
    
    echo'</div>';
}
    
?>
