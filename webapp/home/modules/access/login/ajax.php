<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "connexion") {
	$data = CLIENT::authentification($login, $password);
	if ($data->status) {
		$user = $data->element;
		if (!$data->new) {
			$user->se_connecter();
			session("client_connecte_id", $user->getId());
			$data->setUrl("home", "espaceclient", "dashboard");
		}else{
			session("client_id", $user->getId());	
		}
	}		
	echo json_encode($data);
}


if ($action == "new") {
	$datas = CLIENT::findBy(["id ="=>getSession("client_id")]);
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
					session("client_connecte_id", $element->getId());
					$data->setUrl("home", "espaceclient", "dashboard");
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




if ($action == "reset") {
	$datas = GESTIONNAIRE::findBy(["email ="=>$email]);
	if (count($datas) > 0) {
		$element = $datas[0];
		$data = $element->reset();
	}else{
		$data->status = false;
		$data->message = "Désolé, vous n'etes pas enregistré sur la plateforme !";
	}	
	echo json_encode($data);
}

