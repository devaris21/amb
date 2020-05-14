<?php 
namespace Home;

$demandes1 = DEMANDEVEHICULE::findBy(["typemission_id ="=>TYPEMISSION::PROGRAMMEE, "etape ="=>$utilisateur->departement->circuit_programmee]);
$demandes2 = DEMANDEVEHICULE::findBy(["typemission_id ="=>TYPEMISSION::INOPINEE, "etape ="=>$utilisateur->departement->circuit_inopinee]);

$demandes = array_merge($demandes1, $demandes2);
$title = "AMB-".$utilisateur->departement->name." | Demandes de véhicules à approuver";

?>