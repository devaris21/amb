<?php 
namespace Home;


$types = TYPEACCESSOIRE::findBy([], [], ["name"=>"ASC"]);
foreach ($types as $key => $type) {
	$type->fourni("accessoire");
}

$title = "GPA | Entrepot d'accessoires ";
?>