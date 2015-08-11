<?php

include_once "wsservice.class.php";

	$wsdl   = 'wsservice.wsdl'; //localisation du fichier WSDL
	$server = new SoapServer($wsdl); // creation du serveur SOAP
	$server->setClass('WSService'); //exposition des methodes de la classe ServiceWeb
	$server->handle(); //Attente des requetes SOAP

?>