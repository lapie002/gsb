<?php
class Utilisateur extends Modele
{
	

	public function __construct($idUtilisateur=null, $idSecteur=null, $nom=null, $prenom=null, $adresse=null, $codepostal=null, $ville=null, $fonction=null, $dateembauche=null, $email=null, $matricule=null, $niveauacces=null, $motdepasse=null) // Pour PDO::fetchAll
	{
		if(!($idUtilisateur==null && $idSecteur==null && $nom==null && $prenom=null && $adresse==null && $codepostal==null && $ville==null && $fonction==null && $dateembauche==null && $email==null && $matricule==null && $niveauacces==null && $motdepasse==null)) // diff�rent de PDO::fetchAll
		{
			$this->proprietes['idUtilisateur']=$idUtilisateur;
			$this->proprietes['idSecteur']=$idSecteur;
                        $this->proprietes['nom']=$nom;
                        $this->proprietes['prenom']=$prenom;
                        $this->proprietes['adresse']=$adresse;
			$this->proprietes['codepostal']=$codepostal;
                        $this->proprietes['ville']=$ville;
                        $this->proprietes['fonction']=$fonction;
                        $this->proprietes['dateembauche']=$dateembauche;
                        $this->proprietes['email']=$email;
                        $this->proprietes['matricule']=$matricule;
                        $this->proprietes['niveauacces']=$niveauacces;
                        $this->proprietes['motdepasse']=$motdepasse;
		}
	}
}
?>
