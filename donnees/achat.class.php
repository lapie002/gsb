<?php

class Achat extends Modele
{
	

	public function __construct($idEquipement=null, $dateachat=null) // Pour PDO::fetchAll
	{
		if(!($idEquipement==null && $dateachat==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idEquipement']=$idEquipement;
			$this->proprietes['dateachat']=$dateachat;
		}
	}
}

?>