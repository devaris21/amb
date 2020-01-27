<?php 
namespace Home;


$types = MARQUE::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("vehicule");
	if (count($type->vehicules) < 1) {
		unset($types[$key]);
	}
}

$title = "GPA | Tous votre Parc Auto ";
?>