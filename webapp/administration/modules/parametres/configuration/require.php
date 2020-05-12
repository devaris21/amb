<?php 
namespace Home;


$energies        = ENERGIE::findBy([], [], ["name"=>"ASC"]);
$sinistres       = TYPESINISTRE::findBy([], [], ["name"=>"ASC"]);
$transmissions   = TYPETRANSMISSION::findBy([], [], ["name"=>"ASC"]);
$prestataires    = TYPEPRESTATAIRE::findBy([], [], ["name"=>"ASC"]);
$gestionnaires   = TYPEGESTIONNAIRE::findBy([], [], ["name"=>"ASC"]);
$equipements     = TYPEEQUIPEMENT::findBy([], [], ["name"=>"ASC"]);
$marques         = MARQUE::findBy([], [], ["name"=>"ASC"]);
$pieces          = TYPEPIECEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$entretiens      = TYPEENTRETIENVEHICULE::findBy([], [], ["name"=>"ASC"]);
$typevehicules   = TYPEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$typedemandes    = TYPEDEMANDEVEHICULE::findBy([], [], ["name"=>"ASC"]);
$groupevehicules = GROUPEVEHICULE::findBy([], [], ["name"=>"ASC"]);

$title = "AMB | Tous vos options de paramètrages";

?>