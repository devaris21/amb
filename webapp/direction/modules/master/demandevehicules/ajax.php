<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;
use Native\EMAIL;
use Native\FICHIER;
$data = new RESPONSE;
extract($_POST);




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($action == "approuver") {
	$datas = DEMANDEVEHICULE::findBy(["id ="=>$id]);
	if (count($datas) > 0) {
		$demande = $datas[0];
		$data = $demande->approuver();

	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}


if ($action == "refuser") {
	$datas = DEMANDEVEHICULE::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$demande = $datas[0];
		$data = $demande->refuser($comment);
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}