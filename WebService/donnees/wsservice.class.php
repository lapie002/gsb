<?php

include_once "gestion.class.php"; //nom du fichier de gestion

class WSService //nom de la classe
{

	/**
	*Nom de la fonction : demandeListerTous
	*
	*Parametre entree : 
	*
	*
	*Parametre sortie : 
	*array
	**/
	public function demandeListerTous()
	{
		// votre code ici
		return gestion::lister("Demande");//type array
	}

	/**
	*Nom de la fonction : demandeListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function demandeListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Demande","idDemande",$id);//type array
	}

	/**
	*Nom de la fonction : demandeModifierUn
	*
	*Parametre entree : 
	*$idDemande : int,$idEquipement : int,$idUtilisateur : int,$motif : string,$datedemande : date
	*
	*Parametre sortie : 
	*	**/
	public function demandeModifierUn($idDemande,$idEquipement,$idUtilisateur,$motif,$datedemande)
	{
		$demande=new Demande($idDemande,$idEquipement,$idUtilisateur,$motif,$datedemande);

                Gestion::modifier($demande); // votre code ici
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
		return gestion::lister("Intervention");//type array
	}

	/**
	*Nom de la fonction : interventionListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function interventionListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Intervention","idDemande",$id);//type array
	}

	/**
	*Nom de la fonction : interventionModifierUn
	*
	*Parametre entree : 
	*$idIntervention : int,$idDemande : int,$datedebut : date,$dureetotale : date
	*
	*Parametre sortie : 
	*	**/
	public function interventionModifierUn($idIntervention,$idDemande,$datedebut,$dureetotale)
	{
		$intervention=new Intervention(null,$idDemande,$datedebut,$dureetotale);
                $intervention->idIntervention=$idIntervention;// votre code ici
                Gestion::modifier($intervention);
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
		return gestion::lister("Posseder");//type array
	}

