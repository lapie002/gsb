<?php

function afficher_corps()
{
    $idEquipement=$_GET['idEquipement'];
    
    $result1=Gestion::lister("EquipementLocation","idEquipement", $idEquipement);
    
    echo'<div class="divZonePage">';
    
    echo'<h2>Ajouter un matériel location</h2>
         <br/>';
    
    foreach($result1 as &$EquipementLocation){
    
       echo'<form action="index.php?id_page=equiplocmodifierbdd" method="POST">';
    
        echo'<fieldset>
                    <legend><i>Les champs signalés par * sont obligatoires<i></legend>
                    <p><label>
                    * <span class="obligatoire">Utilisateur : </span>
                    <select name="idUtilisateur" id="idUtilisateur">';
                        $result = Gestion::lister("Utilisateur");
                        foreach ($result as &$utilisateur){
                            $fonction=str_replace(" ","",$utilisateur->fonction);
                            if($fonction=="utilisateur"){
                                if($EquipementLocation->idUtilisateur==$utilisateur->idUtilisateur)
                                {
                                   echo'<option selected value="'. $utilisateur->idUtilisateur .'">'.$utilisateur->nom.' '.$utilisateur->prenom.'</option>'; 
                                }else{
                                   echo'<option value="'. $utilisateur->idUtilisateur .'">'.$utilisateur->nom.' '.$utilisateur->prenom.'</option>'; 
                                }       
                            }                    
                        }
                    echo'</select>
                    </label></p>
                    <p></p>
                    <p><label>
                    * <span class="obligatoire">processeur : </span>
                    <input class="validate[required]" type="text" name="processeur" id="processeur" value="'.$EquipementLocation->processeur.'"/>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">memoire : </span>
                    <input class="validate[required]" type="text" name="memoire" id="memoire"  value="'.$EquipementLocation->memoire.'"/>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">disque : </span>
                    <input class="validate[required]" type="text" name="disque" id="disque"  value="'.$EquipementLocation->disque.'"/>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">logiciels : </span>
                    <input class="validate[required]" type="text" name="logiciels" id="logiciels"  value="'.$EquipementLocation->logiciels.'"/>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">type materiel : </span>
                    <input class="validate[required]" type="text" name="typemateriel" id="typemateriel"  value="'.$EquipementLocation->typemateriel.'"/>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">Société : </span>
                    <select name="idSociete" id="idSociete">';
                        $result = Gestion::lister("Societe");
                        foreach ($result as &$societe){
                           
                            if($EquipementLocation->idSociete==$societe->idSociete)
                            {
                               echo'<option selected value="'. $societe->idSociete .'">'.$societe->nom.'</option>'; 
                            }else{
                                echo'<option value="'. $societe->idSociete .'">'.$societe->nom.'</option>';
                            }
                        }
                    echo'</select>
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">duree : </span>
                    <input class="validate[required]" type="text" name="duree" id="duree"  value="'.$EquipementLocation->duree.'"/> mois
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">date début : </span>
                    <input class="validate[required]" type="text" name="datedebut" id="datedebut"  value="'.afficher_date_formate($EquipementLocation->datedebut).'"/> jj/mm/aaaa
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">date fin : </span>
                    <input class="validate[required]" type="text" name="datefin" id="datefin"  value="'.afficher_date_formate($EquipementLocation->datefin).'"/> jj/mm/aaaa
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">date pré-étude : </span>
                    <input class="validate[required]" type="text" name="datepreetude" id="datepreetude"  value="'.afficher_date_formate($EquipementLocation->datepreetude).'"/> jj/mm/aaaa
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">date pré rapport : </span>
                    <input class="validate[required]" type="text" name="dateprerapport" id="dateprerapport"  value="'.afficher_date_formate($EquipementLocation->dateprerapport).'"/> jj/mm/aaaa
                    </label></p>
                    <p><label>
                    * <span class="obligatoire">date cahier des charges : </span>
                    <input class="validate[required]" type="text" name="datecahiercharge" id="datecahiercharge"  value="'.afficher_date_formate($EquipementLocation->datecahiercharge).'"/> jj/mm/aaaa
                    </label></p>

            </fieldset>
            <p><input type="submit"  value="Ajouter" /></p>';

        echo'</form>';
    }
    
    echo'</div>';
}
    
?>

