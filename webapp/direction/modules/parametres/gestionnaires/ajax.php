<?php 
namespace Home;
require '../../../../../core/root/includes.php';
use Native\ROOTER;
use Native\RESPONSE;
use Native\FICHIER;


$data = new RESPONSE;
extract($_POST);

if ($action == "changer") {
	$datas = GESTIONNAIRE::findBy(["id = "=>getSession("gestionnaire_connecte_id")]);
	if (count($datas) > 0) {
		$gestionnaire = $datas[0];
		if ($gestionnaire->checkPassword($password)) {
			$datas = GESTIONNAIRE::findBy(["id ="=>$id]);
			if (count($datas) == 1) {
				$gestionnaire2 = $datas[0];
				$data = $gestionnaire2->changer_admin();
			}else{
				$data->status = false;
				$data->message = "Une erreur s'est produite pendant le processus, veuillez recommencer !";
			}
		}else{
			$data->status = false;
			$data->message = "Votre mot de passe ne correspond pas !";
		}
	}else{
		$data->status = false;
		$data->message = "Vous ne pouvez pas effectué cette opération !";
	}
	echo json_encode($data);
}
