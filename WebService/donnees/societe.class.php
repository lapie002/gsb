<?php
class Societe extends Modele
{
	

	public function __construct($idSociete=null, $nom=null, $capital=null, $adresse=null, $codepostal=null, $ville=null, $villercs=null, $numerorcs=null, $nomrepresentant=null, $qualiterepresentant=null) // Pour PDO::fetchAll
	{
		if(!($idSociete==null && $nom==null && $capital==null && $adresse==null && $codepostal==null && $ville==null && $villercs==null && $numerorcs==null && $nomrepresentant==null && $qualiterepresentant==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idSociete']=$idSociete;
			$this->proprietes['nom']=$nom;
                        $this->proprietes['capital']=$capital;
                        $this->proprietes['adresse']=$adresse;
			$this->proprietes['codepostal']=$codepostal;
                        $this->proprietes['ville']=$ville;
                        $this->proprietes['villercs']=$villercs;
                        $this->proprietes['numerorcs']=$numerorcs;
                        $this->proprietes['nomrepresentant']=$nomrepresentant;
                        $this->proprietes['qualiterepresentant']=$qualiterepresentant;
		}
	}
}
?>
