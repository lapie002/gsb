<?php
class Secteur extends Modele
{
	

	public function __construct($idSecteur=null, $libelle=null, $nomregion=null) // Pour PDO::fetchAll
	{
		if(!($idSecteur==null && $libelle==null && $nomregion==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idSecteur']=$idSecteur;
			$this->proprietes['libelle']=$libelle;
                        $this->proprietes['$nomregion']=$nomregion;
		}
	}
}
?>
