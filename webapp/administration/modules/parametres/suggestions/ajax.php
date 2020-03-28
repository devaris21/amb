<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "accepter") {
	$datas = SUGGESTION::findBy(["id ="=>$id]);
	if (count($datas) == 1) {
		$suggestion = $datas[0];
		$data = $suggestion->approuver();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite lors de l'opération! Veuillez recommencer";
	}
	echo json_encode($data);
}


