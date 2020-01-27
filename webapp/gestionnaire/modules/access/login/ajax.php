<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "connexion") {
	$data = GESTIONNAIRE::connect(["login = "=> $login, "password = "=>hasher($password)]);
	if ($data->status) {
		$user = $data->element;
		if (!$data->new) {
			$user->se_connecter();
			session("gestionnaire_connecte_id", $user->get_id());
			$data->set_url("gestionnaire", "master", "dashboard");
		}else{
			session("temp_gestionnaire_id", $user->get_id());	
		}
	}		
	echo json_encode($data);
}




if ($action == "newUser") {
	$datas = GESTIONNAIRE::findBy(["id ="=>getSession("temp_gestionnaire_id")]);
	if (count($datas) == 1) {
		$element = $datas[0];
		if ($element->set_login($login)) {
			if ($pass != "" && $pass == $pass0) {
				$element->password = hasher($pass);
				$element->isNew = 0;
				$element->historique("Prémière connexion, nouvelle configuration des paramètres de connexion !");
				$data = $element->save();
				if ($data->status) {
					$element->se_connecter();
					session("gestionnaire_connecte_id", $element->get_id());
					$data->set_url("gestionnaire", "master", "dashboard");
				}
			}
		}else{
			$data->status = false;
			$data->message = "Ce login ne peut être utilisé, veuillez le changer !";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}		
	echo json_encode($data);
}