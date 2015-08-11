<?php
class EquipementLocation extends Equipement 
{
	public function __construct($idEquipement=null, $idUtilisateur=null, $processeur=null, $memoire=null, $disque=null, $logiciels=null, $typemateriel=null, 
                                    $idSociete=null, $duree=null, $datedebut=null, $datefin=null, $datepreetude=null, $dateprerapport=null, $datecahiercharge=null) // Pour PDO::fetchAll
	{
		if(!($idEquipement==null && $idUtilisateur==null && $processeur==null && $memoire==null && $disque==null && $logiciels==null && $typemateriel==null && 
                     $idSociete==null && $duree==null && $datedebut==null && $datefin==null && $datepreetude==null && $dateprerapport==null && $datecahiercharge==null )) // diff�rent de PDO::fetchAll
		{
			parent::__construct($idEquipement, $idUtilisateur, $processeur, $memoire, $disque, $logiciels, $typemateriel);
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
