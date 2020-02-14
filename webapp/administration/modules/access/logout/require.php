<?php
namespace Home;
require '../../vendor/autoload.php';

$datas = CARPLAN::findBy([" id= "=>getSession("carplan_connecte_id")]);
if (count($datas) == 1) {
	$carplan = $datas[0];
	$carplan->se_deconnecter();
}


session_destroy();
unset($_GET);
unset($_POST);

header("Location: ../access/login");

?>