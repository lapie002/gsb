<?php

function afficher_corps()
{
    echo'<div class="divZonePage">';
    
    echo'<h2>Ajouter une demande</h2>
         <br/>';
    
    echo'<form action="index.php?id_page=demandeajouterbdd" method="post">';
    
    echo'<fieldset>
		<legend><i>Les champs signalés par * sont obligatoires<i></legend>
		<p><label>
		* <span class="obligatoire">Equipement : </span>
                <select name="idEquipement" id="idEquipement">';
                    $result = Gestion::lister("EquipementLocation","idUtilisateur",$_SESSION['num_auto']);
                    foreach ($result as &$equipementlocation){
                        echo'<option value="'. $equipementlocation->idEquipement .'">'.$equipementlocation->processeur.' '.$equipementlocation->memoire.'</option>';                        
                    }
                echo'</select>
                </label></p>
		<p><label>
		* <span class="obligatoire">Motif : </span>
		<input class="validate[required]" type="text" name="motif" id="motif" />
		</label></p>
                <p><label>
		* <span class="obligatoire">datedemande : </span>
		<input class="validate[required]" type="text" name="datedemande" id="datedemande" /> jj/mm/aaaa
		</label></p>
                <p><label>
		* <span class="obligatoire">idUtilisateur : '.$_SESSION['num_auto'].'</span>
		</label></p>
                <input type="hidden" name="idUtilisateur" value="'.$_SESSION['num_auto'].'">
        </fieldset>
        
	<p><input type="submit"  value="Ajouter" /></p>';
    
    echo'</form>';
    
    echo'</div>';
}
    
?>
