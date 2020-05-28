<?php 
namespace Home;
$title = "AMB | Session vérouillée ";

$datas = CARPLAN::findBy(["id = "=>getSession("carplan_connecte_id")]);
if (count($datas) >0) {
	$carplan = $datas[0];
	$carplan->actualise();
	session("page_session", 1);
}else{
	header("Location: ../master/parcauto");
}

?>