<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;
use Native\EMAIL;
use Native\FICHIER;
$data = new RESPONSE;
extract($_POST);




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($action == "demandevehicule") {
	$datas = DEMANDEVEHICULE::findBy(["id ="=>getSession("demandevehicule")]);
	if (count($datas) > 0) {
		$demande = $datas[0];
		$demande->vehicule_id = getSession("vehicule");
		$demande->chauffeur_id = getSession("chauffeur");
		$data = $demande->approuver();
		if ($data->status) {
			unset_session("demandeentretien");
			unset_session("vehicule");
			unset_session("chauffeur");
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}


if ($action == "refuser") {
	$datas = DEMANDEVEHICULE::findBy(["id ="=>getSession("demandevehicule")]);
	if (count($datas) == 1) {
		$demande = $datas[0];
		$data = $demande->refuser($comment);
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}