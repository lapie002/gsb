<?php
/**
 * Auteur : Christophe LOPEZ - BTS SIO - Lyc�e de la CCI - N�mes
 * Fichier contenant les diff�rentes constantes participant � la "cha�ne" de connexion
 * utilis�e par PDO3 
 * et les modes appropri�s d'appel des proc�dures stock�es
 */
// ******************* MySQL ********************* //
// Identifiants pour la base de donn�es MySQL. N�cessaires � PDO3.
/*
define('SQL_DSN','mysql:dbname=lycee;host=localhost'); //Pilote MySQL
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');
define('SQL_CALL', 'Call'); //Commande pour ex�cuter une proc�dure stock�e
define('SQL_PARAMS_SYNTAX','()'); //Les param�tres de la proc�dure stock�e sont entre parenth�ses
*/




// ***************** SQL Server ******************* //
//Identifiants pour la base de donn�es SQL Server. N�cessaires � PDO3.
define('SQL_DSN','sqlsrv:Server=BRUNO-VAIO\SQLEXPRESS;Database=ppe1'); //Pilote SQL Server
define('SQL_USERNAME', 'sa');
define('SQL_PASSWORD', 'sa');
define('SQL_CALL', 'EXEC'); //Commande pour ex�cuter une proc�dure stock�e
define('SQL_PARAMS_SYNTAX',' ');//Les param�tres de la proc�dure stock�e ne sont pas entre parenth�ses
/*/*
08001 -> echec de la connexion au serveur SQL Server
28000 -> echec de l'ouverture de la session

*/

?>