<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\FICHIER;
use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "password") {
	if ($password0 != "" && $password != "") {
		if ($password == $password1) {
			$datas = CARPLAN::findBy(["id ="=>getSession("carplan_connecte_id")]);
			if (count($datas) == 1) {
				$flotte = $datas[0];
				if ($flotte->checkPassword($password0)) {
					$flotte->setPassword($password);
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
	$datas = CARPLAN::findBy(["id ="=>getSession("carplan_connecte_id")]);
	if (count($datas) == 1) {
		$flotte = $datas[0];
		if ($flotte->checkPassword($password)) {
			if ($flotte->setLogin($login)) {
			$data = $flotte->save();
			}else{
				$data->status = false;
			$data->message = "Vous ne pouvez pas utilisez ce login, veuillez le changer !";
			}
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



if ($action == "image") {
	$datas = CARPLAN::findBy(["id ="=>getSession("carplan_connecte_id")]);
	if (count($datas) == 1) {
		$carplan = $datas[0];
		if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["image"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "carplans", $a);

				$carplan->image = $result->filename;
				$data = $carplan->save();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}
	}else{
		$data->status = false;
		$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
	}
	echo json_encode($data);
}