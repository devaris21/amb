<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "approvisionner") {
	$datas = ACCESSOIRE::findBy(["id ="=>getSession("accessoire")]);
	if (count($datas) == 1) {
		$accessoire = $datas[0];
		$data = $accessoire->approvisionner($quantite, $price);
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant l'opération! Veuillez recommencer !";
	}
	echo json_encode($data);
}


