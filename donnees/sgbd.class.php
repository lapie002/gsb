<?php
	class SGBD
	{
		private $sgbd;
		private $sqlStates;	
		
		public function __construct($sgbd, $sqlStates=null)
		{
			$this->sgbd = $sgbd;
			if($sqlStates==null)
			{
				$sqlStates=array();
			}
			else
			{
				$this->sqlState = $sqlStates;
			}
		}
		
		public function __get($propriete)
		{
			switch ($propriete)
			{
				case "sgbd" : return $this->sgbd;
				case "sqlStates" : return $this->sqlStates;
			}
			
		}
		
		public function __set($propriete, $value)
		{
			switch ($propriete)
			{
				case "sgbd" :  $this->sgbd = $value;
				case "sqlStates" : $this->sqlStates = $value;
			}
		}
		
	}
	
	
	

?>