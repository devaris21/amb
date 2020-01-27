<?php 
namespace Home;


$types = TYPEEQUIPEMENT::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("equipement");
}

$title = "GPA | Entrepot d'équipements ";
?>