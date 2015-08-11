<?php
class Location extends Modele
{
	

	public function __construct($idEquipement=null, $idSociete=null, $duree=null, $datedebut=null, $datefin=null, $datepreetude=null, $dateprerapport=null, $datecahiercharge=null) // Pour PDO::fetchAll
	{
		if(!($idEquipement=null && $idSociete=null && $duree=null && $datedebut=null && $datefin=null && $datepreetude=null && $dateprerapport=null && $datecahiercharge=null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idEquipement']=$idEquipement;
			$this->proprietes['idSociete']=$idSociete;
                        $this->proprietes['duree']=$duree;
			$this->proprietes['datedebut']=$datedebut;
                        $this->proprietes['datefin']=$datefin;
                        $this->proprietes['datepreetude']=$datepreetude;
                        $this->proprietes['dateprerapport']=$dateprerapport;
                        $this->proprietes['datecahiercharge']=$datecahiercharge;
		}
	}
}
?>
