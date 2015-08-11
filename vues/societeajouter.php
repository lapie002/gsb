<?php

function afficher_corps()
{
    echo'<div class="divZonePage">';
    
    echo'<h2>Ajouter une société</h2>
         <br/>';
    
    echo'<form action="index.php?id_page=societeajouterbdd" method="POST">';
    
    echo'<fieldset>
		<legend><i>Les champs signalés par * sont obligatoires<i></legend>
		<p><label>
		* <span class="obligatoire">Nom : </span>
		<input class="validate[required]" type="text" name="nom" id="nom" />
		</label></p>
		<p></p>
		<p><label>
		* <span class="obligatoire">Capital : </span>
		<input class="validate[required]" type="text" name="capital" id="capital" /> €
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
		* <span class="obligatoire">ville rcs : </span>
		<input class="validate[required]" type="text" name="villercs" id="villercs" />
		</label></p>
                <p><label>
		* <span class="obligatoire">numero rcs : </span>
		<input class="validate[required]" type="text" name="numerorcs" id="numerorcs" />
		</label></p>
                <p><label>
		* <span class="obligatoire">nom representant : </span>
		<input class="validate[required]" type="text" name="nomrepresentant" id="nomrepresentant" />
		</label></p>
                <p><label>
		* <span class="obligatoire">qualite representant : </span>
		<input class="validate[required]" type="text" name="qualiterepresentant" id="qualiterepresentant" />
		</label></p>

        </fieldset>
	<p><input type="submit"  value="Ajouter" /></p>';
    
    echo'</form>';
    
    echo'</div>';
}
    
?>
