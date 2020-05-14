<?php 
namespace Home;
$title = "BRIXS | Session vérouillée ";

$datas = PRESTATAIRE::findBy(["id = "=>getSession("prestataire_connecte_id")]);
if (count($datas) >0) {
	$prestataire = $datas[0];
	$prestataire->actualise();
	session("page_session", 1);
}else{
	header("Location: ../master/parcauto");
}

?>