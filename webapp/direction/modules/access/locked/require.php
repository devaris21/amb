<?php 
namespace Home;
$title = "BRIXS | Session vérouillée ";

$datas = UTILISATEUR::findBy(["id = "=>getSession("utilisateur_connecte_id")]);
if (count($datas) >0) {
	$utilisateur = $datas[0];
	$utilisateur->actualise();
	session("page_session", 1);
}else{
	header("Location: ../master/parcauto");
}

?>