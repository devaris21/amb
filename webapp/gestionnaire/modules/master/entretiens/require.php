<?php 
namespace Home;

$datas =TYPEENTRETIENVEHICULE::findBy(["id = "=>$this->getId()]);
if (count($datas) > 0) {
	$entretien = $datas[0];
	$entretien->fourni("entretienvehicule");
	$entretiens = $entretien->entretienvehicules;
	$title = "AMB | Les entretiens de vehicules ";
}else{
	header("Location: ../access/erreur404");
}


?>