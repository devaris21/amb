<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "terminer") {
	$datas = MISSION::findBy(["id ="=> $id]);
	if (count($datas) == 1) {
		$mission = $datas[0];
		$mission->hydrater($_POST);
		$data = $mission->terminer();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}	
	echo json_encode($data);
}



if ($action == "annuler") {
	$datas = MISSION::findBy(["id ="=> $id]);
	if (count($datas) == 1) {
		$mission = $datas[0];
		$data = $mission->annuler();
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}	
	echo json_encode($data);
}