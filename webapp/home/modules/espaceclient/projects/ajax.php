<?php 
namespace Home;
require '../../../../../core/root/includes.php';

use Native\RESPONSE;

$data = new RESPONSE;
extract($_POST);


if ($action == "connexion") {
	$data = UTILISATEUR::authentification($login, $password);
	if ($data->status) {
		$user = $data->element;
		session("utilisateur_id_connecte", $user->get_id());
		$data->set_url("tic", "master", "dashboard");
	}		
	echo json_encode($data);
}