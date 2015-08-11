<?php
class Intervention extends Modele
{
	

	public function __construct($idIntervention=null, $idDemande=null, $datedebut=null, $dureetotale=null) // Pour PDO::fetchAll
	{
		if(!($idIntervention=null && $idDemande=null && $datedebut=null && $dureetotale=null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idIntervention']=$idIntervention;
			$this->proprietes['idDemande']=$idDemande;
                        $this->proprietes['datedebut']=$datedebut;
			$this->proprietes['dureetotale']=$dureetotale;
		}
	}
}
?>
