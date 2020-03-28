<?php 
namespace Home;


$title = "AMB-Carplan | Tableau de bord";

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

$affectation->vehicule->fourni("equipement_vehicule");

///////////////////////////////////////////////////////
		$carteGrise = $affectation->vehicule->carteGrise();
		$assurance = $affectation->vehicule->assurance();
		$visitetechnique = $affectation->vehicule->visitetechnique();
		$vidange = $assurance; //$affectation->vehicule->vidange();

session("carplan_vehicule_id", $affectation->vehicule->getId());


?>