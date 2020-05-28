<?php 
namespace Home;
$title = "AMB | Session vérouillée ";

$datas = ADMIN::findBy(["id = "=>getSession("admin_connecte_id")]);
if (count($datas) >0) {
	$admin = $datas[0];
	$admin->actualise();
	session("page_session", 1);
}else{
	header("Location: ../master/parcauto");
}

?>