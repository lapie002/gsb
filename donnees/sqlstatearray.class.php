<?php
class SQLSTATEARRAY
{
	public static $errorArray = array();
}
/* ************************ Tableau des erreurs SQL Server ******************/
SQLSTATEARRAY::$errorArray['08001'] = array('erreurPDO3'=> -100, 'message' => 'Connexion au serveur de base de données impossible !');
SQLSTATEARRAY::$errorArray['28000'] = array('erreurPDO3'=> -99, 'message' => 'Connexion à la base de données impossible !');
SQLSTATEARRAY::$errorArray['42S02'] = array('erreurPDO3'=> -98, 'message' => 'La table ou la vue %s n\'existe pas !');
SQLSTATEARRAY::$errorArray['42000'] = array('erreurPDO3'=> -97, 'message' => 'La procédure stockée %s n\'existe pas !');
SQLSTATEARRAY::$errorArray['22001'] = array('erreurPDO3'=> -96, 'message' => 'Attention, les données risquent d\'être tronquées !');
SQLSTATEARRAY::$errorArray['22018'] = array('erreurPDO3'=> -95, 'message' => 'Attention, les données ne respectent pas les types attendus !');
SQLSTATEARRAY::$errorArray['22007'] = array('erreurPDO3'=> -94, 'message' => 'Attention, le format de la date est invalide !');
SQLSTATEARRAY::$errorArray['42S22'] = array('erreurPDO3'=> -94, 'message' => 'Attention, colonne non trouvée dans la table ou la vue %s !');
SQLSTATEARRAY::$errorArray['42S12'] = array('erreurPDO3'=> -93, 'message' => 'Attention, index non trouvé !');




/* *********************** Tableau des erreurs de MySQL **********************/


/* ************************Tableau des erreurs de PostgreSQL *****************/




?>