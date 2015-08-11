<?php

/**
 * Auteur : Christophe LOPEZ - BTS SIO - Lyc�e de la CCI - N�mes
 * Version : 3.0
 * Classe impl�mentant un singleton pour PDO
 * Classe facilitant la cr�ation dynamique de requ�tes � partir des propri�t�s d'un objet
 * Classe facilitant l'ex�cution dynamique de proc�dures stock�es par d�duction de leur nom
 * Exemple de noms de proc�dure stock�e : listerclient, supprimerclient, ... (verbe + classe)
 * Connexion possible � tout SGBD pour lequel existe des pilotes PDO (MySQL, SQL Server, SQLite, Postgres, ...)
 * La cha�ne de connexion est d�finie dans le fichier connexion.cfg.php
 * La cha�ne de connexion inclut le pilote SGBD, la localisation du SGBD,
 * le nom de la base de donn�es, le login et le mot de passe
 ***********************************************/
include_once("PDO3Exception.class.php");
class PDO3 extends PDO { // PDO3 h�rite de PDO

	private $requete; //stockage du texte de la requ�te ou de l'appel de la proc�dure stock�e
	private $parametres; //stockage des valeurs des param�tres de la requ�te ou de la proc�dure dans un tableau
	private static $_appel; //voir fichier de configuration
	private static $_syntaxe;//voir fichier de configuration
	private static $_instance; //pour la mise en oeuvre du singleton de connexion
	
	/* Constructeur : public obligatoire par h�ritage de PDO, la visibilit� ne peut pas �tre r�duite */
	public function __construct($dsn,$user,$pass,$attrib) {
		$parametres=array(); //cr�ation du tableau des param�tres
		parent::__construct($dsn,$user,$pass,$attrib); //appel du constructeur parent de PDO
	}
	// Fin de PDO3::__construct() */

