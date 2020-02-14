<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "approvisionner") {
	$datas = EQUIPEMENT::findBy(["id ="=>getSession("equipement")]);
	if (count($datas) == 1) {
		$equipement = $datas[0];
		$data = $equipement->approvisionner($quantite, $price);
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant l'opération! Veuillez recommencer !";
	}
	echo json_encode($data);
}

