<?php 
namespace Home;

$types = TYPEPRODUIT::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("produit", ["prestataire_id = "=> $prestataire->getId()]);
}

$title = "AMB | ".$prestataire->name();

?>