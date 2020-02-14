<?php 
namespace Home;


$types = TYPEVEHICULE::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("vehicule");
}

$title = "AMB | Tous votre Parc Auto ";
?>