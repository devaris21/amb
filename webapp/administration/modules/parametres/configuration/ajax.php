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
			$datas = ADMIN::findBy(["id ="=>getSession("admin_connecte_id")]);
			if (count($datas) == 1) {
				$admin = $datas[0];
				if ($admin->checkPassword($password0)) {
					$admin->setPassword($password);
					$data = $admin->save();
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
	$datas = ADMIN::findBy(["id ="=>getSession("admin_connecte_id")]);
	if (count($datas) == 1) {
		$admin = $datas[0];
		if ($admin->checkPassword($password)) {
			if ($admin->setLogin($login)) {
				$data = $admin->save();
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
	$datas = ADMIN::findBy(["id ="=>getSession("admin_connecte_id")]);
	if (count($datas) == 1) {
		$admin = $datas[0];
		if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
			$image = new FICHIER();
			$image->hydrater($_FILES["image"]);
			if ($image->is_image()) {
				$a = substr(uniqid(), 5);
				$result = $image->upload("images", "admins", $a);

				$admin->image = $result->filename;
				$data = $admin->save();
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