<?php

abstract class Modele
{
	protected $proprietes = array(); 
	public function __get($propriete) //get magique : convient aux templates et simplifie la notation
	{
		if(array_key_exists($propriete,$this->proprietes))
		return $this->proprietes[$propriete];
	}
	public function __set($propriete, $value) //set magique : convient aux templates et simplifie la notation
	{
		if(array_key_exists($propriete,$this->proprietes))
		$this->proprietes[$propriete]=$value;
		else $this->$propriete=$value; //nécessaire à PDO::fetchAll()
	}
	public function getproprietes() //pour notamment créer dynamiquement les requêtes SQL
	{
		if(! empty($this->proprietes)) //si le tableau n'est pas vide
		return $this->proprietes; //retourne un tableau associatif du genre array('id'=>1,'nom'=>'Dupont')
	}
	public function  __toString()
	{
		return(var_export($this, TRUE));
	}
}
?>