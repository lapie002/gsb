<?php

class Equipement extends Modele
{
	

	public function __construct($idEquipement=null, $idUtilisateur=null, $processeur=null, $memoire=null, $disque=null, $logiciels=null, $typemateriel=null) // Pour PDO::fetchAll
	{
		if(!($idEquipement==null && $idUtilisateur==null && $processeur==null && $memoire==null && $disque==null && $logiciels==null && $typemateriel==null)) // diff �rent de PDO::fetchAll
		{
                        $this->proprietes['idEquipement']=$idEquipement;
			$this->proprietes['idUtilisateur']=$idUtilisateur;
                        $this->proprietes['processeur']=$processeur;
                        $this->proprietes['memoire']=$memoire;
                        $this->proprietes['disque']=$disque;
                        $this->proprietes['logiciels']=$logiciels;
                        $this->proprietes['typemateriel']=$typemateriel;
		}
	}
}

?>
