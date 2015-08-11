<?php
class EquipementAchat extends Equipement 
{
	public function __construct($idEquipement=null, $idUtilisateur=null, $processeur=null, $memoire=null, $disque=null, $logiciels=null, $typemateriel=null, $dateachat=null) // Pour PDO::fetchAll
	{
		if(!($idEquipement==null && $idUtilisateur==null && $processeur==null && $memoire==null && $disque==null && $logiciels==null && $typemateriel==null && $dateachat==null)) // diff�rent de PDO::fetchAll
		{
			parent::__construct($idEquipement, $idUtilisateur, $processeur, $memoire, $disque, $logiciels, $typemateriel);
			$this->proprietes['dateachat']=$dateachat;
		}
	}
}
?>
