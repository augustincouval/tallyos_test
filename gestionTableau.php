<?php

include 'BDD.php';
include 'fonction.php';


if (isset($_GET['idR'])) 
{
	//suppression d'une ruche
	$deleteRuche = $connexion->query("DELETE FROM infoRuche where idR = ".$_GET['idR']." ");
	$deleteRuche = $connexion->query("DELETE FROM ruche where Id = ".$_GET['idR']." ");


	//redirection vers la page des ruches
	header("Location: ruche.php");


}



?>