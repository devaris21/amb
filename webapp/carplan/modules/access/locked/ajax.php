<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "locked") {
	if ($password != "") {
		$datas = GESTIONNAIRE::findBy(["id ="=> getSession("gestionnaire_connecte_id")]);
		if (count($datas) == 1) {
			$user = $datas[0];
			if ($user->checkPassword($password)) {
				session("gestionnaire_connecte_id", $user->getId());
				$data->status = true;
				$data->setUrl("gestionnaire", "master", "dashboard");
				session("last_access", time());
				unset_session("page_session");
			}
//TODO voir si on peut faire du ldap pour l'authentification
			/*else{
				$ldapconn = ldap_connect("ldap://172.16.0.3");
				if ($ldapconn) {
					$ldapbind = @ldap_bind($ldapconn, $user->email, $password);
					if ($ldapbind) {
						session("gestionnaire_connecte_id", $user->getId());
						$data->status = true;
						$data->setUrl("gestionnaire", "master", "dashboard");
						session("last_access", time());
						unset_session("page_session");
					}else{
						$data->status = false;
						$data->message = "Votre mot de passe est incorrect !";
					}
				}else{
					$data->setUrl("gestionnaire", "access", "login");
				}		
			}*/	
		}else{
			$data->setUrl("gestionnaire", "access", "login");
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez renseigner votre mot de passe ";
	}
	echo json_encode($data);
}