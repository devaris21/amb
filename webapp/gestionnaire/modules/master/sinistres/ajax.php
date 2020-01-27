<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "livreur") {
	$livreur = new LIVREUR;
	$livreur->hydrater($_POST);
	$livreur->entrepriselivreur_id = getSession("entrepriselivreur_id");
	$data = $livreur->enregistre();	
	echo json_encode($data);
}