	/* Singleton */
	public static function getInstance() {

		if (!isset(self::$_instance)) { //Il n'y a pas de connexion active

			try 
			{
				require_once("connexion.cfg.php"); //R�cup�ration des constantes de param�trage de la connexion
                self::$_instance = new PDO3(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, array (PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); // toutes ces constantes sont issues du fichier connexion.cfg.php
                                self::$_appel=SQL_CALL;
				self::$_syntaxe = SQL_PARAMS_SYNTAX;
			} 
			catch (PDOException $e) 
			{
				throw new PDO3Exception($e->getCode());
			}
		}
		return self::$_instance; //l'instance de la connexion est retourn�e
	}
	// Fin PDO3::getInstance() */
		
	/* M�thode destin�e � la g�n�ration automatique du texte d'une requ�te SELECT*/
	public function setRequeteLister($classe, $fields=null, $values=null)//avec ou sans h�ritage
	{	
		try
		{
			$sql;
			$table=$classe; //nom de la table ou de la vue / si la classe se nomme Client; table = client
			if($values==null && $fields==null) //$field contient les champs sur lesquels va se faire la restriction WHERE
			{
				$sql="SELECT  * FROM ".$table;
			}
			else
			{
				if(is_array($fields) && is_array($values)) //on teste s'il s'agit d'un tableau de champs
				{	
					$where=" WHERE ";
					for($i=0;$i<count($fields);$i++)
					{
						$where = $where . $fields[$i] . " = '" . $values[$i] ."' AND " ;
					}
					$sql = "SELECT  * FROM ".$table.rtrim($where, " AND "); //suppression du AND
				}
				else
				{
					$sql="SELECT  * FROM ".$table." WHERE ". $fields ."='".$values."'"; //WHERE simple
				}
			}
			$this->requete = $sql; //Le texte de la requ�te est stock� dans $this->requete
		}
		catch (PDOException $e) 
		{
			throw new PDO3Exception($e->getCode());
		}
	}// fin de la m�thode setRequeteLister()
	
	/* M�thode destin�e � la g�n�ration automatique du texte d'une requ�te INSERT INTO*/
	public  function setRequeteAjouter($obj)
	{
		$classe=get_class($obj);
		$table = $classe;
		$proprietes=$obj->getproprietes(); //r�cup�ration du tableau associatif cl�s-valeurs de l'objet
		$params = array();
		$sql="INSERT INTO $table ";
		$champs = "("; //sous cha�ne pour lister les champs
		$values ="VALUES("; //sous cha�ne pour lister les ? correspondant aux VALUES
		foreach($proprietes as $key=>$val) 
		{	
			if(($key != "id".$classe) && ($key != "id".get_parent_class($obj)) ) //on �carte l'identifiant de la table auto incr�ment�. Adaptation possible
			{
				$champs = $champs .$key .","; //on ajoute le champ
				$values=$values. "?,";//on ajoute les ?
				$params[]=$val;//on ajoute la valeur dans le tableau des param�tres
			}
		}
		// enlever la derniere virgule apr�s le dernier ?
		$values = rtrim($values, ",");
		// enlever la derniere virgule apr�s le dernier champ
		$champs = rtrim($champs, ",");
		$values = $values . ")"; //on ferme la parenth�se de VALUES
		$champs = $champs . ")"; //on ferme la parenth�se de la liste des champs
		$sql = $sql .$champs .$values; //on reconstitue la totalit� du texte de la requ�te
		$this->requete = $sql; //on stocke le texte de la requ�te dans $this->requete
		$this->parametres = $params;//on stocke les valeurs des param�tres dans $this->parametres
	}// fin de la m�thode setRequeteAjouter()
	
	/* M�thode destin�e � la g�n�ration automatique du texte d'une requ�te UPDATE*/	
	public  function setRequeteModifier($obj)
	{
		$classe=get_class($obj);
		$table = $classe;
		$proprietes=$obj->getproprietes();  //r�cup�ration du tableau associatif cl�s-valeurs de l'objet
		$where = " WHERE "; //sous cha�ne pour la clause WHERE
		$params = array();
		$sql="UPDATE $table SET "; //d�but de la requ�te
		$id;		
		foreach($proprietes as $key=>$val)//suppose que l'identifiant de la classe et de la table est id + nom de la classe : si classe est Client alors idClient
		{
			if(($key != "id".$classe) && ($key != "id".get_parent_class($obj)) ) //j'�carte l'identifiant des champs � modifier
			{
				$sql=$sql.$key."=?,"; //on ajoute un ?
				$params[]=$val;
			}
			else
			{
				$where = $where . $key . "=?";
				$id=$val;
			}
		}
		$params[] = $id; //on ajoute l�id � la fin du tableau des param�tres
			
		// enlever la derniere virgule apr�s le dernier ?
		$sql = rtrim($sql, ",");
		$sql = $sql . $where; //on ajoute la clause WHERE � la fin de la requ�te
		$this->requete = $sql; //on stocke le texte de la requ�te dans $this->requete
		$this->parametres = $params;//on stocke les valeurs des param�tres dans $this->parametres
	}// fin de la m�thode setRequeteModifier()
	
	
	/* M�thode destin�e � la g�n�ration automatique du texte d'une requ�te DELETE*/
	public function setRequeteSupprimer($classe, $fields=null, $values=null)//valable pour toutes les classes
	{
		$table = $classe;
		$sql;
		if($values==null && $fields==null) //tous les enregistrements
		{
			$sql="DELETE FROM ".$table;
		}
		else
		{
			if(is_array($fields) && is_array($values)) //plusieurs restrictions WHERE
			{	
				$where=" WHERE ";
				for($i=0;$i<count($fields);$i++)
				{
					$where = $where . $fields[$i] . " = '" . $values[$i] ."' AND " ;
				}
				$sql = "DELETE FROM ".$table.rtrim($where, " AND "); //// enlever la dernier AND apr�s le dernier champ=valeur
			}
			else //une suppression simple
			{
				$sql="DELETE FROM ".$table." WHERE ". $fields ."='".$values."'";
			}
			
		}
		$this->requete = $sql; //on ajoute le texte de la requ�te 
	} // fin de la m�thode getRequeteSupprimer()
	
	/***************** Proc�dures stock�es *********************/
	public function setPSLister($table, $valueid=null)//valable pour toutes les classes
	{
		$this->parametres = array();
		$nomps;
		//exemple ps = listerClient
		$nomps=self::$_appel." lister". $table  . " " .substr(self::$_syntaxe,0,1)."?". substr(self::$_syntaxe,1,1);//Appel et nom de la procedure stock�e
		if($valueid==null)
		{
			$this->parametres[] =0; //si null, ps doit en tenir compte
		}
		else
		{				
			
			$this->parametres[] = $valueid; 
		}
		
		$this->requete = $nomps;
	}// fin de la m�thode setPSLister()
	
	public function setPSAjouter($obj)
	{
		//exemple ps = ajouterClient -> ajouter + nom de la classe
		$classe=get_class($obj);
		$nomps=self::$_appel." ajouter". get_class($obj). " " .substr(self::$_syntaxe,0,1);//Appel et nom de la procedure stock�e
		$proprietes=$obj->getproprietes();
		try
		{
			$i=0;
			$params = array();
			
			foreach($proprietes as $key=>$val)
			{	
				if(($key != "id".$classe) && ($key != "id".get_parent_class($obj)) ) //on �carte l'identifiant auto incr�ment� de la table . Adaptation possible
				{
					$nomps = $nomps. " ?,";
					$params[] = $val;
				}
			}
			$nomps = rtrim($nomps, ",");// enlever la derniere virgule
			$nomps = $nomps . substr(self::$_syntaxe,1,1);
			$this->requete = $nomps;
			$this->parametres = $params;
		}
		catch (PDOException $e)
		{
			throw new PDO3Exception( $e->code);
		}
	}// fin de la m�thode setPSAjouter()
	
	public function setPSModifier($obj)
	{
		//exemple ps = modifierClient
		$nomps=self::$_appel." modifier". get_class($obj). " " . substr(self::$_syntaxe,0,1);//Appel et nom de la procedure stock�e
		$proprietes=$obj->getproprietes();
		try
		{
			$i=0;
			$params = array();
			foreach($proprietes as $key=>$val)
			{	
				$nomps = $nomps. "?,";
				$params[] = $val;
			}
			$nomps = rtrim($nomps, ",");// enlever la derniere virgule
			$nomps = $nomps . substr(self::$_syntaxe,1,1);
			$this->requete = $nomps;
			$this->parametres = array();
			$this->parametres = $params;
		}
		catch (PDOException $e)
		{
			throw new PDO3Exception($e->code);
		}
	}// fin de la m�thode setPSModifier()
	
	public function setPSSupprimer($table, $valueid)//valable pour toutes les classes
	{
		$this->parametres = array();
		//exemple ps = supprimerClient
		$nomps=self::$_appel." supprimer". $table. " " . substr(self::$_syntaxe,0,1)."?". substr(self::$_syntaxe,1,1);//Appel et nom de la procedure stock�e
		$this->requete = $nomps;
		echo $nomps;
		$this->parametres[] = $valueid;
		print_r($this->parametres);
	} // fin de la m�thode setPSSupprimer()
	
	
	public function getRequete()
	{
		return $this->requete;
	}
	
	public function getParametres()
	{
		return $this->parametres;
	}
}// Fin de la classe PDO3

?>
