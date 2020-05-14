<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "locked") {
	if ($password != "") {
		$datas = PRESTATAIRE::findBy(["id ="=> getSession("prestataire_connecte_id")]);
		if (count($datas) == 1) {
			$user = $datas[0];
			if ($user->checkPassword($password)) {
				session("prestataire_connecte_id", $user->getId());
				$data->status = true;
				session("last_access", time());
				unset_session("page_session");
				$data->url = "/".getSession("lastUrl");
			}else{
				$data->status = false;
				$data->message = "Le mot de passe est incorrect !";
			}	
		}else{
			$data->status = false;
			$data->setUrl("prestataire", "access", "login");
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez renseigner votre mot de passe ";
	}
	echo json_encode($data);
}