<?php 
namespace Home;


switch ($utilisateur->departement->getId()) {
	case 1:
	$demandes = DEMANDEVEHICULE::drh();
	break;

	case 1:
	$demandes = DEMANDEVEHICULE::dg();
	break;

	default:
	$demandes = [];
	break;
}


$title = "AMB-".$utilisateur->departement->name." | Demandes de véhicules à approuver";

?>