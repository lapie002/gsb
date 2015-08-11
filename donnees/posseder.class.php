<?php
class Posseder extends Modele
{
	

	public function __construct($idEtat=null, $idIntervention=null, $commentaire=null) // Pour PDO::fetchAll
	{
		if(!($idEtat==null && $idIntervention==null && $commentaire==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idEtat']=$idEtat;
			$this->proprietes['idIntervention']=$idIntervention;
                        $this->proprietes['commentaire']=$commentaire;
		}
	}
}
?>
