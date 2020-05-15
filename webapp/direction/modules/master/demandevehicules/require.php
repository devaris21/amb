<?php 
namespace Home;

$demandes1 = DEMANDEVEHICULE::findBy(["etat_id ="=>ETAT::ENCOURS, "typemission_id ="=>TYPEMISSION::PROGRAMMEE, "etape ="=>$utilisateur->departement->circuit_programmee-1]);
$demandes2 = DEMANDEVEHICULE::findBy(["etat_id ="=>ETAT::ENCOURS, "typemission_id ="=>TYPEMISSION::INOPINEE, "etape ="=>$utilisateur->departement->circuit_inopinee-1]);

$demandes = array_merge($demandes1, $demandes2);
$title = "AMB-".$utilisateur->departement->name." | Demandes de véhicules à approuver";

?>