	/**
	*Nom de la fonction : possederListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function possederListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Posseder","idIntervention",$id);//type array
	}

	/**
	*Nom de la fonction : possederModifierUn
	*
	*Parametre entree : 
	*$idEtat : int,$idIntervention : int,$commentaire : string
	*
	*Parametre sortie : 
	*	**/
	public function possederModifierUn($idEtat,$idIntervention,$commentaire)
	{
		$posseder = new Posseder($idEtat,$idIntervention,$commentaire);// votre code ici
                
                Gestion::modifier($posseder);
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
	*Nom de la fonction : demandeAjouterUn
	*
	*Parametre entree : 
	*$idDemande : int,$idEquipement : int,$idUtilisateur : int,$motif : string,$datedemande : date
	*
	*Parametre sortie : 
	*	**/
	public function demandeAjouterUn($idDemande,$idEquipement,$idUtilisateur,$motif,$datedemande)
	{
		$demande=new Demande(null,$idEquipement,$idUtilisateur,$motif, $datedemande);

                Gestion::ajouter($demande); // votre code ici
	}

	/**
	*Nom de la fonction : interventionAjouterUn
	*
	*Parametre entree : 
	*$idIntervention : int,$idDemande : int,$datedebut : date,$dureetotale : date
	*
	*Parametre sortie : 
	*	**/
	public function interventionAjouterUn($idIntervention,$idDemande,$datedebut,$dureetotale)
	{
		$intervention=new Intervention(null,$idDemande,$datedebut,$dureetotale);
                Gestion::ajouter($intervention);// votre code ici
	}

	/**
	*Nom de la fonction : possederAjouterUn
	*
	*Parametre entree : 
	*$idEtat : int,$idIntervention : int,$commentaire : string
	*
	*Parametre sortie : 
	*	**/
	public function possederAjouterUn($idEtat,$idIntervention,$commentaire)
	{
                $posseder=new Posseder($idEtat,$idIntervention,$commentaire);
		
                Gestion::ajouter($posseder);// votre code ici
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
		return gestion::lister("Utilisateur");//type array
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
		return gestion::lister("EquipementLocation");//type array
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
		return gestion::lister("Etat");//type array
	}

	/**
	*Nom de la fonction : utilisateurListerUn
	*
	*Parametre entree : 
	*$idUtilisateur : int
	*
	*Parametre sortie : 
	*array
	**/
	public function utilisateurListerUn($idUtilisateur)
	{
		// votre code ici
		return Gestion::lister("Utilisateur","idUtilisateur",$idUtilisateur);//type array
	}

	/**
	*Nom de la fonction : equipementListerUn
	*
	*Parametre entree : 
	*$idEquipement : int
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementListerUn($idEquipement)
	{
		// votre code ici
		return Gestion::lister("Equipement","idEquipement",$idEquipement);//type array
	}

	/**
	*Nom de la fonction : etatListerUn
	*
	*Parametre entree : 
	*$idEtat : int
	*
	*Parametre sortie : 
	*array
	**/
	public function etatListerUn($idEtat)
	{
		// votre code ici
		return Gestion::lister("Etat","idEtat",$idEtat);//type array
	}
        
        /**
	*Nom de la fonction : demandeLister
	*
	*Parametre entree : 
	*$idEtat : string,string
	*
	*Parametre sortie : 
	*array
	**/
	public function demandeLister($champ,$valeur)
	{
		// votre code ici
		return Gestion::lister("Demande",$champ,$valeur);//type array
	}
        
        /**
	*Nom de la fonction : interventionLister
	*
	*Parametre entree : 
	*$idEtat : string,string
	*
	*Parametre sortie : 
	*array
	**/
	public function interventionLister($champ,$valeur)
	{
		// votre code ici
		return Gestion::lister("Intervention",$champ,$valeur);//type array
	}
        
        /**
	*Nom de la fonction : possederLister
	*
	*Parametre entree : 
	*$idEtat : string,string
	*
	*Parametre sortie : 
	*array
	**/
	public function possederLister($champ,$valeur)
	{
		// votre code ici
		return Gestion::lister("Posseder",$champ,$valeur);//type array
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
		return gestion::lister("EquipementAchat");//type array
	}

	/**
	*Nom de la fonction : equipementachatListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementachatListerUn($id)
	{
		// votre code ici
		return Gestion::lister("EquipementAchat","idEquipement",$id);//type array
	}

	/**
	*Nom de la fonction : equipementachatModifierUn
	*
	*Parametre entree : 
	*$idEquipement : int,$idUtilisateur : int,$processeur : string,$memoire : string,$disque : string,$logiciels : string,$typemateriel : string,$dateachat : date
	*
	*Parametre sortie : 
	*	**/
	public function equipementachatModifierUn($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$dateachat)
	{
		$equipementachat=new EquipementAchat($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$dateachat);

                Gestion::modifier($equipementachat); // votre code ici
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
		return gestion::lister("EquipementLocation");//type array
	}

	/**
	*Nom de la fonction : equipementlocationListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementlocationListerUn($id)
	{
		// votre code ici
		return Gestion::lister("EquipementLocation","idEquipement",$id);//type array
	}

	/**
	*Nom de la fonction : equipementlocationModifierUn
	*
	*Parametre entree : 
	*$idEquipement : int,$idUtilisateur : object,$processeur : string,$memoire : string,$disque : string,$logiciels : string,$typemateriel : string,$idSociete : int,$duree : int,$datedebut : date,$datefin : date,$datepreetude : date,$dateprerapport : date,$datecahiercharge : date
	*
	*Parametre sortie : 
	*	**/
	public function equipementlocationModifierUn($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$idSociete,$duree,$datedebut,$datefin,$datepreetude,$dateprerapport,$datecahiercharge)
	{
		$equipementlocation = new EquipementLocation($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$idSociete,$duree,$datedebut,$datefin,$datepreetude,$dateprerapport,$datecahiercharge);// votre code ici

                Gestion::modifier($equipementlocation);
                
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
	*Nom de la fonction : etatModifierUn
	*
	*Parametre entree : 
	*$idEtat : int,$libelle : string
	*
	*Parametre sortie : 
	*	**/
	public function etatModifierUn($idEtat,$libelle)
	{
		$etat = new Etat($idEtat,$libelle);// votre code ici

                Gestion::modifier($etat);
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
		return gestion::lister("Secteur");//type array
	}

	/**
	*Nom de la fonction : secteurListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function secteurListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Secteur","idSecteur",$id);//type array
	}

	/**
	*Nom de la fonction : secteurModifierUn
	*
	*Parametre entree : 
	*$idSecteur : int,$libelle : string,$nomregion : string
	*
	*Parametre sortie : 
	*	**/
	public function secteurModifierUn($idSecteur,$libelle,$nomregion)
	{
		$secteur = new Secteur($idSecteur,$libelle,$nomregion);// votre code ici
                
                Gestion::modifier($secteur);
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
		return gestion::lister("Societe");//type array
	}

	/**
	*Nom de la fonction : societeListerUn
	*
	*Parametre entree : 
	*$id : int
	*
	*Parametre sortie : 
	*array
	**/
	public function societeListerUn($id)
	{
		// votre code ici
		return Gestion::lister("Societe","idSociete",$id);//type array
	}

	/**
	*Nom de la fonction : societeModifierUn
	*
	*Parametre entree : 
	*$idSociete : int,$nom : string,$capital : int,$adresse : string,$codepostal : string,$ville : string,$villercs : string,$numerorcs : string,$nomrepresentant : string,$qualiterepresentant : string
	*
	*Parametre sortie : 
	*	**/
	public function societeModifierUn($idSociete,$nom,$capital,$adresse,$codepostal,$ville,$villercs,$numerorcs,$nomrepresentant,$qualiterepresentant)
	{
		$societe = new Societe($idSociete,$nom,$capital,$adresse,$codepostal,$ville,$villercs,$numerorcs,$nomrepresentant,$qualiterepresentant);// votre code ici
                
                Gestion::modifier($societe);
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
	*Nom de la fonction : utilisateurModifierUn
	*
	*Parametre entree : 
	*$idUtilisateur : int,$idSecteur : int,$nom : string,$prenom : string,$adresse : string,$codepostal : string,$ville : string,$fonction : string,$dateembauche : string,$email : string,$matricule : string,$niveauacces : string,$motdepasse : string
	*
	*Parametre sortie : 
	*	**/
	public function utilisateurModifierUn($idUtilisateur,$idSecteur,$nom,$prenom,$adresse,$codepostal,$ville,$fonction,$dateembauche,$email,$matricule,$niveauacces,$motdepasse)
	{
		$utilisateur = new Utilisateur($idUtilisateur,$idSecteur,$nom,$prenom,$adresse,$codepostal,$ville,$fonction,$dateembauche,$email,$matricule,$niveauacces,$motdepasse);// votre code ici
                
                Gestion::modifier($utilisateur);
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

	/**
	*Nom de la fonction : equipementachatAjouterUn
	*
	*Parametre entree : 
	*$idEquipement : int,$idUtilisateur : int,$processeur : string,$memoire : string,$disque : string,$logiciels : string,$typemateriel : string,$dateachat : date
	*
	*Parametre sortie : 
	*	**/
	public function equipementachatAjouterUn($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$dateachat)
	{
		$equipementachat=new EquipementAchat(null,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$dateachat);

                Gestion::ajouter($equipementachat); // votre code ici
	}

	/**
	*Nom de la fonction : equipementlocationAjouterUn
	*
	*Parametre entree : 
	*$idEquipement : int,$idUtilisateur : int,$processeur : string,$memoire : string,$disque : string,$logiciels : string,$typemateriel : string,$idSociete : int,$duree : int,$datedebut : date,$datefin : date,$datepreetude : date,$dateprerapport : date,$datecahiercharge : date
	*
	*Parametre sortie : 
	*	**/
	public function equipementlocationAjouterUn($idEquipement,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$idSociete,$duree,$datedebut,$datefin,$datepreetude,$dateprerapport,$datecahiercharge)
	{
		$equipementlocation=new EquipementLocation(null,$idUtilisateur,$processeur,$memoire,$disque,$logiciels,$typemateriel,$idSociete,$duree,$datedebut,$datefin,$datepreetude,$dateprerapport,$datecahiercharge);

                Gestion::ajouter($equipementlocation); // votre code ici
	}

	/**
	*Nom de la fonction : etatAjouterUn
	*
	*Parametre entree : 
	*$idEtat : int,$libelle : string
	*
	*Parametre sortie : 
	*	**/
	public function etatAjouterUn($idEtat,$libelle)
	{
		$etat=new Etat(null,$libelle);

                Gestion::ajouter($etat); // votre code ici
	}

	/**
	*Nom de la fonction : secteurAjouterUn
	*
	*Parametre entree : 
	*$idSecteur : int,$libelle : string,$nomregion : string
	*
	*Parametre sortie : 
	*	**/
	public function secteurAjouterUn($idSecteur,$libelle,$nomregion)
	{
		$secteur=new Secteur(null,$libelle,$nomregion);

                Gestion::ajouter($secteur); // votre code ici
	}

	/**
	*Nom de la fonction : societeAjouterUn
	*
	*Parametre entree : 
	*$idSociete : int,$nom : string,$capital : int,$adresse : string,$codepostal : string,$ville : string,$villercs : string,$numerorcs : string,$nomrepresentant : string,$qualiterepresentant : string
	*
	*Parametre sortie : 
	*	**/
	public function societeAjouterUn($idSociete,$nom,$capital,$adresse,$codepostal,$ville,$villercs,$numerorcs,$nomrepresentant,$qualiterepresentant)
	{
		$societe=new Societe(null,$nom,$capital,$adresse,$codepostal,$ville,$villercs,$numerorcs,$nomrepresentant,$qualiterepresentant);

                Gestion::ajouter($societe); // votre code ici
	}

	/**
	*Nom de la fonction : utilisateurAjouterUn
	*
	*Parametre entree : 
	*$idUtilisateur : int,$idSecteur : int,$nom : string,$prenom : string,$adresse : string,$codepostal : string,$ville : string,$fonction : string,$dateembauche : string,$email : string,$matricule : string,$niveauacces : string,$motdepasse : string
	*
	*Parametre sortie : 
	*	**/
	public function utilisateurAjouterUn($idUtilisateur,$idSecteur,$nom,$prenom,$adresse,$codepostal,$ville,$fonction,$dateembauche,$email,$matricule,$niveauacces,$motdepasse)
	{
		$utilisateur=new Utilisateur(null,$idSecteur,$nom,$prenom,$adresse,$codepostal,$ville,$fonction,$dateembauche,$email,$matricule,$niveauacces,$motdepasse);

                Gestion::ajouter($utilisateur); // votre code ici
	}
        
        /**
	*Nom de la fonction : equipementlocationLister
	*
	*Parametre entree : 
	*$idEtat : string,string
	*
	*Parametre sortie : 
	*array
	**/
	public function equipementlocationLister($champ,$valeur)
	{
		// votre code ici
            
		return Gestion::lister("EquipementLocation",$champ,$valeur);//type array
	}

}

?>