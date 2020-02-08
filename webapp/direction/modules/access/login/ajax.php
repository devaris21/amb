<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);



if ($action == "connexion") {
	$data = UTILISATEUR::connect(["login="=>$login, "password="=>hasher($password)]);
	if ($data->status) {
		$user = $data->element;
		$datas = DEPARTEMENT::findBy(["id ="=>$departement_id]);
		if (count($datas) > 0) {
			$dep = $datas[0];
			if ($user->departement_id == $dep->getId()) {
				session("departement_id_encours", $dep->getId());
				if (!$data->new) {
					$user->se_connecter();
					session("utilisateur_connecte_id", $user->getId());
					$data->setUrl("direction", "master", "dashboard");
				}else{
					session("temp_utilisateur_id", $user->getId());	
				}
			}else{
				$data->status = false;
				$data->message = "Vous ne pouvez pas vous connecter à cette direction !";
			}
		}else{
			$data->status = false;
			$data->message = "Désolé, cette direction n'existe pas sur la plateforme !";
		}
	}		
	echo json_encode($data);
}





if ($action == "newUser") {
	$datas = UTILISATEUR::findBy(["id ="=>getSession("temp_utilisateur_id")]);
	if (count($datas) == 1) {
		$element = $datas[0];
		if ($element->set_login($login)) {
			if ($pass != "" && $pass == $pass0) {
				$element->password = hasher($pass);
				$element->is_new = 0;
				$element->historique("Prémière connexion, nouvelle configuration des paramètres de connexion !");
				$data = $element->save();
				if ($data->status) {
					$element->se_connecter();
					session("utilisateur_connecte_id", $element->getId());
					$data->setUrl("direction", "master", "dashboard");
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
