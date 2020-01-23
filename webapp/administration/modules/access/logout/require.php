<?php
namespace Home;
require '../../vendor/autoload.php';

$datas = EMPLOYE::findBy([" id= "=>getSession("employe_connecte_id")]);
if (count($datas) == 1) {
	$employe = $datas[0];
	$employe->se_deconnecter();
}


session_destroy();
unset($_GET);
unset($_POST);

header("Location: ../access/login");

?>