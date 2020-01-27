<?php 
namespace Home;

$datas =TYPEENTRETIENVEHICULE::findBy(["id = "=>$this->get_id()]);
if (count($datas) > 0) {
	$entretien = $datas[0];
	$entretien->fourni("entretienvehicule");
	$entretiens = $entretien->entretienvehicules;
	$title = "GTA | Les entretiens de vehicules ";
}else{
	header("Location: ../access/erreur404");
}


?>