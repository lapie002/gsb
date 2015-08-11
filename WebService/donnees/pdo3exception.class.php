<?php

/**
 * Auteur : Christophe LOPEZ - BTS SIO - Lycée de la CCI - Nîmes
 * Version : 1.0
 * Classe Exception particularisant les exceptions au niveau de PDO3
 * Classe permettant d'unifier à terme les codes d'erreur suivant une classification unique quel que soit le SGBD
 ****************************************************************/

 include_once ("sqlstate.class.php");
 class PDO3Exception extends PDOException
{
	protected $codePDO3; // code erreur unifié
	protected $objet; // objet de la base de données sur lequel l'erreur s'est produite
	public function __construct($code,$objet=null)
	{
			
		$this->objet = $objet;
		$message ="";
		$sqlState = new SQLState($code);
		if($this->objet == null)
		{
			$message = $sqlState->message;
		}
		else
		{
			$message = sprintf($sqlState->message, $this->objet);
		}
		$this->codePDO3 = $sqlState->erreurPDO3;
		//parent::__construct($code,$message);
		$this->code=$code;
		$this->message = $message;
	}
	public function getObjet() //renvoie l'objet de la base de données sur lequel l'erreur s'est produite (table, vue, ps, ...)
	{
		return $this->objet;
	}
	public function getCodePDO3() //renvoie le code unifié pour l'ensemble des SGBD
	{
		return $this->codePDO3;
	}
}
?>