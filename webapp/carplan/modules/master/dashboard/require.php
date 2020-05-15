<?php 
namespace Home;


$title = "AMB-Carplan | Tableau de bord";

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

$affectation->vehicule->fourni("equipement_vehicule");

$affectation->fourni("renouvelementaffectation");
$renouv = new RENOUVELEMENTAFFECTATION;
if (count($affectation->renouvelementaffectations) > 0) {
	$renouv = end($affectation->renouvelementaffectations);
}


$datas1 = $affectation->vehicule->fourni("piecevehicule");
$datas2 = $affectation->vehicule->fourni("assurance");
$datas3 = $affectation->vehicule->fourni("visitetechnique");
$datas4 = $affectation->vehicule->fourni("cartegrise");

$datas = array_merge($datas1, $datas2, $datas3, $datas4);
foreach ($datas as $key => $value) {
	$value->comment = $value->name()." établi(e) le ".datecourt($value->date_etablissement)." pour une validité allant du ".datecourt($value->started)." au ".datecourt($value->finished);
}

$datas5 = $affectation->vehicule->fourni("entretienvehicule");
$datas6 = $affectation->vehicule->fourni("sinistre");


$historiques = $affectation->vehicule->historiques();
$historiques = array_merge($datas, $datas5, $datas6, $historiques);
usort($historiques, "comparerDateCreated");

///////////////////////////////////////////////////////
$carteGrise = $affectation->vehicule->carteGrise();
$assurance = $affectation->vehicule->assurance();
$vidange = $affectation->vehicule->vidange();
$visitetechnique = $affectation->vehicule->visitetechnique();

session("carplan_vehicule_id", $affectation->vehicule->getId());


?>