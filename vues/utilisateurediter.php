<?php
function afficher_corps()
{
    $idUtilisateur=$_GET['idUtilisateur'];
    
    $result1=Gestion::lister("Utilisateur","idUtilisateur", $idUtilisateur);
    
    echo'<div class="divZonePage">';
    
    echo'<h2>Modifier un Utilisateur</h2>
         <br/>';
    foreach($result1 as &$utilisateur){
    
    echo'<form action="index.php?id_page=utilisateurmodifierbdd" method="POST">';
    
    echo'<fieldset>
		<legend><i>Les champs signalés par * sont obligatoires<i></legend>
		<p><label>
		* <span class="obligatoire">Secteur : </span>
                <select name="idSecteur" id="idSecteur">';
                    $result = Gestion::lister("Secteur");
                    foreach ($result as &$secteur){
                        if($secteur->idSecteur==$utilisateur->idSecteur)
                        {
                            echo'<option selected value="'. $secteur->idSecteur .'">'.$secteur->libelle.' - '.$secteur->nomregion.'</option>';    
                        }else{
                            echo'<option value="'. $secteur->idSecteur .'">'.$secteur->libelle.' - '.$secteur->nomregion.'</option>';    
                        }
                                                
                    }
                echo'</select>
		</label></p>
		<p></p>
		<p><label>
		* <span class="obligatoire">nom : </span>
		<input class="validate[required]" type="text" name="nom" id="nom" value="' . $utilisateur->nom . '" />
		</label></p>
                <p><label>
		* <span class="obligatoire">prenom : </span>
		<input class="validate[required]" type="text" name="prenom" id="prenom" value="' . $utilisateur->prenom . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">adresse : </span>
		<input class="validate[required]" type="text" name="adresse" id="adresse" value="' . $utilisateur->adresse . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">code postal : </span>
		<input class="validate[required]" type="text" name="codepostal" id="codepostal" value="' . $utilisateur->codepostal . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">ville : </span>
		<input class="validate[required]" type="text" name="ville" id="ville" value="' . $utilisateur->ville . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">fonction : </span>
                <select name="fonction" id="fonction">
                    <option selected value="' . $utilisateur->fonction . '">'. $utilisateur->fonction .'</option>
                    <option value="utilisateur">Utilisateur</option>
                    <option value="techinicien">Technicien</option>
                </select>
		</label></p>
                <p><label>
		* <span class="obligatoire">date embauche : </span>
		<input class="validate[required]" type="text" name="dateembauche" id="dateembauche" value="' . $utilisateur->dateembauche . '"/> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">email : </span>
		<input class="validate[required]" type="text" name="email" id="email" value="' . $utilisateur->email . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">matricule : </span>
		<input class="validate[required]" type="text" name="matricule" id="matricule" value="' . $utilisateur->matricule . '"/>
		</label></p>
                <p><label>
		* <span class="obligatoire">niveau acces : </span>
                <select name="niveauacces" id="niveauacces">
                    <option selected value="' . $utilisateur->niveauacces . '">niveauacces' . $utilisateur->niveauacces . '</option>
                    <option value="1">niveau 1</option>
                    <option value="2">niveau 2</option>
                    <option value="3">niveau 3</option>
                </select>
		</label></p>
                <p><label>
		* <span class="obligatoire">motdepasse : </span>
		<input class="validate[required]" type="text" name="motdepasse" id="motdepasse" value="' . $utilisateur->motdepasse . '"/>
		</label></p>

        </fieldset>
        <input type="hidden" name="idUtilisateur" id="idUtilisateur" value="' . $utilisateur->idUtilisateur . '" />
	<p><input type="submit"  value="Modifier" /></p>';
    
    echo'</form>';
    }
    echo'</div>';
}
?>
