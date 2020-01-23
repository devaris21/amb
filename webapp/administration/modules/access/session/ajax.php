<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "session") {
	if ($password != "") {
		$datas = EMPLOYE::findBy(["id ="=> getSession("employe_connecte_id")]);
		if (count($datas) == 1) {
			$user = $datas[0];
			if ($user->verifier_password($password)) {
				session("employe_connecte_id", $user->get_id());
				$data->status = true;
				$data->set_url("administration", "master", "dashboard");
				session("last_access", time());
				unset_session("page_session");
			}else{
				$ldapconn = ldap_connect("ldap://172.16.0.3");
				if ($ldapconn) {
					$ldapbind = @ldap_bind($ldapconn, $user->email, $password);
					if ($ldapbind) {
						session("employe_connecte_id", $user->get_id());
						$data->status = true;
						$data->set_url("administration", "master", "dashboard");
						session("last_access", time());
						unset_session("page_session");
					}else{
						$data->status = false;
						$data->message = "Votre mot de passe est incorrect !";
					}
				}else{
					$data->set_url("administration", "access", "login");
				}		
			}	
		}else{
			$data->set_url("administration", "access", "login");
		}
	}else{
		$data->status = false;
		$data->message = "Veuillez renseigner votre mot de passe ";
	}
	echo json_encode($data);
}