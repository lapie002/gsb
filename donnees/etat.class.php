<?php

class Etat extends Modele
{
	

	public function __construct($idEtat=null, $libelle=null) // Pour PDO::fetchAll
	{
		if(!($idEtat==null && $libelle==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idEtat']=$idEtat;
			$this->proprietes['libelle']=$libelle;
		}
	}
}

?>