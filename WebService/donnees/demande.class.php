<?php

class Demande extends Modele
{
	

	public function __construct($idDemande=null, $idEquipement=null, $idUtilisateur=null, $motif=null, $datedemande=null) // Pour PDO::fetchAll
	{
		if(!($idDemande==null && $idEquipement==null && $idUtilisateur==null && $motif==null && $datedemande==null)) // diff �rent de PDO::fetchAll
		{
			$this->proprietes['idDemande']=$idDemande;
                        $this->proprietes['idEquipement']=$idEquipement;
			$this->proprietes['idUtilisateur']=$idUtilisateur;
                        $this->proprietes['motif']=$motif;
                        $this->proprietes['datedemande']=$datedemande;
		}
	}
}

?>
