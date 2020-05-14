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
	$datas = DEMANDEENTRETIEN::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$demande = $datas[0];
		$data = $demande->approuver();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}



if ($action == "entretien2") {
	if (getSession("demandeentretien") != null) {
		$entretien = new ENTRETIENVEHICULE;
		$demande = getSession("demandeentretien");
		$entretien->cloner($demande);
		$entretien->hydrater($_POST);

		$files = [];
		if (isset($_FILES)) {
			foreach ($_FILES as $key => $value) {
				if ($key !== "id" && $value != "") {
					$files[] = $value;
				}
			}
		}
		$entretien->files = $files;
		$entretien->etat_id = ETAT::ENCOURS;
		$entretien->name = $demande->typeentretienvehicule->name." suite à la demande d'entretien N°".$demande->ticket;
		$entretien->setId(null);
		$data = $entretien->enregistre();
		if ($data->status) {
			unset_session("demandeentretien");
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}




if ($action == "refuser") {
	$datas = DEMANDEENTRETIEN::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$demande = $datas[0];
		$data = $demande->refuser();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}
