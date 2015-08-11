<?php

/**
 * Auteur : Christophe LOPEZ - BTS SIO - Lycée de la CCI - Nîmes
 * Version : 1.0
 * Classe SQLState permettant de particulariser les exceptions au niveau de PDO3
 * Classe permettant d'associer les codes d'erreur SQLSTATE à une classification unique quel que soit le SGBD
 ****************************************************************/
	class SQLState
	{
		private $erreurPDO; //code SQLSTATE
		private $erreurPDO3; //code unique
		private $message; //message PDO3

		
		public function __construct($erreurPDO=null, $erreurPDO3=null, $message=null)
		{
			include_once("sqlstatearray.class.php");
			$this->erreurPDO = $erreurPDO;
			$this->erreurPDO3 = SQLSTATEARRAY::$errorArray[$erreurPDO]['erreurPDO3'];
			$this->message = SQLSTATEARRAY::$errorArray[$erreurPDO]['message'];
		}
		public function __get($propriete)
		{
			switch ($propriete)
			{
				case "erreurPDO" : return $this->erreurPDO;
				case "erreurPDO3" : return $this->erreurPDO3;
				case "message" : return $this->message;
			}
			
		}
		
		public function __set($propriete, $value)
		{
			switch ($propriete)
			{
				case "erreurPDO" :  $this->erreurPDO = $value; break;
				case "erreurPDO3" :  $this->erreurPDO3 = $value; break;
				case "message" : $this->message = $value; break;
			}
		}
	}

?>