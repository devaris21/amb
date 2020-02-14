<?php 
namespace Home;


$title = "AMB-Carplan | Tableau de bord";

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

session("carplan_vehicule_id", $affectation->vehicule->getId());


?>