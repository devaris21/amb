<?php 
namespace Home;


if ($this->getId() == "categorie") {
	$types = GROUPEVEHICULE::findBy([], [], ["name"=>"ASC"]);
	foreach ($types as $key => $type) {
		$type->fourni("vehicule");
		if (count($type->vehicules) < 1) {
			unset($types[$key]);
		}
	}
}elseif($this->getId() == "fabriquant"){
	$types = MARQUE::findBy([], [], ["name"=>"ASC"]);
	foreach ($types as $key => $type) {
		$type->fourni("vehicule");
		if (count($type->vehicules) < 1) {
			unset($types[$key]);
		}
	}
}else{
	$types = TYPEVEHICULE::findBy([], [], ["name"=>"ASC"]);
	foreach ($types as $key => $type) {
		$type->fourni("vehicule");
		if (count($type->vehicules) < 1) {
			unset($types[$key]);
		}
	}
}


$title = "AMB | Tous votre Parc Auto ";
?>