<?php
class Posseder extends Modele
{
	

	public function __construct($idEtat=null, $idIntervention=null, $commentaire=null, $idPosseder=null) // Pour PDO::fetchAll
	{
		if(!($idEtat==null && $idIntervention==null && $commentaire==null && $idPosseder==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idEtat']=$idEtat;
			$this->proprietes['idIntervention']=$idIntervention;
                        $this->proprietes['commentaire']=$commentaire;
                        $this->proprietes['idPosseder']=$idPosseder;
		}
	}
}
?>
