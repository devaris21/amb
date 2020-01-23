<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "reset") {
	$datas = EMPLOYE::findBy(["email ="=>$email]);
	if (count($datas) > 0) {
		$element = $datas[0];
		$data = $element->reset();
	}else{
		$data->status = false;
		$data->message = "Désolé, vous n'etes pas enregistré sur la plateforme !";
	}	
	echo json_encode($data);
}

