<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "password") {
	if ($password0 != "" && $password0 != "") {
		if ($password == $password1) {
			$datas = EMPLOYE::findBy(["id ="=>getSession("employe_connecte_id")]);
			if (count($datas) == 1) {
				$flotte = $datas[0];
				if ($flotte->verifier_password($password0)) {
					$flotte->set_password($password);
					$data = $flotte->save();
				}else{
					$data->status = false;
					$data->message = "Votre mot de passe n'est pas correcte !";
				}
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant l'opération! Veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Vos nouveaux mots de passe ne correspondent pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez remplir tous les champs !";
	}
	echo json_encode($data);
}




if ($action == "login") {
	$datas = EMPLOYE::findBy(["id ="=>getSession("employe_connecte_id")]);
	if (count($datas) == 1) {
		$flotte = $datas[0];
		if ($flotte->verifier_password($password)) {
			$flotte->set_login($login);
			$data = $flotte->save();
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe n'est pas correcte !";
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant l'opération! Veuillez recommencer !";
	}
	echo json_encode($data);
}


