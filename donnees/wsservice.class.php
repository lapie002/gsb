<?php

include_once "gestion.class.php"; //nom du fichier de gestion

class WSService //nom de la classe
{

        /**
	*Nom de la fonction : achatAjouterUn
	*
	*Parametre entree : 
	*$achat : object
	*
	*Parametre sortie : 
	*	**/
	public function achatAjouterUn($achat)
	{
		Gestion::ajouter($achat);// votre code ici
	}
        
	/**
	*Nom de la fonction : achatListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function achatListerTous()
	{
		// votre code ici
		return Gestion::lister("Achat");//type array
	}

	/**
	*Nom de la fonction : achatListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function achatListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Achat","idEquipement",$id);//type object
	}

	/**
	*Nom de la fonction : achatModifierUn
	*
	*Parametre entree : 
	*$id : int,$achat : object
	*
	*Parametre sortie : 
	*	**/
	public function achatModifierUn($id,$achat)
	{
		Gestion::modifier($achat);// votre code ici
	}

	/**
	*Nom de la fonction : achatSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function achatSupprimerUn($id)
	{
		Gestion::supprimer("Achat","idEquipement",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : demandeAjouterUn
	*
	*Parametre entree : 
	*$demande : object
	*
	*Parametre sortie : 
	*	**/
	public function demandeAjouterUn($demande)
	{
		Gestion::ajouter($demande);// votre code ici
	}

	/**
	*Nom de la fonction : demandeListeTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function demandeListeTous()
	{
		// votre code ici
		return Gestion::lister("Demande");//type array
	}

	/**
	*Nom de la fonction : demandeListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function demandeListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Demande","idDemande",$id);//type object
	}

	/**
	*Nom de la fonction : demandeModifierUn
	*
	*Parametre entree : 
	*$id : int,$demande : object
	*
	*Parametre sortie : 
	*	**/
	public function demandeModifierUn($id,$demande)
	{
		Gestion::modifier($demande);// votre code ici
	}

	/**
	*Nom de la fonction : demandeSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function demandeSupprimerUn($id)
	{
		Gestion::supprimer("Demande","idDemande",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : equipementAjouterUn
	*
	*Parametre entree : 
	*$equipement : object
	*
	*Parametre sortie : 
	*	**/
	public function equipementAjouterUn($equipement)
	{
		Gestion::ajouter($equipement);// votre code ici
	}

	/**
	*Nom de la fonction : equipementListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementListerTous()
	{
		// votre code ici
		return Gestion::lister("Equipement");//type array
	}

	/**
	*Nom de la fonction : equipementListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function equipementListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Equipement","idEquipement",$id);//type object
	}

	/**
	*Nom de la fonction : equipementModifierUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function equipementModifierUn($id,$equipement)
	{
		Gestion::modifier($equipement);// votre code ici
	}

	/**
	*Nom de la fonction : equipementSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function equipementSupprimerUn($id)
	{
		Gestion::supprimer("Equipement","idEquipement",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : equipementachatAjouterUn
	*
	*Parametre entree : 
	*$equipementachat : object
	*
	*Parametre sortie : 
	*	**/
	public function equipementachatAjouterUn($equipementachat)
	{
		Gestion::ajouter($equipementachat);// votre code ici
	}

	/**
	*Nom de la fonction : equipementachatListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementachatListerTous()
	{
		// votre code ici
		return Gestion::lister("EquipementAchat");//type array
	}

	/**
	*Nom de la fonction : equipementachatListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function equipementachatListerUn($id)
	{
		// votre code ici
		return Gestion::lister("EquipementAchat","idEquipement",$id);//type object
	}

	/**
	*Nom de la fonction : equipementachatModifierUn
	*
	*Parametre entree : 
	*$id : int,$equipementachat : object
	*
	*Parametre sortie : 
	*	**/
	public function equipementachatModifierUn($id,$equipementachat)
	{
		Gestion::modifier($equipementachat);// votre code ici
	}

	/**
	*Nom de la fonction : equipementachatSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function equipementachatSupprimerUn($id)
	{
		Gestion::supprimer("EquipementAchat","idEquipement",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : equipementlocationAjouterUn
	*
	*Parametre entree : 
	*$equipementlocation : object
	*
	*Parametre sortie : 
	*	**/
	public function equipementlocationAjouterUn($equipementlocation)
	{
		Gestion::ajouter($equipementlocation);// votre code ici
	}

	/**
	*Nom de la fonction : equipementlocationListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementlocationListerTous()
	{
		// votre code ici
		return Gestion::lister("EquipementLocation");//type array
	}

	/**
	*Nom de la fonction : equipementlocationListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function equipementlocationListerUn($id)
	{
		// votre code ici
		return Gestion::lister("EquipementLocation","idEquipement",$id);//type object
	}

	/**
	*Nom de la fonction : equipementlocationModifierUn
	*
	*Parametre entree : 
	*$id : int,$equipementlocation : object
	*
	*Parametre sortie : 
	*	**/
	public function equipementlocationModifierUn($id,$equipementlocation)
	{
		Gestion::modifier($equipementlocation);// votre code ici
	}

	/**
	*Nom de la fonction : equipementlocationSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function equipementlocationSupprimerUn($id)
	{
		Gestion::supprimer("EquipementLocation","idEquipement",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : etatAjouterUn
	*
	*Parametre entree : 
	*$etat : object
	*
	*Parametre sortie : 
	*	**/
	public function etatAjouterUn($etat)
	{
		Gestion::ajouter($etat);// votre code ici
	}

