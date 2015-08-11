<?php
/**
 * auteur : Christophe LOPEZ - BTS SIO - Lycee de la CCI - Nimes
 */

function __autoload($class_name) { // charge les fichiers des classes � la demande
    include_once $class_name . '.class.php'; //exemple de fichier client.class.php
}

class Gestion
{
	static public function lister($classe, $fields=null, $values=null,$ps=false)//true si ps
	{
		try
		{
			$pdo = PDO3::getInstance();
			$all = array();
			if($ps===true) //proc�dure stock�e
			{
				$pdo->setPSLister($classe,$values);
			}
			else //requ�te SQL
			{
				$pdo->setRequeteLister($classe,$fields, $values);
			}
			$sql=$pdo->getRequete();
			$params = $pdo->getParametres();
			$stmt =$pdo->prepare($sql);
			$resultat = $stmt->execute($params);
			$all = $stmt->fetchAll(PDO::FETCH_CLASS, $classe); //on renvoie un tableau d'objets de type $classe
			$stmt=null;
			$pdo = NULL;
			return $all;
		}	
		
		catch (PDOException $e)
		{
			$code = $e->getCode();
			if($ps===true)
			{
				$objet = "lister" . $classe;
				throw new PDO3Exception($code, $objet);
			}
			else
			{
				throw new PDO3Exception($code, $classe);
			}
			
		}

	}
	
	static public function supprimer($classe,$fields, $values,$ps=false)//true si ps
	{
		try
		{
			$pdo = PDO3::getInstance();
			if($ps===true) //proc�dure stock�e
			{
				$pdo->setPSSupprimer($classe,$values);
			}
			else //requ�te SQL
			{
				$pdo->setRequeteSupprimer($classe,$fields, $values);
			}
			
			$sql=$pdo->getRequete();
			$params = $pdo->getParametres();
			$stmt =$pdo->prepare($sql);
			$resultat = $stmt->execute($params);
			$stmt=null;
			$pdo = NULL;
		}
		catch (PDOException $e)
		{
			throw new PDO3Exception( $e->getCode());
		}
	}
	
	static public function ajouter($obj,$ps=false)//true si ps
	{
		$classe=get_class($obj);
		try
		{
			$pdo = PDO3::getInstance();
			if($ps===true) //proc�dure stock�e
			{
				$pdo->setPSAjouter($obj);
			}
			else //Requ�te SQL
			{
				$pdo->setRequeteAjouter($obj);
			}
			$sql=$pdo->getRequete();
			$params = $pdo->getParametres();
			$stmt =$pdo->prepare($sql);
			$resultat = $stmt->execute($params);
			$stmt=null;
			$pdo = NULL;
		}
		catch (PDOException $e)
		{
			throw new PDO3Exception($e->getCode(), $classe);
		}
	}
	
	static public function modifier($obj,$ps=false) //true si ps
	{
		$classe=get_class($obj);
		try
		{
			$pdo = PDO3::getInstance();
			if($ps===true) //proc�dure stock�e
			{
				$pdo->setPSModifier($obj);
			}
			else //requ�te SQL
			{
				$pdo->setRequeteModifier($obj);
			}
			$sql=$pdo->getRequete();
			$params = $pdo->getParametres();
			$stmt =$pdo->prepare($sql);
			$resultat = $stmt->execute($params);
			$stmt=null;
			$pdo = NULL;
		}
		catch (PDOException $e)
		{
			throw new PDO3Exception( $e->getCode(), $classe);
		}
	}
} // fin de la classe Gestion

?>