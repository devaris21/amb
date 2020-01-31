<?php 
namespace Home;


$types = TYPEEQUIPEMENT::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("equipement");
}

$title = "AMB | Entrepot d'équipements ";
?>