	/**
	*Nom de la fonction : etatListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function etatListerTous()
	{
		// votre code ici
		return Gestion::lister("Etat");//type array
	}

	/**
	*Nom de la fonction : etatListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function etatListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Etat","idEtat",$id);//type object
	}

	/**
	*Nom de la fonction : etatModifierUn
	*
	*Parametre entree : 
	*$id : int,$etat : object
	*
	*Parametre sortie : 
	*	**/
	public function etatModifierUn($id,$etat)
	{
		Gestion::modifier($etat);// votre code ici
	}

	/**
	*Nom de la fonction : etatSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function etatSupprimerUn($id)
	{
		Gestion::supprimer("Etat","idEtat",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : interventionAjouterUn
	*
	*Parametre entree : 
	*$intervention : object
	*
	*Parametre sortie : 
	*	**/
	public function interventionAjouterUn($intervention)
	{
		Gestion::ajouter($intervention);// votre code ici
	}

	/**
	*Nom de la fonction : interventionListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function interventionListerTous()
	{
		// votre code ici
		return Gestion::lister("Intervention");//type array
	}

	/**
	*Nom de la fonction : interventionListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function interventionListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Intervention","idIntervention",$id);//type object
	}

	/**
	*Nom de la fonction : interventionModifierUn
	*
	*Parametre entree : 
	*$id : int,$intervention : object
	*
	*Parametre sortie : 
	*	**/
	public function interventionModifierUn($id,$intervention)
	{
		Gestion::modifier($intervention);// votre code ici
	}

	/**
	*Nom de la fonction : interventionSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function interventionSupprimerUn($id)
	{
		Gestion::supprimer("Intervention","idIntervention",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : possederAjouterUn
	*
	*Parametre entree : 
	*$posseder : object
	*
	*Parametre sortie : 
	*	**/
	public function possederAjouterUn($posseder)
	{
		Gestion::ajouter($posseder);// votre code ici
	}

	/**
	*Nom de la fonction : possederListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function possederListerTous()
	{
		// votre code ici
		return Gestion::lister("Posseder");//type array
	}

	/**
	*Nom de la fonction : possederListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function possederListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Posseder","idPosseder",$id);//type object
	}

	/**
	*Nom de la fonction : possederModifierUn
	*
	*Parametre entree : 
	*$id : int,$posseder : object
	*
	*Parametre sortie : 
	*	**/
	public function possederModifierUn($id,$posseder)
	{
		Gestion::modifier($posseder);// votre code ici
	}

	/**
	*Nom de la fonction : possederSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function possederSupprimerUn($id)
	{
		Gestion::supprimer("Posseder","idPosseder",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : secteurAjouterUn
	*
	*Parametre entree : 
	*$secteur : object
	*
	*Parametre sortie : 
	*	**/
	public function secteurAjouterUn($secteur)
	{
		Gestion::ajouter($secteur);// votre code ici
	}

	/**
	*Nom de la fonction : secteurListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function secteurListerTous()
	{
		// votre code ici
		return Gestion::lister("Secteur");//type array
	}

	/**
	*Nom de la fonction : secteurListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function secteurListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Secteur","idSecteur",$id);//type object
	}

	/**
	*Nom de la fonction : secteurModifierUn
	*
	*Parametre entree : 
	*$id : int,$secteur : object
	*
	*Parametre sortie : 
	*	**/
	public function secteurModifierUn($id,$secteur)
	{
		Gestion::modifier($secteur);// votre code ici
	}

	/**
	*Nom de la fonction : secteurSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function secteurSupprimerUn($id)
	{
		Gestion::supprimer("Secteur","idSecteur",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : societeAjouterUn
	*
	*Parametre entree : 
	*$societe : object
	*
	*Parametre sortie : 
	*	**/
	public function societeAjouterUn($societe)
	{
		Gestion::ajouter($societe);// votre code ici
	}

	/**
	*Nom de la fonction : societeListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function societeListerTous()
	{
		// votre code ici
		return Gestion::lister("Societe");//type array
	}

	/**
	*Nom de la fonction : societeListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function societeListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Societe","idSociete",$id);//type object
	}

	/**
	*Nom de la fonction : societeModifierUn
	*
	*Parametre entree : 
	*$id : int,$societe : object
	*
	*Parametre sortie : 
	*	**/
	public function societeModifierUn($id,$societe)
	{
		Gestion::modifier($societe);// votre code ici
	}

	/**
	*Nom de la fonction : societeSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function societeSupprimerUn($id)
	{
		Gestion::supprimer("Societe","idSociete",$id);// votre code ici
	}
        
        /**
	*Nom de la fonction : utilisateurAjouterUn
	*
	*Parametre entree : 
	*$utilisateur : object
	*
	*Parametre sortie : 
	*	**/
	public function utilisateurAjouterUn($utilisateur)
	{
		Gestion::ajouter($utilisateur);// votre code ici
	}

	/**
	*Nom de la fonction : utilisateurListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function utilisateurListerTous()
	{
		// votre code ici
		return Gestion::lister("Utilisateur");//type array
	}

	/**
	*Nom de la fonction : utilisateurListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*object
	**/
	public function utilisateurListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Utilisateur","idUtilisateur",$id);//type object
	}

	/**
	*Nom de la fonction : utilisateurModifierUn
	*
	*Parametre entree : 
	*$id : int,$utilisateur : object
	*
	*Parametre sortie : 
	*	**/
	public function utilisateurModifierUn($id,$utilisateur)
	{
		Gestion::modifier($utilisateur);// votre code ici
	}

	/**
	*Nom de la fonction : utilisateurSupprimerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*	**/
	public function utilisateurSupprimerUn($id)
	{
		Gestion::supprimer("Utilisateur","idUtilisateur",$id);// votre code ici
	}

}

?>
